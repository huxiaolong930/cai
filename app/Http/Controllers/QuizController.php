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
        $total_money = 6000006;
        $up_prop = '71%';
        $down_prop = '29%';
        $up_profit = '1:1.40';
        $down_profit = '1:3.50';
        return view("quiz", compact('today_data','total_money','up_prop','down_prop','up_profit','down_profit'));
    }

    public function bet(){
        /* 定义区间，组合之后，形成6个区间(interval库)
         * type=1 (0,3]
         * type=2 (3,8]
         * type=3 (8,100]
         *
         * type=4 (0,-2]
         * type=5 (-2,-5]
         * type=6 (-5,-100]
         */

        $zero = 0;

        $up_three = 3;
        $up_eight = 8;
        $up_top = 100;

        $down_two = -2;
        $down_five = -5;
        $down_bottom = -100;



        return 'suc';
    }

}