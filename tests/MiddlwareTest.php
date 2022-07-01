<?php

it('can redirect to coming soon page when enabled', function () {
    $this->app['config']->set('coming-soon.enabled', true);

    $response = $this->get('/');

    dd($response->getContent());

    $response->assertRedirect('coming-soon');
});
