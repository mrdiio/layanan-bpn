@extends('layouts.applanding')

@section('content')
<!-- BEGIN: PAGE CONTENT -->

@include('layouts.partsfront.breadcumb')
<div class="c-content-box c-size-md c-bg-white">
    <div class="container">
        <div class="c-content-title-1">
            <h3 class="c-center c-font-dark c-font-uppercase">Data Permohonan Yang Sudah di Publikasi</h3>
            <div class="c-line-center c-theme-bg"></div>
        </div>
        <div class="c-content-panel">
            <div class="c-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>No. Pemohon</th>
                                    <th>Nama</th>
                                    <th>Alamat Tanah</th>
                                    <th>Luas</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($permohonan as $data)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $data->nomor_pemohon }}</td>
                                    <td>{{ $data->pemohon->nama }}</td>
                                    <td>{{ $data->tanah->jalan }}, {{ $data->tanah->desa }}, {{ $data->tanah->kecamatan }}</td>
                                    <td>{{ $data->tanah->luas }} m2</td>
                                </tr>  
                                @endforeach
                                </tbody>
                                
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BEGIN: CONTENT/BARS/BAR-3 -->
<div class="c-content-box c-size-md c-bg-dark">
    <div class="container">
        <div class="c-content-bar-3">
            <div class="c-content-title-1">
                <h3 class="c-font-uppercase c-font-bold">Pencarian Status Permohonan Sertifikat</h3>
                <div class="c-line-left c-theme-bg"></div>

                <form class="c-shop-advanced-search-1" action="{{ url('cari') }}" method="GET">
                    <div class="row">
                        <div class="col-md-4">
                            <input class="form-control  c-square c-theme input-lg" type="text" name="nomor_pemohon" placeholder="Masukkan Nomor Pemohon" required>
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