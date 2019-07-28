@extends('layouts.app')

@section('page-title')
    Permohonan
@endsection

@section('content')
<!-- Wizard with validation -->
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-white">
            <div class="panel-heading">
                <h5 class="panel-title text-semibold">No. Pemohon : {{ $permohonan->nomor_pemohon }}</h5>
            </div>
            
            <div class="panel-body">
                @if ($errors->any())
                    <div class="alert alert-danger alert-styled-left alert-bordered" id="error-input">
                        <ul id="error-list">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="form-horizontal">
                    <fieldset class="content-group">
                        <legend class="text-bold">Data Pemohon</legend>

                        <div class="form-group">
                            <label class="control-label col-lg-3">Nama / Umur</label>
                            <div class="col-lg-9">
                                <div class="form-control-static">
                                    : {{ $permohonan->pemohon->nama }} / {{ $permohonan->pemohon->umur }}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-3">Kewarganegaraan</label>
                            <div class="col-lg-9">
                                <div class="form-control-static">
                                    : {{ $permohonan->pemohon->kewarganegaraan }}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-3">Identitas yang digunakan</label>
                            <div class="col-lg-9">
                                <div class="form-control-static">
                                    : {{ $permohonan->pemohon->jenis_identitas }} / {{ $permohonan->pemohon->nomor_identitas }}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-3">Pekerjaan</label>
                            <div class="col-lg-9">
                                <div class="form-control-static">
                                    : {{ $permohonan->pemohon->pekerjaan }}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-3">Alamat</label>
                            <div class="col-lg-9">
                                <div class="form-control-static">
                                    : {{ $permohonan->pemohon->alamat }}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-3">Nama Ibu</label>
                            <div class="col-lg-9">
                                <div class="form-control-static">
                                    : {{ $permohonan->pemohon->nama_ibu }}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-3">No. Telepon</label>
                            <div class="col-lg-9">
                                <div class="form-control-static">
                                    : {{ $permohonan->pemohon->no_hp }}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-3">Pekerjaan</label>
                            <div class="col-lg-9">
                                <div class="form-control-static">
                                    : {{ $permohonan->pemohon->pekerjaan }}
                                </div>
                            </div>
                        </div>

                    </fieldset>
                </form>

                <form class="form-horizontal">
                    <fieldset class="content-group">
                        <legend class="text-bold">Data Tanah</legend>

                        <div class="form-group">
                            <label class="control-label col-md-3">1. Letak Tanah : </label>
                            <div class="col-md-9">
                                <label class="control-label col-md-3">Jalan</label>
                                <div class="col-md-9">
                                    <div class="form-control-static">: {{ $permohonan->tanah->jalan }}</div>
                                </div>
        
                                <label class="control-label col-md-3">Desa</label>
                                <div class="col-md-9">
                                    <div class="form-control-static">: {{ $permohonan->tanah->desa }}</div>
                                </div>
        
                                <label class="control-label col-md-3">Kecamatan</label>
                                <div class="col-md-9">
                                    <div class="form-control-static">: {{ $permohonan->tanah->kecamatan }}</div>
                                </div>
        
                                <label class="control-label col-md-3">Kabupaten</label>
                                <div class="col-md-9">
                                    <div class="form-control-static">: {{ $permohonan->tanah->kabupaten }}</div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /wizard with validation -->

@endsection

@push('js')
<script type="text/javascript" src="{{ asset('js/plugins/forms/selects/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/forms/styling/uniform.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/pages/form_layouts.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/forms/validation/validate.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/plugins/forms/wizards/stepy.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/pages/wizard_stepy.js') }}"></script>

<script type="text/javascript">
    var jumlah_barang = 0;
    function tambah_barang() {
		var nomor = parseInt(jumlah_barang) + 1;
		var append =    '<div class="form-group row" data-urutan="'+nomor+'">'+
                            '<label class="col-sm-1 col-md-1 control-label nomor">'+nomor+'.</label>'+
                            '<div class="col-sm-10 col-md-10">'+
                                '<input type="text" class="form-control" name="nama_tanggungan[]" placeholder="Nama Lengkap" required>'+
                            '</div>'+
                            '<button onclick="hapus_barang($(this))" type="button" class="btn btn-xs bg-danger pull-right">'+
                                '<i class="icon icon-trash"></i>'+
                            '</button>'+
                        '</div>';
                        
		$('#daftar_barang').append(append);
		jumlah_barang++;
	}

    function hapus_barang(obj) {
		var baris = obj.parent('div');
		var nomor_dihapus = baris.attr('data-urutan');
		baris.remove();
		for(i=parseInt(nomor_dihapus)+1; i<=jumlah_barang; i++)
		{
			var parent = $('#daftar_barang div[data-urutan="'+i+'"]');
			var nomor = i-1;
			parent.children('label.nomor').html(nomor+'.');
			parent.attr('data-urutan', i-1);
		}
		jumlah_barang--;
	}
</script>
@endpush
