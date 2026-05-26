<?php

test('Home Page Open hota he', function () {
    $response = $this->get('/');
    dd($response->status());
    $response->assertStatus(200);
});

test('yeh page exist nahi karta', function () {
    $response = $this->get('/abcxyz');
    $response->assertStatus(404);
});
