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

class UserController extends Controller
{
    public function index()
    {
        $all = UserModel::all();
        return $all;
    }

    public function save()
    {
        $u = new UserModel();
        $u->name = 'hxl';
        $u->pwd = 'toor';
        $u->iphone = '456';

        $r = $u->save();
        if ($r)
            return 'suc';
        else
            return 'faild';
    }

    public function reg(Request $request)
    {
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

        $input = $request->all();

        if (!isset($input['Phone']) || !isset($input['Password']) || !isset($input['Confirm']) || !isset($input['Phonecode']) ){
            return redirect('/');
        }

        $phone = $input['Phone'];
        $password = $input['Password'];
        $confirm = $input['Confirm'];
        $phonecode = $input['Phonecode'];

        if ($password != $confirm || strlen($password) < 6){
            return redirect('/');
        }
        $u = UserModel::where('phone',$phone)->select('phone','phone_code','updated_at')->get();
        $c = count($u);
        if ($c != 1){
            return redirect('/');
        }

        $pre_phone = $u[0]['phone'];
        $pre_phone_code = $u[0]['phone_code'];
        $pre_updated_at = $u[0]['updated_at'];

        if ($phonecode !=$pre_phone_code){
            return redirect('/');
        }




        echo time();
        echo "<br>";
        echo date('c');
        echo "<br>";
        echo strtotime($pre_updated_at);
        echo "<br>";
        echo (time()-strtotime($pre_updated_at));
        echo "<br>";
        return $pre_updated_at;

        require_once(__DIR__ . '/../../Api/yunpian/YunpianAutoload.php');
        $smsOperator = new \SmsOperator();
        $data['mobile'] = '18601067675';
        $data['text'] = '【云片网】您的验证码是1234';
        $result = $smsOperator->single_send($data);

        $result = json_encode($result);
        $result = json_decode($result, true);

        return $result;

    }

    public function forgetpwd(){
        return redirect('resetpwd');
    }

    public function resetpwd(){
        //重置成功后在前端转到主页
        return 'is reset';
    }

}