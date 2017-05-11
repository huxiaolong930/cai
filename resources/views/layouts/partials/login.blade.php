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
                        <form id="loginForm" name="loginForm" onsubmit="return false;">
                            <input type="text" name="Phone" placeholder="手机号码" required=""/>
                            <input type="password" name="Password" placeholder="密码" required=""/>
                            <div>
                                <span class="text-left" style="width: 55%;display:inline-block">
                                    <input type="text" id="loginCaptcha" name="Captcha" placeholder="验证码" required=""/>
                                </span>
                                <span class="text-right" style="width: 40%;display:inline-block">
                                    <?php
                                        session_start();
                                        $_SESSION = array();
                                        require_once(base_path('public') . '/Captcha/simple-php-captcha.php');
                                        $_SESSION['captcha'] = simple_php_captcha();

                                        //$_SESSION['captcha']['code']
                                    \Illuminate\Support\Facades\Session::put('captcha.code',$_SESSION['captcha']['code']);
                                    \Illuminate\Support\Facades\Session::put('captcha.image_src',$_SESSION['captcha']['image_src']);

                                        echo '<img width="90px" src="' . $_SESSION['captcha']['image_src'] . '" alt="">';
                                    ?>
                                </span>
                                <div class="clearfix"></div>
                            </div>
                            <div>
                                {{--<span class="text-left" style="width: 55%;display:inline-block">--}}
                                    {{--<label class="anim">--}}
                                        {{--<input type="checkbox" class="checkbox">--}}
                                        {{--<span> Remember me ?</span>--}}
                                    {{--</label>--}}
                                {{--</span>--}}
                                <span class="text-left" style="width: 40%;display:inline-block">
                                    <a class="page-scroll" href="#myModal4" data-toggle="modal"><i class="fa fa-frown-o"
                                                                                                   aria-hidden="true"></i> 忘记密码？</a>
                                </span>
                                <div class="clearfix"></div>
                            </div>
                            <div>
                                <span id="loginMsg"></span>
                            </div>
                            <div class="w3ls-submit">
                                {{--<input type="submit" value="登录">--}}
                                <button onclick="login(this)">登录</button>
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
                        <form id="regForm" name="regForm" onsubmit="return false;">
                            <input type="text" id="regPhone" name="Phone" placeholder="手机号码" required=""/>
                            <input type="password" name="Password" placeholder="设置密码" required=""/>
                            <input type="password" name="Confirm" placeholder="确认密码" required=""/>
                            <div>
                                <span class="text-left" style="width: 55%;display:inline-block">
                                    <input type="text" id="regCaptcha" name="Captcha" placeholder="验证码" required=""/>
                                </span>
                                <span class="text-right" style="width: 40%;display:inline-block">
                                    <?php
                                        echo '<img width="90px" src="' . $_SESSION['captcha']['image_src'] . '" alt="">';
                                    ?>
                                </span>
                                <div class="clearfix"></div>
                            </div>
                            <div>
                                <span class="text-left" style="width: 55%;display:inline-block">
                                    <input type="text" name="Phonecode" placeholder="手机码" required=""/>
                                </span>
                                <span class="text-right" style="width: 40%;display:inline-block">
                                    <a href="javascript:;" onclick="getCode(this)">获取手机码</a>
                                </span>
                                <div class="clearfix"></div>
                            </div>
                            <div>
                                <span id="regMsg"></span>
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
                                {{--<input type="submit" value="立即注册">--}}
                                <button onclick="reg(this)">立即注册</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div> <!-- //login-page -->
    </div>
</div>
<!-- //modal -->

<!-- Forgetpwd modal -->
<div class="modal about-modal w3-agileits fade" id="myModal4" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body login-page "><!-- forgetpwd-page -->
                <div class="login-top sign-top">
                    <div class="agileits-login">
                        <h5>找回密码</h5>
                        <form action="#" method="post">
                            <input type="text" name="Phone" placeholder="手机号码" required=""/>
                            <div>
                                <span class="text-left" style="width: 55%;display:inline-block">
                                    <input type="text" name="Phonecode" placeholder="手机码" required=""/>
                                </span>
                                <span class="text-right" style="width: 40%;display:inline-block">
                                    <a href="javascript:;" onclick="getCode(this)">获取手机码</a>
                                </span>
                                <div class="clearfix"></div>
                            </div>
                            <div>
                                <span class="text-left" style="width: 55%;display:inline-block">
                                    <input type="text" id="loginCaptcha" name="Captcha" placeholder="验证码" required=""/>
                                </span>
                                <span class="text-right" style="width: 40%;display:inline-block">
                                    <?php
                                    echo '<img width="90px" src="' . $_SESSION['captcha']['image_src'] . '" alt="">';
                                    ?>
                                </span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="w3ls-submit">
                                <input type="submit" value="下一步">
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
        var regCaptcha = $('#regCaptcha').val();
        if (regPhone == '' || regCaptcha == ''){
            $('#regMsg').text('手机号和验证码不能为空');
            return;
        }
        var data = [];
        data.push({'name': 'regPhone', 'value': regPhone});
        data.push({'name': 'regCaptcha', 'value': regCaptcha});
        $.ajax({
            url: "/getPhoneCode",
            timeout: 5000,
            dataType: "json",
            data: data,
            async: true,
            type: "POST",
            beforeSend: function () {
                $(obj).text('手机码已发送');
                $('#regMsg').text('');
            },
            success: function (res) {
                $('#regMsg').text(res.msg);
                //手机码获取成功
                if (res.code == '210') {
                    $(obj).removeAttr("onclick");
                }
                //账号已存在
                else if (res.code == '440') {
                    $(obj).removeAttr("onclick");
                }
                else{
                    //
                }
            },
            complete: function (XMLHttpRequest, status) {
                if (status == 'success') {
                    //成功
                }
                else if (status == 'timeout') {
                    $(obj).text('重新获取手机码');
                }
                else {
                    //
                }

            }
        });
    }

    function reg(obj) {
        var data = $("#regForm").serializeArray();
        $.ajax({
            url: "/reg",
            timeout: 5000,
            dataType: "json",
            data: data,
            async: true,
            type: "POST",
            beforeSend: function () {
            },
            success: function (res) {
                $('#regMsg').text(res.msg);
                //注册成功
                if (res.code == '240') {
                    $(obj).removeAttr("onclick");
                }
            },
            complete: function (XMLHttpRequest, status) {
                if (status == 'success') {
                    //成功
                }
                else if (status == 'timeout') {
                    $('#regMsg').text('请求超时！');
                }
                else {
                }

            }
        });
    }

    function login(obj) {
        var data = $("#loginForm").serializeArray();
        $.ajax({
            url: "/login",
            timeout: 5000,
            dataType: "json",
            data: data,
            async: true,
            type: "POST",
            beforeSend: function () {
            },
            success: function (res) {
                $('#loginMsg').text(res.msg);
                //登录成功
                if (res.code == '241') {
                    $(obj).removeAttr("onclick");
                }
            },
            complete: function (XMLHttpRequest, status) {
                if (status == 'success') {
                    //成功
                }
                else if (status == 'timeout') {
                    $('#loginMsg').text('请求超时！');
                }
                else {
                }

            }
        });
    }
</script>