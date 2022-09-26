<?php

it('can return avatar url', function () {
    $avatar = new \Cmdinglasan\FilamentBoringAvatars\BoringAvatars();
    $url = $avatar->get('Christian Dinglasan');
    expect($url)->toBeString();
});

it('starts with boring avatar api url', function () {
    $avatar = new \Cmdinglasan\FilamentBoringAvatars\BoringAvatars();
    $url = $avatar->get('Christian Dinglasan');
    expect($url)->toStartWith('https://source.boringavatars.com');
});

it('has correct url for the user\'s name', function () {
    $avatar = new \Cmdinglasan\FilamentBoringAvatars\BoringAvatars();
    $url = $avatar->get('Christian Dinglasan');
    expect($url)->toBe('https://source.boringavatars.com/marble/40/C+D');
});

it('has correct colors array', function () {
    $api = new \Cmdinglasan\FilamentBoringAvatars\BoringAvatars();

    $url = $api->get(
        'John Doe',
        'marble',
        40,
        ['#264653', '#2a9d8f', '#e9c46a', '#f4a261', '#e76f51'],
    );

    expect($url)->toBe('https://source.boringavatars.com/marble/40/J+D?colors=264653,2a9d8f,e9c46a,f4a261,e76f51');
});

it('has no name', function () {
    $avatar = new \Cmdinglasan\FilamentBoringAvatars\BoringAvatars();
    $url = $avatar->get('');
    expect($url)->toBe('https://source.boringavatars.com/marble/40/');
});
