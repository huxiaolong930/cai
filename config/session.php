<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Session Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the default session "driver" that will be used on
    | requests. By default, we will use the lightweight native driver but
    | you may specify any of the other wonderful drivers provided here.
    |
    | Supported: "file", "cookie", "database", "apc",
    |            "memcached", "redis", "array"
    |
    */

    'driver' => env('SESSION_DRIVER', 'file'),

    /*
    |--------------------------------------------------------------------------
    | Session Lifetime
    |--------------------------------------------------------------------------
    |
    | Here you may specify the number of minutes that you wish the session
    | to be allowed to remain idle before it expires. If you want them
    | to immediately expire on the browser closing, set that option.
    |
    */

    'lifetime' => 120,

    'expire_on_close' => false,

    /*
    |--------------------------------------------------------------------------
    | Session Encryption
    |--------------------------------------------------------------------------
    |
    | This option allows you to easily specify that all of your session data
    | should be encrypted before it is stored. All encryption will be run
    | automatically by Laravel and you can use the Session like normal.
    |
    */

    'encrypt' => false,

    /*
    |--------------------------------------------------------------------------
    | Session File Location
    |--------------------------------------------------------------------------
    |
    | When using the native session driver, we need a location where session
    | files may be stored. A default has been set for you but a different
    | location may be specified. This is only needed for file sessions.
    |
    */

    'files' => storage_path('framework/sessions'),

    /*
    |--------------------------------------------------------------------------
    | Session Database Connection
    |--------------------------------------------------------------------------
    |
    | When using the "database" or "redis" session drivers, you may specify a
    | connection that should be used to manage these sessions. This should
    | correspond to a connection in your database configuration options.
    |
    */

    'connection' => null,

    /*
    |--------------------------------------------------------------------------
    | Session Database Table
    |--------------------------------------------------------------------------
    |
    | When using the "database" session driver, you may specify the table we
    | should use to manage the sessions. Of course, a sensible default is
    | provided for you; however, you are free to change this as needed.
    |
    */

    'table' => 'sessions',

    /*
    |--------------------------------------------------------------------------
    | Session Sweeping Lottery
    |--------------------------------------------------------------------------
    |
    | Some session drivers must manually sweep their storage location to get
    | rid of old sessions from storage. Here are the chances that it will
    | happen on a given request. By default, the odds are 2 out of 100.
    |
    */

    'lottery' => [2, 100],

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Name
    |--------------------------------------------------------------------------
    |
    | Here you may change the name of the cookie used to identify a session
    | instance by ID. The name specified here will get used every time a
    | new session cookie is created by the framework for every driver.
    |
    */

    'cookie' => 'laravel_session',

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Path
    |--------------------------------------------------------------------------
    |
    | The session cookie path determines the path for which the cookie will
    | be regarded as available. Typically, this will be the root path of
    | your application but you are free to change this when necessary.
    |
    */

    'path' => '/',

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Domain
    |--------------------------------------------------------------------------
    |
    | Here you may change the domain of the cookie used to identify a session
    | in your application. This will determine which domains the cookie is
    | available to in your application. A sensible default has been set.
    |
    */

    'domain' => null,

    /*
    |--------------------------------------------------------------------------
    | HTTPS Only Cookies
    |--------------------------------------------------------------------------
    |
    | By setting this option to true, session cookies will only be sent back
    | to the server if the browser has a HTTPS connection. This will keep
    | the cookie from being sent to you if it can not be done securely.
    |
    */

    'secure' => false,

    /*
    |--------------------------------------------------------------------------
    | HTTP Access Only
    |--------------------------------------------------------------------------
    |
    | Setting this value to true will prevent JavaScript from accessing the
    | value of the cookie and the cookie will only be accessible through
    | the HTTP protocol. You are free to modify this option if needed.
    |
    */

    'http_only' => true,



    /* 状态说明：
     *     成功：2     错误：4
     *
     *  手机码：1
     *  验证码：2
     *  密码：  3
     *  账号相关：4
     */

    //手机码1
    'statusGetPhoneCodeSuc' => [
        'code'=>210,
        'msg'=>'手机码获取成功',
    ],
    'statusGetPhoneCodeFail'=> [
        'code'=>410,
        'msg'=>'手机码获取失败',
    ],
    'statusPhoneCodeInvalid'=> [
        'code'=>411,
        'msg'=>'手机码已过期',
    ],
    'statusGetPhoneCodeError'=> [
        'code'=>412,
        'msg'=>'手机码错误',
    ],


    //验证码2
    'statusCaptchaError' => [
        'code'=>420,
        'msg'=>'验证码错误',
    ],
    'statusCaptchaInvalid' => [
        'code'=>421,
        'msg'=>'验证码已过期',
    ],

    //密码3
    'statusPwdNotSame' => [
        'code'=>430,
        'msg'=>'密码不一致',
    ],
    'statusPwdSimple' => [
        'code'=>431,
        'msg'=>'密码太简单',
    ],


    //注册登录相关4
    'statusRegSuc' => [
        'code'=>240,
        'msg'=>'恭喜你，注册成功，请登录',
    ],
    'statusLoginSuc' => [
        'code'=>241,
        'msg'=>'登录成功',
    ],
    'statusAlreadyReg' => [
        'code'=>440,
        'msg'=>'该手机号已注册，请直接登录',
    ],
    'statusNotReg' => [
        'code'=>441,
        'msg'=>'该账号还未注册，请先注册',
    ],
    'statusAccountDisabled' => [
        'code'=>442,
        'msg'=>'账号已被禁用',
    ],
    'statusAccountOrPwdError' => [
        'code'=>443,
        'msg'=>'账号或密码错误',
    ],

    //严重错误，发生必须修复
    'statusBigError' => [
        'code'=>999,
        'msg'=>'发生严重错误！',
    ],

];
