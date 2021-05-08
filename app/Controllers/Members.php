<?php

namespace App\Controllers;

class Members extends Admin
{
	public $members;

	public function __construct()
	{
		$this->membersModel = new \App\Models\MembersModel();
		$this->member = new \App\Entities\Member();
		$this->electionsModel = new \App\Models\ElectionsModel();
		$this->election = new \App\Entities\Election();
		$this->data['page'] = CATEGORY;
		$this->data['errors'] = null;
	}

	public function index()
	{
		$this->data['plugins'][] = DATATABLE;
		$this->data['members'] = $this->membersModel->findAll();
		$this->viewdata['view_html'] = view('admin/member/member-html', $this->data);
		$this->getJsHtml();
		$this->getCssHtml();
		return $this->renderPage();
	}

	public function addMembers()
	{
		if($this->request->getPost('id'))
			$this->member = $this->membersModel->find($this->request->getPost('id'));
		$this->member->fill($this->request->getPost());
		$this->validation->setRule('name', 'Name', 'required');
		$this->validation->setRule('aadhar_no', 'Aadhar Number', 'required');
		$this->validation->setRule('contact', 'Contact', 'required');
		$this->validation->setRule('pincode', 'Pin Code/Zip Code', 'required');
		if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
			$this->member->user_id = $this->session->get('user_id');
			if ($file_data = $this->fileUploadData()) {
				if ($this->member->profile_name && file_exists($this->member->profile_path . '/' . $this->member->profile_name))
					unlink($this->member->profile_path . '/' . $this->member->profile_name);
				if ($this->member->profile_name && file_exists($this->member->profile_path . '/thumb/' . $this->member->profile_name))
					unlink($this->member->profile_path . '/thumb/' . $this->member->profile_name);
				
				$this->member->profile_name = $file_data['file_name'];
				$this->member->profile_path = $file_data['file_path'];
				$this->member->profile_full_path = $file_data['file_full_path'];

				if (!is_dir($this->member->profile_path . '/thumb/')) {
					mkdir($this->member->profile_path . '/thumb/', 0777, TRUE);
				}
				$source_image = $this->member->profile_path . '/' . $this->member->profile_name;
				\Config\Services::image()
					->withFile($source_image)
					->resize(60, 60, true, 'auto')
					->save($this->member->profile_path . '/thumb/' . $this->member->profile_name);
			}
			try {
				$this->membersModel->save($this->member);
				$this->viewdata['show_notify'] = ['title' => 'Success!', 'text' => 'Members Save Successfully', 'type' => SUCCESS_NOTIFY];
				$this->viewdata['eval'] = '$("#public-modal").modal("hide");';
				$this->index();
			
			} catch (\Throwable $e) {
				$this->viewdata['show_notify'] = ['title' => 'Warnig!', 'text' => $e->getMessage(), 'type' => WORNING_NOTIFY];
				return $this->renderPage();
			}
		} else {
			$this->data['errors'] = $this->validation->getErrors();
			$this->viewdata['show_notify'] = ['title' => 'Validaton Errors!', 'type' => WORNING_NOTIFY];
			$this->addMembersModal($this->member->id);
		}
	}

	public function addMembersModal($id = 0)
	{
		$member = $this->membersModel->find($id);
		$this->data['member'] = ($member) ? $member : $this->member;
		$this->data['elections'] = $this->electionsModel->findAll();
		$body_html = view('admin/member/member-form-html', $this->data);
		$this->viewdata['modal_data'] = ['body_html' => $body_html, 'modal_id' => '#public-modal', 'title' => 'Add/Edit Member'];
		return $this->renderPage();
	}
	
	public function deleteMembers($id = 0)
	{
		$this->membersModel->delete($id);
		$this->viewdata['show_notify'] = ['title' => 'Success!', 'text' => 'Remove successfully...', 'type' => SUCCESS_NOTIFY];
		$this->index();
	}
}
