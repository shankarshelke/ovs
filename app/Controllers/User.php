<?php

namespace App\Controllers;

class User extends Admin
{
	public $product_details;

    public function __construct()
	{
		$this->productsModel = new \App\Models\ProductsModel();
		$this->addressesModel = new \App\Models\AddressesModel();
		$this->categoriesModel = new \App\Models\CategoriesModel();
		$this->product_details = new \App\Entities\Product();
		$this->data['page'] = USER;
	}
	public function index()
	{
		$this->data['plugins'][] = DATATABLE;
		$this->data['products'] = $this->productsModel->findAll();
		foreach ($this->data['products'] as $key => $product) {
			$this->data['products'][$key]->categories = $this->categoriesModel->find($product->cat_ids);
		}
		$this->viewdata['view_html'] = view('admin/products/product-list', $this->data);
		
		$this->getJsHtml();
		$this->getCssHtml();
		return $this->renderPage();
    }
    
    public function profile($id = false)
	{
		if($this->session->get('post')){
            $this->session->remove('post');}
		$tables = $this->configIonAuth->tables;
		$postParams = $this->post;
		$uId = ($id) ? $id : $this->user->id;
		

		if(isset($this->post['username'])){
            $this->validation->setRule('username', 'Name', 'trim|required|is_unique[' . $tables['users'] . '.username]');
			// $this->form_validation->set_message('is_unique', 'The %s is already taken');
		}

		if($this->validation->withRequest($this->request)->run())
		{
			if(isset($postParams['editField'])) {unset($postParams['editField']);}
			$this->ionAuth->update(array('table' => 'users', 'data' => $postParams, 'where' => 'id ='.$uId));
			$this->data['user'] = $this->ion_auth->user($this->ion_auth->get_user_id())->row();
		}else{ 
			$this->data['errors'] = $this->validation->getErrors();
			if(!$this->validation->getErrors() && isset($postParams['editField'])){unset($postParams['editField']);}
		}
		//print_r($userProfileData['userUniqueProfileHtml']);exit();
		if(isset($postParams['editField'])){
			$selectorHtml = $this->load->view('admin/user/update-profile-html', $postParams, true);
			$this->viewdata['update'] = ['selectorHtml' => $selectorHtml, 'selector' => '#unique-profile'];
		}else{
			$this->data['addresses'] = $this->addressesModel->where('user_id' , $this->user->id)->findAll();
			$this->data['userUniqueProfileHtml'] = view('admin/user/user-unique-profile-html', $this->data);
			
			$this->data['userPersonalProfileHtml'] = view('admin/user/user-personal-profile-html', $this->data);
			// $this->data['socialProfileFormHtml'] = $this->load->view('admin/forms/social-form-html', $this->data, true);
			$this->viewdata['view_html'] = view('admin/user/user-profile', $this->data);
			$this->getJsHtml();
			$this->getCssHtml();
		}
		return $this->renderPage();
		
    }


