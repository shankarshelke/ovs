<?php

namespace App\Controllers;

class Categories extends Admin
{
	public $categories;

	public function __construct()
	{
		$this->categoriesModel = new \App\Models\CategoriesModel();
		$this->category = new \App\Entities\Category();
		$this->data['page'] = CATEGORY;
		$this->data['errors'] = null;
		
	}

	public function index()
	{
		$this->data['plugins'][] = DATATABLE;
		$this->data['categories'] = $this->categoriesModel->findAll();
		$this->viewdata['view_html'] = view('admin/category/category-html', $this->data);
		$this->getJsHtml();
		$this->getCssHtml();
		return $this->renderPage();
	}

	public function addCategories()
	{
		if($this->request->getPost('id'))
			$this->category = $this->categoriesModel->find($this->request->getPost('id'));
		$this->category->fill($this->request->getPost());
		$this->validation->setRule('name', 'Name', 'required');
		if ($this->request->getPost() && $this->validation->withRequest($this->request)->run()) {
			$this->category->user_id = $this->session->get('user_id');
			if ($file_data = $this->fileUploadData()) {
				if (file_exists($this->category->file_path . '/' . $this->category->file_name))
					unlink($this->category->file_path . '/' . $this->category->file_name);
				if (file_exists($this->category->file_path . '/thumb/' . $this->category->file_name))
					unlink($this->category->file_path . '/thumb/' . $this->category->file_name);
				
				$this->category->file_name = $file_data['file_name'];
				$this->category->file_path = $file_data['file_path'];
				$this->category->file_full_path = $file_data['file_full_path'];

				if (!is_dir($this->category->file_path . '/thumb/')) {
					mkdir($this->category->file_path . '/thumb/', 0777, TRUE);
				}
				$source_image = $this->category->file_path . '/' . $this->category->file_name;
				\Config\Services::image()
					->withFile($source_image)
					->resize(60, 60, true, 'auto')
					->save($this->category->file_path . '/thumb/' . $this->category->file_name);
			}
			$this->categoriesModel->save($this->category);
			$this->viewdata['show_notify'] = ['title' => 'Success!', 'text' => 'Categories Save Successfully', 'type' => SUCCESS_NOTIFY];
			$this->viewdata['eval'] = '$("#public-modal").modal("hide");';
			$this->index();
		} else {
			$this->data['errors'] = $this->validation->getErrors();
			$this->viewdata['show_notify'] = ['title' => 'Validaton Errors!', 'type' => WORNING_NOTIFY];
			$this->addCategoriesModal($this->category->id);
		}
	}

	public function addCategoriesModal($id = 0)
	{
		$category = $this->categoriesModel->find($id);
		$this->data['category'] = ($category) ? $category : $this->category;
		$body_html = view('admin/category/category-form-html', $this->data);
		$this->viewdata['modal_data'] = ['body_html' => $body_html, 'modal_id' => '#public-modal', 'title' => 'Add/Edit Category'];
		return $this->renderPage();
	}
	
	public function deleteCategories($id = 0)
	{
		$this->categoriesModel->delete($id);
		$this->viewdata['show_notify'] = ['title' => 'Success!', 'text' => 'Remove successfully...', 'type' => SUCCESS_NOTIFY];
		$this->index();
	}
}
