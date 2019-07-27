@extends('layouts.applanding')

@section('content')
<!-- BEGIN: PAGE CONTENT -->

<!-- BEGIN: LAYOUT/SLIDERS/REVO-SLIDER-4 -->
<section class="c-layout-revo-slider c-layout-revo-slider-4" dir="ltr">
    <div class="tp-banner-container c-theme">
        <div class="tp-banner rev_slider" data-version="5.0">
            <ul>
                <!--BEGIN: SLIDE #1 -->
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
                    <img 
                        alt="" 
                        src="{{asset('images/bpn.jpg')}}"
                        data-bgposition="center center" 
                        data-bgfit="cover" 
                        data-bgrepeat="no-repeat"
                        >   
                    <div class="tp-caption customin customout"
                        data-x="center" 
                        data-y="center"
                        data-hoffset="" 
                        data-voffset="-50"
                        data-speed="500" 
                        data-start="1000" 
                        data-transform_idle="o:1;" 
                        data-transform_in="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;" 
                        data-transform_out="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-elementdelay="0.1" 
                        data-endelementdelay="0.1" 
                        data-endspeed="600">
                    </div>
                </li>
                <!--END -->  
            </ul>
        </div>
    </div>
</section><!-- END: LAYOUT/SLIDERS/REVO-SLIDER-4 -->
<div class="c-content-box c-size-md c-bg-white">
	<div class="container">
		<div class="c-content-title-1">
			<h3 class="c-center c-font-dark c-font-uppercase">Status Permohonan Sertifikat</h3>
			<div class="c-line-center c-theme-bg"></div>
			<p class="c-center">Anda Dapat Melihat Status Permohonan Sertifikat Melalui Tabel Dibawah Ini</p>
		</div>
		@if (count($hasil))
		<div class="c-content-panel">
			<div class="c-label">Hasil pencarian : <b>{{$query}}</b></div>
			<div class="c-body">
				<div class="row">
					<div class="col-md-12">
						<table class="table">
							<thead>
							<tr>
								<th class="col-md-1">#</th>
								<th class="col-md-3">Nomor Pemohon</th>
								<th class="col-md-3">Nama</th>
								<th class="col-md-4">Status</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<th scope="row">1</th>
								<td>{{ $hasil->nomor_pemohon}}</td>
								<td>{{ $hasil->pemohon->nama}}</td>
								<td>{{ $hasil->status}}</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
        @else
            <div class="alert alert-danger" role="alert"><center>Oops.. Data <b>{{$query}}</b> Tidak Ditemukan</center></div>
        @endif
    </div>
 </div>   
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