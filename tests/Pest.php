<?php

use Illuminate\Http\Request;
use RhysLees\ComingSoon\Tests\TestCase;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

uses(TestCase::class)->in(__DIR__);

function createRequest($method, $uri, $headers): Request
{
    $symfonyRequest = SymfonyRequest::create($uri, $method, $headers);

    return Request::createFromBase($symfonyRequest);
}
