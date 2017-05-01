@extends('layouts.app')

@section('htmlheader_title')
    个人中心
@endsection

@section('self-style')
    <link href="/css/ucenter.css" type="text/css" rel="stylesheet" media="all">
    <style>
        #chartdiv {
            width: 100%;
            height: 500px;
        }
    </style>
@endsection

@section('main-content')
    <div class="content">
        <div class="profile">
            <div class="profile-top">
                <div class="pic-sec">
                    <div class="pic">
                        <img src="images/head.jpg" alt=""/>
                    </div>
                    <div class="pic_info">
                        <h2>Rangvaldr Bell</h2>
                        <h3>@tempsecom</h3>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="media">
                    <div class="tweet">
                        <h4>2,501</h4>
                        <h5>Tweets</h5>
                    </div>
                    <div class="follow">
                        <h4>158</h4>
                        <h5>Following</h5>
                    </div>
                    <div class="follow2">
                        <h4>25,850</h4>
                        <h5>Followers</h5>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="profile-bottom">
                <ul>
                    <li><a href="#">Timeline</a></li>
                    <li class="button"><a href="#">Direct Messages<i>13</i></a>
                    <li class="dropdown">
                        <ul class="icon-navigation">
                            <li><a href="#">Inbox<span>[09]</span></a></li>
                            <li><a href="#">Outbox<span>[01]</span></a></li>
                            <li><a href="#">Sent messages<span>[03]</span></a></li>
                        </ul>
                    </li>
                    </li>
                    <li><a href="#">Favourites</a></li>
                    <li><a href="#">Lists</a></li>
                    <li><a href="#">My Settings</a></li>
                    <li class="button"><a href="#">kkkk<i>3</i></a>
                    <li class="dropdown">
                        <ul class="icon-navigation">
                            <li><a href="#">Inbox<span>[09]</span></a></li>
                            <li><a href="#">Outbox<span>[01]</span></a></li>
                            <li><a href="#">Sent messages<span>[03]</span></a></li>
                        </ul>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </div>

@endsection

@section('self-script')
    <script>
        $(document).ready(function () {
            /* This code is executed after the DOM has been completely loaded */

            /* Changing thedefault easing effect - will affect the slideUp/slideDown methods: */
            $.easing.def = "easeOutBounce";

            /* Binding a click event handler to the links: */
            $('li.button a').click(function (e) {

                /* Finding the drop down list that corresponds to the current section: */
                var dropDown = $(this).parent().next();

                /* Closing all other drop down sections, except the current one */
                $('.dropdown').not(dropDown).slideUp('slow');
                dropDown.slideToggle('slow');

                /* Preventing the default event (which would be to navigate the browser to the link's address) */
                e.preventDefault();
            })

        });
    </script>
@endsection