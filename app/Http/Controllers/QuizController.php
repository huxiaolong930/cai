<?php
/**
 * Created by PhpStorm.
 * User: hxl
 * Date: 2017/5/4
 * Time: 8:29
 */

namespace App\Http\Controllers;


class QuizController extends Controller
{
    public function index(){
        $today_data = '5月4日';
        $total_money = 600;
        $up_prop = '71%';
        $down_prop = '29%';
        $up_profit = '1:1.40';
        $down_profit = '1:3.50';
        return view("quiz", compact('today_data','total_money','up_prop','down_prop','up_profit','down_profit'));
    }

}