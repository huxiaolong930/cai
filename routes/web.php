<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () {
    $is_login = 1;
    return view("index",compact('is_login'));
});

$app->get('/about', function () {
    return view("about");
});

$app->get('/doctors', function () {
    return view("doctors");
});

$app->get('/appointment', function () {
    return view("appointment");
});

$app->get('/departments', function () {
    return view("departments");
});

$app->get('/services', function () {
    return view("services");
});

$app->get('/contact', function () {
    return view("contact");
});

$app->get('/single', function () {
    return view("single");
});

$app->get('/trade', function () {
    return view("trade");
});

$app->get('/ucenter', function () {
    return view("ucenter");
});