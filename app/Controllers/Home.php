<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		if (! $this->ionAuth->loggedIn())
		{
			if ($this->request->isAJAX()) {
				echo json_encode(['redirect' => '/auth/login']);  exit();
			} else {
				// redirect them to the login page
				return redirect()->to(base_url('/auth/login')); exit();
			}
		}
		$page_data['view_html'] = view('welcome_message');
		return $this->renderPage($page_data);
	}
}
