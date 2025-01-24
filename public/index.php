<?php declare(strict_types=1);

use CodeBrain\Framework\Http\Kernel;
use CodeBrain\Framework\Http\Request;
use CodeBrain\Framework\Http\Response;

require_once dirname(__DIR__) . '/vendor/autoload.php';

# Request received
$request = Request::createFromGlobals();

# Perform business logic
$kernel = new Kernel();

# Send response
$response = $kernel->handle($request);

$response->send();
