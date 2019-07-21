@extends('layouts.applanding')

@section('content')
<!-- BEGIN: PAGE CONTENT -->

<!-- BEGIN: LAYOUT/SLIDERS/REVO-SLIDER-4 -->
<section class="c-layout-revo-slider c-layout-revo-slider-4" dir="ltr">
    <div class="tp-banner-container c-theme">
        <div class="tp-banner rev_slider" data-version="5.0">
            <ul>
                <!--BEGIN: SLIDE #1 -->
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-style="dark">
                    <img 
                        alt="" 
                        src="{{asset('images/bg-43.jpg')}}"
						data-bgposition="center center" 
						data-bgfit="cover" 
						data-bgrepeat="no-repeat"
                        >   
                </li>
                <!--END -->  
            </ul>
        </div>
    </div>
</section><!-- END: LAYOUT/SLIDERS/REVO-SLIDER-4 -->
<!-- BEGIN: CONTENT/BARS/BAR-3 -->
<div class="c-content-box c-size-md c-bg-dark">
    <div class="container">
        <div class="c-content-bar-3">
            <div class="c-content-title-1">
                <h3 class="c-font-uppercase c-font-bold">Pencarian Status Pelayanan Pembuatan Sertifikat</h3>
                <div class="c-line-left c-theme-bg"></div>

                <form class="c-shop-advanced-search-1" action="#">
                    <div class="row">
                        <div class="col-md-3">
                        <input type="text" class="form-control  c-square c-theme" placeholder="Nomor Pemohon">
                        </div>
                        <div class="form-group col-md-1">
                            <span class="input-group-btn">
                                <button type="submit" class="btn c-theme-btn c-btn-uppercase btn-lg c-btn-sbold c-btn-square">Cari</button>
                            </span>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div> 
</div>
<!-- END: CONTENT/BARS/BAR-3 -->
<!-- END: PAGE CONTENT -->
@endsection

@push('css')
	
@endpush

@push('js')
<script src="{{asset('front/plugins/revo-slider/js/jquery.themepunch.tools.min.js')}}" type="text/javascript"></script>
<script src="{{asset('front/plugins/revo-slider/js/jquery.themepunch.revolution.min.js')}}" type="text/javascript"></script>
<script src="{{asset('front/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js')}}" type="text/javascript"></script>
<script src="{{asset('front/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js')}}" type="text/javascript"></script>
<script src="{{asset('front/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js')}}" type="text/javascript"></script>
<script src="{{asset('front/plugins/revo-slider/js/extensions/revolution.extension.video.min.js')}}" type="text/javascript"></script>
<script src="{{asset('front/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js')}}" type="text/javascript"></script>
<!-- BEGIN: PAGE SCRIPTS -->
<script>
    $(document).ready(function() {

        var slider = $('.c-layout-revo-slider .tp-banner');
        var cont = $('.c-layout-revo-slider .tp-banner-container');
        var height = (App.getViewPort().width < App.getBreakpoint('md') ? 400 : 620);

        var api = slider.show().revolution({
            sliderType:"standard",
            sliderLayout:"fullwidth",
            delay: 15000,    
            autoHeight: 'off',
            gridheight:500,

            navigation: {
                keyboardNavigation:"off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation:"off",
                onHoverStop:"on",
                arrows: {
                    style:"circle",
                    enable:true,
                    hide_onmobile:false,
                    hide_onleave:false,
                    tmp:'',
                    left: {
                        h_align:"left",
                        v_align:"center",
                        h_offset:30,
                        v_offset:0
                    },
                    right: {
                        h_align:"right",
                        v_align:"center",
                        h_offset:30,
                        v_offset:0
                    }
                },     
                touch:{
                    touchenabled:"on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },     
            },
            viewPort: {
                enable:true,
                outof:"pause",
                visible_area:"80%"
            },

            shadow: 0,

            spinner: "spinner2",

            disableProgressBar:"on",

            fullScreenOffsetContainer: '.tp-banner-container',

            hideThumbsOnMobile: "on",
            hideNavDelayOnMobile: 1500,
            hideBulletsOnMobile: "on",
            hideArrowsOnMobile: "on",
            hideThumbsUnderResolution: 0,
        
        });
    }); //ready	
</script><!-- END: PAGE SCRIPTS -->
<!-- END: LAYOUT/BASE/BOTTOM -->
@endpush