    public function update($id = 0)
	{
		$id = isset($this->post['id']) ? $this->post['id']  : $id;
		if(isset($this->post['name'])){
			$this->form_validation->set_rules('name', 'name', 'trim|required');
			$this->form_validation->set_rules('additionalContact', $this->lang->line('create_user_validation_contact_label'), 'trim|regex_match[/^[0-9]{10}$/]');
			$this->form_validation->set_rules('additionalEmail', $this->lang->line('create_user_validation_email_label'), 'trim|valid_email');
		}

		if(isset($this->post['username']) && $this->post['username'] != $this->data["user"]->username)
			$this->form_validation->set_rules('username', $this->lang->line('create_user_validation_username_label'), 'trim');
		
		if($this->form_validation->run() == true)
		{	
			// if(isset($postParams['editField'])) {unset($postParams['editField']);}
			// $this->admin_model->update(array('table' => 'users', 'data' => $postParams, 'where' => 'id ='.$id));
			// $this->data['user'] = $this->ion_auth->user($id)->row();
			
			$userPersonalProfileData = array('name' => $this->post['name'], 'additionalContact' => $this->post['additionalContact'], 'additionalEmail' => $this->post['additionalEmail'] );
			$this->admin_model->update(array('table' => 'users', 'data' => $userPersonalProfileData, 'where' => 'id ='.$id));
			// $this->admin_model->update(array('table' => 'address', 'data' => $address, 'where' => 'uId ='.$id));
		
			// $userPersonalProfileData['address'] = $this->admin_model->get_row(array('table' => 'address', 'where' => 'uId ='.$id));
			$selectorHtml = $this->load->view('admin/user/user-personal-profile-html', $userPersonalProfileData, true);
			
			echo json_encode(array('success' => true, 'notify' => ['title' => 'Success!', 'text' => 'Profile Save Successfully..', 'type' => SUCCESS_NOTIFY], 'update' => array('selectorHtml' => $selectorHtml, 'selector' => '#personal-profile')));

		}else {
			if(isset($this->post['profile'])) {
				$this->admin_model->update(array('table' => 'users', 'data' => $this->post, 'where' => 'id ='.$id));
				
				echo json_encode(array('message' => $this->getAlertHtml(array('text' => 'Profile update successfull...', 'type' => 1)),'eval' => '$("#file-upload-modal").modal("hide");$(".modal-backdrop").removeClass("modal-backdrop");$(".profileImg").attr("src", "'. base_url().$this->post['profile'] .'")'));
			}else if(isset($this->post['fbLink'])){
				$this->admin_model->update(array('table' => 'users', 'data' => $this->post, 'where' => 'id ='.$id));
				$selector = "social-profile";
				$selectorHtml = $this->load->view('admin/forms/social-form-html', $this->post, true);
				echo json_encode(array('message' => $this->getAlertHtml(array('text' => 'Social Profile update successfull...', 'type' => 1)),'update' => array('selectorHtml' => $selectorHtml, 'selector' => $selector)));
			}
		}
	}
    
   
	public function sendEmailText($uId = false){
		$notify = false;
		// $postParams = array_merge($this->ion_auth->user($this->data['user']->id)->row_array(), $this->post);
		if(isset($this->post['sendOtp'])){
			$tables = $this->config->item('tables', 'ion_auth');
			$this->form_validation->set_message('is_unique', 'The %s is already taken');
			if(isset($this->post['contact']) && $this->post['contact'] != $this->user->contact)
				$this->form_validation->set_rules('contact', $this->lang->line('create_user_validation_contact_label'), 'trim|required|regex_match[/^[0-9]{10}$/]|is_unique[' . $tables['users'] . '.contact]');

			if(isset($this->post['email']) && $this->post['email'] != $this->user->email)
				$this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'trim|valid_email|is_unique[' . $tables['users'] . '.email]');

			if(isset($this->post['username']) && $this->post['username'] != $this->user->username)
				$this->form_validation->set_rules('username', $this->lang->line('create_user_validation_username_label'), 'trim|is_unique[' . $tables['users'] . '.username]');
			if($this->form_validation->run() == true)
			{
				$this->post['verifyOtp'] = true;
				$this->session->set_userdata('post', $this->post);
				$sendOtp = $this->sendOtp($this->user->id, $this->post);
				$notify = ['title' => 'Send OTP', 'text' => 'OTP send in your new '.$this->post['sendOtp'].'.', 'type' => INFO_NOTIFY];
			}else
				$sendOtp['status'] = false;
		}else{
			$this->post['verifyOtp'] = true;
			$sendOtp = $this->sendOtp($this->user->id, $this->post);
			$notify = ['title' => 'Send OTP', 'text' => 'OTP send in your ragister Contact or Email', 'type' => INFO_NOTIFY];
		}
		$selectorHtml = $this->load->view('admin/user/update-profile-html', $this->post, true);

		echo json_encode(array('success' => TRUE, 'notify' => $notify, 'sendOtp' => $sendOtp, 'update' => array('selectorHtml' => $selectorHtml, 'selector' => '#unique-profile')));
	}

	public function verifyOtp(){
		// print_r($this->session->userdata());exit();
		if($this->post['otp'] == $this->data['user']->otp){
			if($this->session->userdata('post')){
				$postParams = $this->session->userdata('post');
				$this->admin_model->update(array('table' => 'users', 'data' => array($postParams['editField'] => $postParams[$postParams['editField']] ), $postParams, 'where' => 'id ='.$this->data['user']->id));
				$this->session->unset_userdata('post');
				$this->data['user'] = $this->ion_auth->user($this->data['user']->id)->row();

				$selectorHtml = $this->load->view('admin/user/user-unique-profile-html', $postParams, true);
				$notify = ['title' => 'Verify and Success!', 'text' => 'Your '. $postParams['editField'] .' change successful..', 'type' => SUCCESS_NOTIFY];
			}else{
				$selectorHtml = $this->load->view('admin/user/update-profile-html', $this->post, true);
				$notify = ['title' => 'Verify OTP!', 'text' => 'Your OTP is verify successful..', 'type' => SUCCESS_NOTIFY];
			}
		}else{
			$this->post['verifyOtp'] = false;
			$selectorHtml = $this->load->view('admin/user/update-profile-html', $this->post, true);
			$notify = ['title' => 'Invalid OTP!', 'text' => 'Your OTP is wrong', 'type' => WORNING_NOTIFY];
		}

		echo json_encode(array('success' => true, 'notify' => $notify, 'update' => array('selectorHtml' => $selectorHtml, 'selector' => '#unique-profile')));
	}

	public function profileUpload(){
		if ($uploadData = $this->fileUploadData($this->post)) {
			if (isset($this->user->profile) && file_exists($this->user->profile))
				unlink($this->user->profile);
			$post['profile'] = $uploadData['filePath'] . '/' . $uploadData['fileName'];
			$this->admin_model->update(['table' => 'users', 'data' => $post, 'where' => ['id' => $this->user->id]]);
			$eval = '$(".profileImg").attr("src", "'. base_url($post['profile']) .'");$("#file-upload-modal").modal("hide")';
			$json_array = ['success' => true, 'notify' => ['title' => 'Success!', 'text' => 'Profile Upload Successfully..', 'type' => SUCCESS_NOTIFY], 'eval' => $eval];
		}else{
			$json_array = ['success' => false, 'notify' => ['title' => 'Fail!', 'text' => 'Profile Uploading Fail']];
		}

		echo json_encode($json_array);
	}
}
