<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Admin extends BaseController
{
	public $categories;

	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		if (! $this->ionAuth->loggedIn())
		{
			if ($this->request->isAJAX()) {
				echo json_encode(['redirect' => '/auth/login']);  exit();
			} else {
				// redirect them to the login page
				return redirect()->to(base_url('/auth/login'));
			}
		}
	}

}
