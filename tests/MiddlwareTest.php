<?php

use RhysLees\ComingSoon\Http\Middlware\ComingSoonMiddleware;

it('can redirect to coming soon page when enabled', function () {
    $response = (new ComingSoonMiddleware())->handle(
        createRequest('get', '/', []),
        fn () => new \Symfony\Component\HttpFoundation\Response()
    );

    expect($response->isRedirect(url('coming-soon')))->toBeTrue();
});
