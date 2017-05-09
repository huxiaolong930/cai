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

$app->get('/', "QuizController@index");

$app->get('/trade', function () {
    return view("trade");
});

$app->get('/ucenter', function () {
    return view("ucenter");
});

// 注册
$app->post('/reg', "UserController@reg");

// 重置密码
$app->get('/forgetpwd', function () {
    return view("forgetpwd");
});
$app->post('/forgetpwd', "UserController@forgetpwd");
$app->get('/resetpwd', function () {
    return view("resetpwd");
});
$app->post('/resetpwd', "UserController@resetpwd");

// 获取验证码
$app->get('/getcaptcha', "UserController@getcaptcha");

// 获取手机码
$app->post('/getPhoneCode', "UserController@getPhoneCode");



//==================================
$app->get('/user', "UserController@index");
$app->get('/save', "UserController@save");

//===================================
$app->get('/index', function () {
    $is_login = 1;
    return view("index",compact('is_login'));
});

$app->get('/test', "UserController@test");

//$app->get('/test', function () {
//    return view("test");
//});
//$app->post('/test', function () {
//    return 2;
//});

/*
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

*/