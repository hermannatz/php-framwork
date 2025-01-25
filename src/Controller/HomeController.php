<?php

namespace App\Controller;
use CodeBrain\Framework\Http\Response;

class HomeController
{

	public function index(): Response
	{
		$content = '<h1>Hello from Home Controller</h1>';
		return new Response($content);
	}

}