<?php
/**
 * Created by PhpStorm.
 * User: hxl
 * Date: 2017/5/2
 * Time: 22:53
 */

namespace App\Http\Controllers;


use App\Model\UserModel;

class UserController extends Controller
{
    public function index(){
        $all = UserModel::all();
        return $all;
    }

    public function save(){
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

}