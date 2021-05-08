<?php

namespace App\Controllers;

class Elections extends Admin
{
	public $elections;

	public function __construct()
	{
		$this->electionsModel = new \App\Models\ElectionsModel();
		$this->election = new \App\Entities\Election();
		
		$this->categoriesModel = new \App\Models\CategoriesModel();
		$this->category = new \App\Entities\Category();

		$this->data['page'] = CATEGORY;
		$this->data['errors'] = null;
	}

	public function index()
	{
		$this->data['plugins'][] = DATATABLE;
		$this->data['elections'] = $this->electionsModel->findAll();
		$this->viewdata['view_html'] = view('admin/election/election-html', $this->data);
		$this->getJsHtml();
		$this->getCssHtml();
		return $this->renderPage();
	}

	public function addElections()
	{
		if($this->request->getPost('id'))
			$this->election = $this->electionsModel->find($this->request->getPost('id'));
		$this->election->fill($this->request->getPost());

		$this->validation->setRule('name', 'Name', 'required');
		$this->validation->setRule('start_date_time', 'Start Date Time', 'required');
		$this->validation->setRule('end_date_time', 'End Date Time', 'required');
		if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
			$this->election->user_id = $this->session->get('user_id');
			$this->electionsModel->save($this->election);
			$this->viewdata['show_notify'] = ['title' => 'Success!', 'text' => 'Elections Save Successfully', 'type' => SUCCESS_NOTIFY];
			$this->viewdata['eval'] = '$("#public-modal").modal("hide");';
			$this->index();
		} else {
			$this->data['errors'] = $this->validation->getErrors();
			$this->viewdata['show_notify'] = ['title' => 'Validaton Errors!', 'type' => WORNING_NOTIFY];
			$this->addElectionsModal($this->election->id);
		}
	}

	public function addElectionsModal($id = 0)
	{
		$election = $this->electionsModel->find($id);
		$this->data['election'] = ($election) ? $election : $this->election;

		$this->data['categories'] = $this->categoriesModel->findAll();

		$body_html = view('admin/election/election-form-html', $this->data);
		$this->viewdata['modal_data'] = ['body_html' => $body_html, 'modal_id' => '#public-modal', 'title' => 'Add/Edit Election'];
		return $this->renderPage();
	}
	
	public function deleteElections($id = 0)
	{
		$this->electionsModel->delete($id);
		$this->viewdata['show_notify'] = ['title' => 'Success!', 'text' => 'Remove successfully...', 'type' => SUCCESS_NOTIFY];
		$this->index();
	}
}
