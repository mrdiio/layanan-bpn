@extends('layouts.applanding')

@section('content')
<!-- BEGIN: PAGE CONTENT -->

@include('layouts.partsfront.breadcumb')

<div class="c-content-box c-size-md c-bg-white" style="min-height:311px">
	<div class="container">
		@if ($hasil)
		<div class="c-content-panel">
			<div class="c-label">Hasil pencarian : <b>{{ $request->nomor_pemohon }}</b></div>
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
                                <th class="col-md-4">Unduh</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<th scope="row">1</th>
								<td>{{ $hasil->nomor_pemohon }}</td>
								<td>{{ $hasil->pemohon->nama }}</td>
                                <td>{{ $hasil->status->nama }}</td>
                                <td>
                                    @if ($hasil->file_peta_bidang)
                                        <button type="button" onclick="window.location.href='{{ asset('images/peta_bidang/'.$hasil->file_peta_bidang) }}';" class="btn btn-success c-btn-square c-btn-uppercase c-btn-bold">Peta Bidang</button>
                                    @endif
                                </td>
                                <td>
                                    @if ($hasil->file_ptpgt)
                                    <button type="button" onclick="window.location.href='{{ asset('images/pt_pgt/'.$hasil->file_ptpgt) }}';" class="btn btn-success c-btn-square c-btn-uppercase c-btn-bold">PT PGT</button>
                                    @endif
                                </td> 
							</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
        @else
            <div class="alert alert-danger" role="alert" ><center>Oops.. Data <b>{{ $request->nomor_pemohon }}</b> Tidak Ditemukan, Kembali ke <a href="/">Home</a></center></div>
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