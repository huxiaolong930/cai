<?php
/**
 * Created by PhpStorm.
 * User: hxl
 * Date: 2017/5/2
 * Time: 22:53
 */

namespace App\Http\Controllers;


use App\Model\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        $all = UserModel::all();
        return $all;
    }

    public function getPhoneCode(Request $request){
        $input = $request->all();
        if (!isset($input['regPhone']) || !isset($input['regCaptcha'])){
            return redirect('/');
        }
        $phone = $input['regPhone'];
        $captcha = $input['regCaptcha'];
        $captcha = strtolower($captcha);

        $pre_captcha = Session::get('captcha.code');
        $pre_captcha = strtolower($pre_captcha);

        if ($captcha != $pre_captcha){
            return json_encode(Config::get('statusCode.statusCaptchaError'));
        }

        $checkCode= rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);

        $u = UserModel::where('phone',$phone)->select('phone_code','status','updated_at')->get();
        $c = count($u);
        if ($c == 0){
            //新用户
            $u = new UserModel();
            $u->phone = $phone;
            $u->phone_code = $checkCode;
            $u->status = 1;
            $u->save();
        }
        else if ($c == 1){
            //已存在
            $oldU = $u[0];
            if ($oldU['status'] == 1){
                //之前未注册成功
                $b = UserModel::where('phone',$phone)->update(['phone_code'=>$checkCode]);
            }
            else{
                //之前注册成功了
                return json_encode(Config::get('statusCode.statusAlreadyReg'));
            }
        }
        else{
            return redirect('/');
        }

        // 发送验证码
        require_once(__DIR__ . '/../../Api/Yunpian/YunpianAutoload.php');
        $smsOperator = new \SmsOperator();
        $data['mobile'] = $phone;
        $data['text'] = '【云片网】您的验证码是'.$checkCode;
        $result = $smsOperator->single_send($data);

        $result = json_encode($result);
        $result = json_decode($result, true);

        if ($result['success'] == true && $result['statusCode'] == 200){
            // 发送成功
            return json_encode(Config::get('statusCode.statusGetPhoneCodeSuc'));
        }
        else{
            //发送失败
            return json_encode(Config::get('statusCode.statusGetPhoneCodeFail'));
        }

/*  验证码发送之后的返回值$result
成功：
{
    "success": true,
    "statusCode": 200,
    "requestData": {
        "mobile": "18601067675",
        "text": "【XX网】您的验证码是1234",
        "apikey": "cd58bc0539c。。。。"
    },
    "responseData": {
        "code": 0,
        "msg": "发送成功",
        "count": 1,
        "fee": 0.05,
        "unit": "RMB",
        "mobile": "18601067675",
        "sid": 15085982046
    },
    "error": null
}

失败：
{
    "success": false,
    "statusCode": 400,
    "requestData": {
        "mobile": "18601067675",
        "text": "【XX网】您的验证码是1234",
        "apikey": "cd58bc0539ca23..."
    },
    "responseData": {
        "http_status_code": 400,
        "code": 9,
        "msg": "同一手机号5分钟内重复提交相同的内容超过3次",
        "detail": "同一个手机号 18601067675 5分钟内重复提交相同的内容超过3次"
    },
    "error": null
}
*/
    }

    public function reg(Request $request)
    {
        $input = $request->all();

        if (!isset($input['Phone']) || !isset($input['Password']) || !isset($input['Confirm']) || !isset($input['Phonecode']) || !isset($input['Captcha']) ){
            return redirect('/');
        }

        $phone = $input['Phone'];
        $password = $input['Password'];
        $confirm = $input['Confirm'];
        $phonecode = $input['Phonecode'];
        $captcha = $input['Captcha'];
        $captcha = strtolower($captcha);

        //密码不一致
        if ($password != $confirm || strlen($password) < 6){
            return json_encode(Config::get('statusCode.statusPwdNotSame'));
        }
        //密码太简单
        if (strlen($password) < 6){
            return json_encode(Config::get('statusCode.statusPwdSimple'));
        }
        $u = UserModel::where('phone',$phone)->select('phone_code','status','updated_at')->get();
        $c = count($u);
        if ($c != 1){
            return redirect('/');
        }

        $u = $u[0];

        $pre_phone_code = $u['phone_code'];
        $pre_status = $u['status'];
        $pre_updated_at = $u['updated_at'];
        $pre_captcha = Session::get('captcha.code');
        $pre_captcha = strtolower($pre_captcha);

        if ($captcha != $pre_captcha){
            return json_encode(Config::get('statusCode.statusCaptchaError'));
        }

        if ($phonecode != $pre_phone_code){
            return json_encode(Config::get('statusCode.statusGetPhoneCodeError'));
        }

        if ($pre_status != 1){
            return json_encode(Config::get('statusCode.statusAlreadyReg'));
        }

        // 手机码30分钟后过期
        $sec = time()-strtotime($pre_updated_at);
        if ($sec > 30*60){
            return json_encode(Config::get('statusCode.statusPhoneCodeInvalid'));
        }

        //注册信息写入数据库
        $u->pwd = $password;
        $u->status = 2;
        $u->save();

        //注册成功，转到个人中心
        return redirect('ucenter');

    }

    public function forgetpwd(){
        return redirect('resetpwd');
    }

    public function resetpwd(){
        //重置成功后在前端转到主页
        return 'is reset';
    }

    public function test(){
        session_start();
        require_once(base_path('app').'/Api/Captcha/simple-php-captcha.php');
        Session::put('captcha',simple_php_captcha());

        //Session::get('captcha.code');
        //strtolower(Session::get('captcha.code'));
        //Session::get('captcha.image_src');

        return '<img width="100px" src="' . Session::get('captcha.image_src') . '" alt="">';
    }

}