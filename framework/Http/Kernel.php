<?php

namespace CodeBrain\Framework\Http;

class Kernel
{
	public function handle(Request $request): Response
	{

		$content = '<h1>Hello Response!</h1>';
		return new Response($content);
	}

}