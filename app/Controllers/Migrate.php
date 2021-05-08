<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Migrate extends Controller
{
	public function index()
	{
		$migtate = \config\Services::migrations();
		try {
            $migtate->latest();
            echo "Run Migration success.";
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
