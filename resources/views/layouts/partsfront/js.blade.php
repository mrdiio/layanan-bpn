<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
<!-- BEGIN: CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="{{ asset('front/plugins/jquery.min.js') }}" type="text/javascript" ></script>
<script src="{{ asset('front/plugins/jquery-migrate.min.js') }}" type="text/javascript" ></script>
<script src="{{ asset('front/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript" ></script>
<script src="{{ asset('front/plugins/jquery.easing.min.js') }}" type="text/javascript" ></script>
<script src="{{ asset('front/plugins/reveal-animate/wow.js') }}" type="text/javascript" ></script>
<script src="{{ asset('front/js/scripts/reveal-animate/reveal-animate.js') }}" type="text/javascript" ></script>

<!-- END: CORE PLUGINS -->

<!-- BEGIN: LAYOUT PLUGINS -->
<script src="{{ asset('front/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('front/plugins/owl-carousel/owl.carousel.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('front/plugins/counterup/jquery.waypoints.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('front/plugins/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('front/plugins/fancybox/jquery.fancybox.pack.js') }}" type="text/javascript"></script>

<!-- END: LAYOUT PLUGINS -->

<!-- BEGIN: THEME SCRIPTS -->
<script src="{{ asset('front/js/components.js') }}" type="text/javascript"></script>
<script src="{{ asset('front/js/app.js') }}" type="text/javascript"></script>
<script>
$(document).ready(function() {    
    App.init(); // init core    
});
</script>
<!-- END: THEME SCRIPTS -->

@stack('js')