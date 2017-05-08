<!-- REQUIRED JS SCRIPTS -->

<!-- js -->
<script type='text/javascript' src='/js/jquery-2.2.3.min.js'></script>
<!-- //js -->
<script src="/js/jquery.nicescroll.js"></script>
<script src="/js/scripts.js"></script>

<!--jarallax -->
<script src="/js/SmoothScroll.min.js"></script>
<!-- //jarallax -->
<!--menu script-->
<script type="text/javascript" src="/js/modernizr-2.6.2.min.js"></script>
<script src="/js/classie.js"></script>
<script src="/js/demo1.js"></script>
<!--//menu script-->
<!-- banner -->
<script type='text/javascript' src='/js/jquery.easing.1.3.js'></script>
<!-- //banner -->
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
        });
    });
</script>
<!--js for bootstrap working-->
<script src="/js/bootstrap.js"></script>
<!-- //for bootstrap working -->

<!-- breadcrumbs marquee -->
<script src="/js/jquery.marquee.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#newsMarquee").marquee({
            pauseSpeed: 5000
        });
    });
</script>
<!-- //breadcrumbs marquee -->

@yield('self-script')
