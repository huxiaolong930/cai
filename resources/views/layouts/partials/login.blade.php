<section class="header-w3ls">
    <button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
    <div class="bottons-agileits-w3layouts">
        <a class="page-scroll" href="#myModal2" data-toggle="modal"><i class="fa fa-sign-in"
                                                                       aria-hidden="true"></i>登录</a>.
        <a class="page-scroll" href="#myModal3" data-toggle="modal"><i class="fa fa-pencil-square-o"
                                                                       aria-hidden="true"></i>注册</a>
    </div>
    <h1><a href="/">Clinical Care</a></h1>
    <div class="clearfix"></div>
</section>

<!-- Login modal -->
<div class="modal about-modal w3-agileits fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body login-page "><!-- login-page -->
                <div class="login-top sign-top">
                    <div class="agileits-login">
                        <h5>登录</h5>
                        <form action="#" method="post">
                            <input type="text" name="Phone" placeholder="手机号码" required=""/>
                            <input type="password" name="Password" placeholder="密码" required=""/>
                            <div>
                                <span class="text-left" style="width: 55%;display:inline-block">
                                    <label class="anim">
                                        <input type="checkbox" class="checkbox">
                                        <span> Remember me ?</span>
                                    </label>
                                </span>
                                <span class="text-right" style="width: 40%;display:inline-block">
                                    <a href="/forgetpwd" >忘记密码？</a>
                                </span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="w3ls-submit">
                                <input type="submit" value="登录">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div> <!-- //login-page -->
    </div>
</div>
<!-- //modal -->
<!-- Register modal -->
<div class="modal about-modal w3-agileits fade" id="myModal3" tabindex="-1" role="dialog" style="min-width: 350px;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body login-page "><!-- reg-page -->
                <div class="login-top sign-top">
                    <div class="agileits-login">
                        <h5>用户注册</h5>
                        <form action="/reg" method="post">
                            <input type="text" id="regPhone" name="Phone" placeholder="手机号码" required=""/>
                            <input type="password" name="Password" placeholder="设置密码" required=""/>
                            <input type="password" name="Confirm" placeholder="确认密码" required=""/>
                            <div>
                                <span class="text-left" style="width: 55%;display:inline-block">
                                    <input type="text" name="Captcha" placeholder="验证码" required=""/>
                                </span>
                                <span class="text-right" style="width: 40%;display:inline-block">
                                    @yield('captcha')
                                    <?php
                                    session_start();
                                    $_SESSION = array();
                                    require_once(base_path('public') . '/Captcha/simple-php-captcha.php');
                                    $_SESSION['captcha'] = simple_php_captcha();

                                    //$_SESSION['captcha']['code']
                                    \Illuminate\Support\Facades\Session::put('captcha.code',$_SESSION['captcha']['code']);

                                    echo '<img width="90px" src="' . $_SESSION['captcha']['image_src'] . '" alt="">';
                                    ?>

                                </span>
                                <div class="clearfix"></div>
                            </div>
                            <div>
                                <span class="text-left" style="width: 55%;display:inline-block">
                                    <input type="text" name="Phonecode" placeholder="手机验证码" required=""/>
                                </span>
                                <span class="text-right" style="width: 40%;display:inline-block">
                                    <a href="javascript:;" onclick="getCode(this)">获取验证码</a>
                                </span>
                                <div class="clearfix"></div>
                            </div>
                            {{--<div class="wthree-text">--}}
                            {{--<ul>--}}
                            {{--<li>--}}
                            {{--<label class="anim">--}}
                            {{--<input type="checkbox" class="checkbox">--}}
                            {{--<span> I accept the terms of use</span>--}}
                            {{--</label>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                            {{--<div class="clearfix"></div>--}}
                            {{--</div>--}}
                            <div class="w3ls-submit">
                                <input type="submit" value="立即注册">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div> <!-- //login-page -->
    </div>
</div>
<!-- //modal -->
<script>
    function getCode(obj) {
        var regPhone = $('#regPhone').val();
        //todo:ajax发送验证码

        $(obj).text('手机验证码已发送');
        $(obj).removeAttr("onclick");
    }
</script>