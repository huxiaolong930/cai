@extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection

@section('main-banner')
    <!-- banner -->
    <div class="banner-silder">
        <div class="callbacks_container">
            <ul class="rslides callbacks callbacks1" id="slider4">
                <li>
                    <div class="w3layouts-banner-top">

                        <div class="container">
                            <div class="agileits-banner-info">
                                <h3>Qualified Doctors</h3>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top1">
                        <div class="container">
                            <div class="agileits-banner-info">
                                <h3>Emergency Services</h3>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top2">
                        <div class="container">
                            <div class="agileits-banner-info">
                                <h3>Intensive Care</h3>
                            </div>

                        </div>
                    </div>
                </li>
                <li>
                    <div class="w3layouts-banner-top w3layouts-banner-top3">
                        <div class="container">
                            <div class="agileits-banner-info">
                                <h3>Medical professionals</h3>
                            </div>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //banner -->
@endsection

@section('main-content')
    <!-- banner-bottom -->
    <div class="banner-bottom">
        <div class="bnr-btm-grids-agileits">
            <div class="bnr-btm-icon">
                <i class="fa fa-mobile" aria-hidden="true"></i>
            </div>
            <div class="bnr-btm-info">
                <h3>Give us a call</h3>
                <p>+(012) 345 6789 </p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="bnr-btm-grids-agileits">
            <div class="bnr-btm-icon">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
            </div>
            <div class="bnr-btm-info">
                <h3>Send us a message</h3>
                <p><a href="mailto:info@example.com">example@mail.com</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="bnr-btm-grids-agileits">
            <div class="bnr-btm-icon">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
            </div>
            <div class="bnr-btm-info">
                <h3>Visit our location</h3>
                <p>Fort McMurray, AB Canada.</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //banner-bottom -->
    <!--Services-->
    <div class="options-wthree">
        <div class="container">
            <ul>
                <li>
                    <a href="appointment.html" class="opt-grids">
                        <div class="icon-agileits-w3layouts">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <div class="opt-text-w3layouts">
                            <h6>Appointments</h6>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="doctors.html" class="opt-grids">
                        <div class="icon-agileits-w3layouts">
                            <i class="fa fa-stethoscope" aria-hidden="true"></i>
                        </div>
                        <div class="opt-text-w3layouts">
                            <h6>Doctors</h6>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="services.html" class="opt-grids">
                        <div class="icon-agileits-w3layouts">
                            <i class="fa fa-ambulance" aria-hidden="true"></i>
                        </div>
                        <div class="opt-text-w3layouts">
                            <h6>Services</h6>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="departments.html" class="opt-grids">
                        <div class="icon-agileits-w3layouts">
                            <i class="fa fa-user-md" aria-hidden="true"></i>
                        </div>
                        <div class="opt-text-w3layouts">
                            <h6>Departments</h6>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="locations.html" class="opt-grids">
                        <div class="icon-agileits-w3layouts">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="opt-text-w3layouts">
                            <h6>Locations</h6>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="contact.html" class="opt-grids">
                        <div class="icon-agileits-w3layouts">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="opt-text-w3layouts">
                            <h6>Contact</h6>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!--//Services-->
@endsection


@section('self-script')
    <!--responsiveslides js-->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider4").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 3
            $("#slider3").responsiveSlides({
                auto: true,
                pager: false,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!--//responsiveslides js-->
@endsection
