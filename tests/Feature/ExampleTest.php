<?php

it('returns a successful response', function () {
    $response = $this->get('/');

    $response->assertRedirectToRoute('filament.admin.auth.login');
});
