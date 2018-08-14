<?php

$app->middleware('before', function ($c) {
    session_start();
});

$app->middleware('before', function () {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: *');
});

$app->middleware('before', function ($c) {
    if (!preg_match('/^\/api\/*./', $c['router']->getCurrentUrl())) {
        return;
    }

    $data = (new \App\Controllers\UsersController)->getCurrentUser($c);

    $c['loggedUser'] = function () use ($data) {
        return $data;
    };
});

/*
$app->middleware('after', function ($c) {
    echo 'after';
});

$app->middleware('after', function ($c) {
    echo 'after 2';
});
*/
