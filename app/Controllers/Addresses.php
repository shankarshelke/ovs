<?php

namespace App\Controllers;

class Addresses extends BaseController
{
	public $addresses;

	public function __construct()
	{
		$this->addressesModel = new \App\Models\AddressesModel();
		$this->address = new \App\Entities\Address();
		$this->data['page'] = CATEGORY;
		$this->data['errors'] = null;
	}

	public function index()
	{
		$this->data['plugins'][] = DATATABLE;
		$this->data['addresses'] = $this->addressesModel->findAll();
		$this->viewdata['view_html'] = view('admin/address/address-html', $this->data);
		$this->getJsHtml();
		$this->getCssHtml();
		return $this->renderPage();
	}

	public function addAddresses()
	{
		if($this->request->getPost('id'))
			$this->address = $this->addressesModel->find($this->request->getPost('id'));
		$this->address->fill($this->request->getPost());
		$this->validation->setRule('name', 'Name', 'required');
		if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
			$this->address->user_id = $this->session->get('user_id');
			$this->addressesModel->save($this->address);
			$this->viewdata['show_notify'] = ['title' => 'Success!', 'text' => 'Addresses Save Successfully', 'type' => SUCCESS_NOTIFY];
			$this->viewdata['eval'] = '$("#public-modal").modal("hide");';
			$this->index();
		} else {
			$this->data['errors'] = $this->validation->getErrors();
			$this->viewdata['show_notify'] = ['title' => 'Validaton Errors!', 'type' => WORNING_NOTIFY];
			$this->addAddressesModal($this->address->id);
		}
	}

	public function addAddressesModal($id = 0)
	{
		$address = $this->addressesModel->find($id);
		$this->data['address'] = ($address) ? $address : $this->address;
		$body_html = view('admin/address/address-form-html', $this->data);
		$this->viewdata['modal_data'] = ['body_html' => $body_html, 'modal_id' => '#public-modal', 'title' => 'Add/Edit Address'];
		return $this->renderPage();
	}
	
	public function deleteAddresses($id = 0)
	{
		$this->addressesModel->delete($id);
		$this->viewdata['show_notify'] = ['title' => 'Success!', 'text' => 'Remove successfully...', 'type' => SUCCESS_NOTIFY];
		$this->index();
	}
}
