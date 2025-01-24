<?php declare(strict_types=1);

use CodeBrain\Framework\Http\Request;
use CodeBrain\Framework\Http\Response;

require_once dirname(__DIR__) . '/vendor/autoload.php';

# request received

$request = Request::createFromGlobals();
# perform some business logic

# send response (json)

# $content = '<h1>Hello World</h1>';

# $response = new Response(content: $content, status: 200, headers: []);

$kernel = new Kernel();

$response = $kernel->handle($request);

$response->send();
