@extends('layouts.applanding')

@section('content')
<!-- BEGIN: PAGE CONTENT -->

@include('layouts.partsfront.breadcumb')
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
                        <div class="col-md-4">
                            <input class="form-control  c-square c-theme input-lg" type="text" name="nama" placeholder="Masukkan Nama Pemohon" required>
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
<div class="c-content-box c-size-md c-bg-white">
	<div class="container">
		<div class="c-content-title-1 c-center c-margin-t-80">
			<h3 class="c-font-uppercase c-font-bold">Persyaratan Permohonan Sertifikat</h3>
			<div class="c-line-center"></div>
		</div>

		<div class="row">
			<div class="col-sm-4 wow animate fadeInUp">
				<ul class="c-content-list-1 c-theme c-separator-dot c-font-uppercase">
					<li>Fotocopy KTP / Surat Bukti Kewarganegaraan / Identitas Lainnya</li>
                    <li>Surat Kuasa dari Pimpinan Kongregasi Pasionis Badan Hukum dan Pengesahan</li>
                    <li>Fotocopy Surat Persetujuan Bidang Usaha dari Instans</li>
					<li>Fotocopy Surat Rekomendasi dari Departemen Luar Negeri</li>
					<li>Surat Persetujuan Penguasaan Tanah (untuk Instansi)</li>
				</ul>
			</div>
			<div class="col-sm-4 wow animate fadeInUp" data-wow-delay="0.2s">
				<ul class="c-content-list-1 c-theme c-separator-dot c-font-uppercase">
					<li>Surat Pernyataan Pemohon mengenai Jumlah Bidang, Luas dan Status tanah yang dimilik</li>
                    <li>Surat Penunjukkan atau Penyerahan Tanah dari Pemerintah</li>
					<li>Surat Rencana Penguasaan Tanah Jangka Pendek dan Jangka Panjang</li>
                    <li>Surat Pernyataan atau bukti bahwa seluruh modalnya dimiliki oleh Pemerintah</li>
                    <li>Surat Pelepasan Kawasan Hutan dan Instansi</li>
				</ul>
			</div>
			<div class="col-sm-4 wow animate fadeInUp" data-wow-delay="0.4s">
				<ul class="c-content-list-1 c-theme c-separator-dot c-font-uppercase">
                    <li>Surat Bukti Perolehan Tanah</li>
					<li>Salinan Surat Ukur / Gambar Situasi</li>
					<li>IMB</li>
					<li>Surat-surat lainnya</li>
				</ul>
			</div>
		</div>
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