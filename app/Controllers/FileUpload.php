<?php

namespace App\Controllers;

class FileUpload extends BaseController
{
	public function index()
	{
		$page_data['view_html'] = view('admin/products/product-list');
		return $this->renderPage($page_data);
  }
    
	public function upload()
	{
        $this->setupFileUpload($this->request->getPost());
        $fileData = $this->fileUploadData($this->request->getPost());
        return ($fileData) ? $fileData['file_full_path'] : '';
	}

}
