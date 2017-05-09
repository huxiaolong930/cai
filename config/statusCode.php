<?php

return [
    /* 状态说明：
     *     成功：2     错误：4
     *
     *  手机码：1
     *  验证码：2
     *  密码：  3
     *  已注册：4
     */

    //手机码
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


    //验证码
    'statusCaptchaError' => [
        'code'=>420,
        'msg'=>'验证码错误',
    ],
    'statusCaptchaInvalid' => [
        'code'=>421,
        'msg'=>'验证码已过期',
    ],

    //密码
    'statusPwdNotSame' => [
        'code'=>430,
        'msg'=>'密码不一致',
    ],
    'statusPwdSimple' => [
        'code'=>431,
        'msg'=>'密码太简单',
    ],


    'statusAlreadyReg' => [
        'code'=>440,
        'msg'=>'您已注册，请直接登录',
    ],


];
