<?php

use Symfony\Component\HttpFoundation\Request as SymfonyRequest;
use Illuminate\Http\Request;
use RhysLees\ComingSoon\Tests\TestCase;

uses(TestCase::class)->in(__DIR__);

function createRequest($method, $uri, $headers): Request
{
    $symfonyRequest = SymfonyRequest::create($uri, $method, $headers);

    return Request::createFromBase($symfonyRequest);
}
