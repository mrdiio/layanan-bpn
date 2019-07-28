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

        <form class="stepy-validation form-horizontal" id="form" action="{{ route('loket.permohonan.store') }}" method="post">
        @csrf
            <fieldset title="1">
                <legend class="text-semibold">Data pemohon</legend>

                <div class="form-group">
                    <label class="control-label col-md-2">Nama dan Umur</label>
                    <div class="col-md-4">
                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
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
                    <label class="control-label col-md-2">Nomor Telepon</label>
                    <div class="col-md-10">
                        <input type="number" name="no_hp" class="form-control">
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
                    <label class="control-label col-md-2">
                        Anak yang masih menjadi tanggungan &nbsp;
                    </label>
                    <div class="col-md-10">
                        <button type="button" class="btn btn-warning btn-xs" onclick="tambah_barang()">Tambah Tanggungan</button> 
                        <em class="text-muted">*Kosongkan Jika Tidak Ada</em>
                        <hr>
                        <div class="box-body" id="daftar_barang">
                            {{-- masih kosong karena belum ada barang/jasa --}}
                        </div>
                    </div>
                    
                </div>
                
            </fieldset>
            
            <fieldset title="2">
                <legend class="text-semibold">Tanah</legend>

                <div class="form-group">
                    <label class="control-label col-md-3">1. Letak Tanah : </label>
                    <div class="col-md-9">
                        <label class="control-label col-md-2">Jalan</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="jalan">
                        </div>

                        <label class="control-label col-md-2">Desa</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="desa">
                        </div>

                        <label class="control-label col-md-2">Kecamatan</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="kecamatan">
                        </div>

                        <label class="control-label col-md-2">Kabupaten</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="kabupaten">
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-md-3">2. Luasnya : </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="luas">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">3. Batas-batasnya : </label>
                    <div class="col-md-9">
                        <label class="control-label col-md-2">Utara</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="batas_utara">
                        </div>

                        <label class="control-label col-md-2">Timur</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="batas_timur">
                        </div>

                        <label class="control-label col-md-2">Barat</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="batas_barat">
                        </div>

                        <label class="control-label col-md-2">Selatan</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="batas_selatan">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">4. Status Tanah : </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="status_tanah">

                        <label class="control-label col-md-3">(Hak yang melekat di atas tanah)</label>
                        <div class="col-md-3">
                            <select name="hak_tanah" id="hak_tanah" class="select">
                                <option selected disabled hidden></option>
                                <option>SKPT</option>
                                <option>Ketitir</option>
                                <option>Surat Pernyataan Tanah</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label col-md-3">Tgl.</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="tanggal_haktanah">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label col-md-3">No.</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="nomor_haktanah">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">5. Jenis dan Keadaan Tanah : </label>
                    <div class="col-md-9">
                        <label class="radio-inline">
                            <input type="radio" name="jenis_tanah" value=" Belum Menikah">
                            Perumahan
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="jenis_tanah" value="Suami">
                            Pertanian
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">6. Dasar Penguasaan : </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="dasar_penguasaan">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">7. Rencana Penggunaan : </label>
                    <div class="col-md-9">
                        <label class="radio-inline">
                            <input type="radio" name="rencana_penggunaan" value=" Belum Menikah">
                            Perumahan
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="rencana_penggunaan" value="Suami">
                            Pertanian
                        </label>
                    </div>
                </div>
        
            </fieldset>

            <button type="submit" class="btn btn-primary stepy-finish add">Submit <i class="icon-check position-right"></i></button>
        </form>
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
