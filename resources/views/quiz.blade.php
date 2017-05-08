@extends('layouts.app')

@section('htmlheader_title')
    Trade
@endsection

@section('self-style')
    <style>
        .lowtext {
            font-size: 18px;
            color: #bababa;
        }
    </style>
@endsection

@section('main-banner')
    <!-- banner -->
    <div class="inner-banner-agileits-w3layouts">
    </div>
    <!-- //banner -->
@endsection

@section('main-content')
    <div class="comm-content" style="font-family: Arial;">
        <div class="container">
            <div class="sh000001">
                <div class="col-md-12 text-center">
                    <span class="lowtext">{{$today_data}}总奖金池</span>
                </div>
                <div class="col-md-12 text-center">
                    <img src="/images/gold_32.png" style="vertical-align:text-bottom">
                    <span style="margin-left: 10px; font-size: 40px; font-weight:bold;color:#d9534f">{{$total_money}}</span>
                </div>
                <div class="col-md-12 text-center">
                    <span style="width: 15%;display:inline-block;color:#d9534f;font-size: 16px;font-weight: bold;">
                        看涨
                    </span>
                    <span style="width: 60%;display:inline-block;vertical-align:text-bottom">
                        <div class="progress" style="margin-bottom:0;">
                            <div class="progress-bar progress-bar-danger" style="width: 71%">
                                <span class="sr-only">up</span>
                            </div>
                            <div class="progress-bar progress-bar-success" style="width: 29%">
                                <span class="sr-only">down</span>
                            </div>
                        </div>
                    </span>
                    <span style="width: 15%;display:inline-block;color:#5cb85c;font-size: 16px;font-weight: bold;">
                        看跌
                    </span>
                </div>
                <div class="col-md-12 text-center" style="margin: 5px 0;">
                        <span class="lowtext" style="width: 15%;display:inline-block">{{$up_prop}}</span>
                        <span class="lowtext" style="width: 60%;display:inline-block">VS</span>
                        <span class="lowtext" style="width: 15%;display:inline-block">{{$down_prop}}</span>
                </div>
                <div class="col-md-12" style="margin: 20px 0;">
                    <span class="text-right" style="width: 35%;display:inline-block;color:#d9534f;font-size: 26px;font-weight: bold;">{{$up_profit}}</span>
                    <span class="text-center" style="width: 30%;display:inline-block;color:#444;font-size: 20px;font-weight: bold;">收益比</span>
                    <span class="text-left" style="width: 30%;display:inline-block;color:#5cb85c;font-size: 26px;font-weight: bold;">{{$down_profit}}</span>
                </div>
                <div class="col-md-12">
                    <span class="text-right" style="width: 30%;display:inline-block;color:#d9534f;font-size: 26px;font-weight: bold;">
                        <img src="/images/up.png" width="64px" style="vertical-align:text-bottom">
                    </span>
                    <span class="text-center" style="width: 40%;display:inline-block;">
                        <div style="font-size: 12px;">距离竞猜结束还剩</div>
                        <div style="color:#D9534F;font-size: 20px; font-weight: bold;">37:25:08</div>
                        <div style="font-size: 12px;">05月08日13:00截止</div>
                    </span>
                    <span class="text-left" style="width: 25%;display:inline-block;color:#5cb85c;font-size: 26px;font-weight: bold;">
                        <img src="/images/down.png" width="64px" style="vertical-align:text-bottom">
                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection