<?php

namespace App\Controllers;

class Captcha extends BaseController
{
	public function index()
	{
		echo view('Templates/header');
		echo view('captcha');
        echo view('Templates/footer');
       
       
	}
}
