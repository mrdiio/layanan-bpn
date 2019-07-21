@extends('layouts.app')

@section('page-title')
    Permohonan
@endsection

@section('content')
<!-- Wizard with validation -->
<div class="panel panel-white">
    <div class="panel-heading">
        <h6 class="panel-title">Tambah Pemohon</h6>
    </div>

    <form class="stepy-validation form-horizontal" action="{{ route('permohonan.store') }}" method="post">
    @csrf
        <fieldset title="1">
            <legend class="text-semibold">Data pemohon</legend>

            <div class="form-group">
                <label class="control-label col-md-2">Nama dan Umur</label>
                <div class="col-md-4">
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                </div>
                <div class="col-md-1">
                    <input type="number" name="umur" class="form-control" placeholder="Umur">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Kewarganegaraan</label>
                <div class="col-md-3">
                    <input type="text" name="kewarganegaraan" class="form-control">
                </div>
                <div class="col-md-3">
                    <input type="text" name="jenis_identitas" class="form-control" placeholder="Surat Identitas yang digunakan">
                </div>
                <div class="col-md-3">
                    <input type="text" name="nomor_identitas" class="form-control" placeholder="Nomor Identitas">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Pekerjaan</label>
                <div class="col-md-10">
                    <input type="text" name="pekerjaan" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Alamat</label>
                <div class="col-md-10">
                    <input type="text" name="alamat" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Nama Ibu</label>
                <div class="col-md-10">
                    <input type="text" name="nama_ibu" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Susunan Keluarga</label>
                <div class="col-md-10">
                    <label class="radio-inline">
                        <input type="radio" name="status_pasangan" value=" Belum Menikah" checked>
                        Belum Menikah
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="status_pasangan" value="Suami">
                        Suami
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="status_pasangan" value="Istri">
                        Istri
                    </label>
                    <input type="text" name="nama_pasangan" class="form-control" placeholder="Nama Pasangan">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Nomor Telepon</label>
                <div class="col-md-10">
                    <input type="number" name="no_hp" class="form-control">
                </div>
            </div>
        </fieldset>

        <fieldset title="2">
            <legend class="text-semibold">Tanggungan</legend>

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    {{-- <div class="form-group">
                        <label class="control-label col-md-2">Nama</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Nama Lengkap">
                        </div>
                    </div> --}}
                    
                    <div class="box-body" id="daftar_barang">
                        {{-- masih kosong karena belum ada barang/jasa --}}
                    </div>
                    <div class="box-footer" style="padding-bottom: 20px;">
                        <div class="row">
                            <div class="col-md-4">
                                <button type="button" class="btn btn-warning" onclick="tambah_barang()">Tambah Tanggungan</button>
                            </div>	
                        </div>
                    </div>
                    <em class="text-muted italic">*Kosongkan jika belum ada</em>
                </div>
            </div>
        </fieldset>

        <button type="submit" class="btn btn-primary stepy-finish">Submit <i class="icon-check position-right"></i></button>
    </form>
</div>
<!-- /wizard with validation -->

{{-- <div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Tambah Permohonan</h5>
    </div>

    <div class="panel-body">
        <form class="form-horizontal" action="#">
            <fieldset class="content-group">
                <legend class="text-bold">Data Diri Pemohon</legend>

                <div class="form-group">
                    <label class="control-label col-lg-2">Nama dan Umur</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="col-lg-1">
                        <input type="number" class="form-control" placeholder="Umur">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Kewarganegaraan</label>
                    <div class="col-lg-3">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-lg-3">
                        <input type="text" class="form-control" placeholder="Surat Identitas yang digunakan">
                    </div>
                    <div class="col-lg-3">
                        <input type="text" class="form-control" placeholder="Nomor Identitas">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Pekerjaan</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Alamat</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Nama Ibu</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Susunan Keluarga</label>
                    <div class="col-lg-3">
                        <label class="radio-inline">
                            <input type="radio" name="status_pasangan" checked="checked">
                            Belum Menikah
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="status_pasangan">
                            Suami
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="status_pasangan">
                            Istri
                        </label>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" placeholder="Nama Pasangan">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Nomor Telepon</label>
                    <div class="col-lg-10">
                        <input type="number" class="form-control">
                    </div>
                </div>
            </fieldset>

            <div class="text-right">
                <button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
            </div>
        </form>
    </div>
</div> --}}

@endsection

@push('js')
<script type="text/javascript" src="{{ asset('js/plugins/forms/wizards/stepy.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/forms/selects/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/forms/styling/uniform.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/core/libraries/jasny_bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/forms/validation/validate.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/pages/wizard_stepy.js') }}"></script>

<script type="text/javascript">
    // kosongin
    var jumlah_barang = 0;
    $(document).ready(function() {
        if(jumlah_barang == 0)
        {
            tambah_barang();
            // $("#kaklala").attr("disabled", true);
        }
    });

    function tambah_barang() {
		var nomor = parseInt(jumlah_barang) + 1;
		var append =    '<div class="form-group row" data-urutan="'+nomor+'">'+
                            '<label class="col-sm-1 control-label nomor">'+nomor+'.</label>'+
                            '<div class="col-sm-10">'+
                                '<input type="text" class="form-control" name="nama_tanggungan[]" placeholder="Nama Lengkap">'+
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
