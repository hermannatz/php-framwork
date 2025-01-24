<?php declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

# request received

$request = \CodeBrain\Framework\Http\Request::createFromGlobals();

dd($request);

# perform some business logic

# send response (json)

$content = 'Hello World!';

$response = new Response(content: $content, status: 200, headers: []);

$response->send();
