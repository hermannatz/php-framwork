<?php

use App\Controller\HomeController;
use App\Controller\PostContoller;

return [
	['GET', '/', [ HomeController::class, 'index']],
	['GET', '/posts/{id:\d+}', [ PostContoller::class, 'show']]
];



