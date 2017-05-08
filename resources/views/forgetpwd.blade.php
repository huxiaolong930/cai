@extends('layouts.app')

@section('htmlheader_title')
    忘记密码
@endsection

@section('main-content')
    <div class="comm-content">
        <div class="container">
            <form action="/forgetpwd" method="post">
                <input type="text" name="Phone" placeholder="手机号码" required=""/>
                <span class="text-left" style="width: 55%;display:inline-block">
                    <input type="text" name="Phonecode" placeholder="手机验证码" required=""/>
                </span>
                <span class="text-right" style="width: 40%;display:inline-block">
                    <a href="javascript:;" class="get-code" onclick="getCode(this)">获取验证码</a>
                </span>
                <div class="clearfix"></div>
                <div class="w3ls-submit">
                    <input type="submit" value="下一步">
                </div>
            </form>
        </div>
    </div>
@endsection
