<?php

namespace App\Controllers;

class Voters extends BaseController
{
	public $voters;

	public function __construct()
	{
		$this->votersModel = new \App\Models\VotersModel();
		$this->voter = new \App\Entities\Voter();
		$this->data['page'] = CATEGORY;
		$this->data['errors'] = null;
	}

	public function index()
	{
		$this->data['plugins'][] = DATATABLE;
		$this->data['voters'] = $this->votersModel->findAll();
		$this->viewdata['view_html'] = view('admin/voter/voter-html', $this->data);
		$this->getJsHtml();
		$this->getCssHtml();
		return $this->renderPage();
	}

	public function addVoters()
	{
		if($this->request->getPost('id'))
			$this->voter = $this->votersModel->find($this->request->getPost('id'));
		$this->voter->fill($this->request->getPost());
		$this->validation->setRule('name', 'Name', 'required');
		if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
			$this->voter->user_id = $this->session->get('user_id');
			$this->votersModel->save($this->voter);
			$this->viewdata['show_notify'] = ['title' => 'Success!', 'text' => 'Voters Save Successfully', 'type' => SUCCESS_NOTIFY];
			$this->viewdata['eval'] = '$("#public-modal").modal("hide");';
			$this->index();
		} else {
			$this->data['errors'] = $this->validation->getErrors();
			$this->viewdata['show_notify'] = ['title' => 'Validaton Errors!', 'type' => WORNING_NOTIFY];
			$this->addVotersModal($this->voter->id);
		}
	}

	public function addVotersModal($id = 0)
	{
		$voter = $this->votersModel->find($id);
		$this->data['voter'] = ($voter) ? $voter : $this->voter;
		$body_html = view('admin/voter/voter-form-html', $this->data);
		$this->viewdata['modal_data'] = ['body_html' => $body_html, 'modal_id' => '#public-modal', 'title' => 'Add/Edit Voter'];
		return $this->renderPage();
	}
	
	public function deleteVoters($id = 0)
	{
		$this->votersModel->delete($id);
		$this->viewdata['show_notify'] = ['title' => 'Success!', 'text' => 'Remove successfully...', 'type' => SUCCESS_NOTIFY];
		$this->index();
	}
}
