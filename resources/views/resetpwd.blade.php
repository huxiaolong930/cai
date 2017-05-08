@extends('layouts.app')

@section('htmlheader_title')
    重置密码
@endsection

@section('main-content')
    <div class="comm-content">
        <div class="container">
            <form action="/resetpwd" method="post">
                <input type="password" name="Password" placeholder="设置新密码" required=""/>
                <input type="password" name="Confirm" placeholder="确认新密码" required=""/>
                <div class="w3ls-submit">
                    <input type="submit" value="重置密码">
                </div>
            </form>
        </div>
    </div>
@endsection
