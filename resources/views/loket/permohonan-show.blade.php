@extends('layouts.app')

@section('page-title')
    Permohonan
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-white">
            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{ route('loket.permohonan.update', $permohonan->id) }}">
                @csrf
                @method('put')
                    <div class="form-group h5">
                        <label class="control-label col-md-4 text-semibold">No. Pemohon<span class="pull-right">:</span></label>
                        <div class="col-md-8">
                            <div class="form-control-static">
                                {{ $permohonan->nomor_pemohon }}
                            </div>
                        </div>
                        
                        <label class="control-label col-md-4 text-semibold">Status<span class="pull-right">:</span></label>
                        <div class="col-md-8">
                            <div class="form-control-static">
                                {{ $permohonan->status->nama }}
                            </div>
                        </div>
                        
                        @if ($permohonan->status->id == 6 || $permohonan->bayar_ptpgt == 1)
                            <label class="control-label col-md-4 text-semibold">Bayar PTPGT<span class="pull-right">:</span></label>
                            <div class="col-md-8">
                                <div class="checkbox">
                                    <input type="hidden" name="bayar_ptpgt" value="0">
                                    <input {{ $permohonan->bayar_ptpgt == 1 ? 'checked': '' }} type="checkbox" name="bayar_ptpgt" value="1" class="styled">
                                </div>
                            </div>
                        @else 
                            <input type="hidden" name="bayar_ptpgt" value="0">                            
                        @endif
                    </div>

                    @if ($permohonan->file_peta_bidang)
                        <button type="button" class="btn btn-success" onclick="window.location.href = '{{ asset('images/peta_bidang/'.$permohonan->file_peta_bidang) }}';">Unduh Peta Bidang</button>
                    @endif
                    @if ($permohonan->file_ptpgt)
                        <button type="button" class="btn btn-success" onclick="window.location.href = '{{ asset('images/pt_pgt/'.$permohonan->file_ptpgt) }}';">Unduh Aspek Pertimbangan</button>
                    @endif

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th width="5">#</th>
                                    <th>Persyaratan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Fotocopy KTP / Surat Bukti Kewarganegaraan / Identitas Lainnya</td>
                                    <td>
                                        <input type="hidden" name="fc_identitas" value="0" />
                                        <input {{ $permohonan->fc_identitas == 1 ? 'checked': '' }} value="1" type="checkbox" name="fc_identitas" class="styled">
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Surat Kuasa dari Pimpinan Kongregasi Pasionis Badan Hukum dan Pengesahan</td>
                                    <td>
                                        <input type="hidden" name="surat_kuasa" value="0">
                                        <input {{ $permohonan->surat_kuasa == 1 ? 'checked': '' }} value="1" type="checkbox" name="surat_kuasa" class="styled">
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Surat Bukti Perolehan Tanah</td>
                                    <td>
                                        <input type="hidden" name="bukti_perolehan" value="0">
                                        <input {{ $permohonan->bukti_perolehan == 1 ? 'checked': '' }} value="1" type="checkbox" name="bukti_perolehan" class="styled">
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Salinan Surat Ukur / Gambar Situasi</td>
                                    <td>
                                        <input type="hidden" name="fc_suratukur" value="0">
                                        <input {{ $permohonan->fc_suratukur == 1 ? 'checked': '' }} value="1" type="checkbox" name="fc_suratukur" class="styled">
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>I M B</td>
                                    <td>
                                        <input type="hidden" name="imb" value="0">
                                        <input {{ $permohonan->imb == 1 ? 'checked': '' }} value="1" type="checkbox" name="imb" class="styled">
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>Fotocopy Surat Persetujuan Bidang Usaha dari Instansi</td>
                                    <td>
                                        <input type="hidden" name="fc_persetujuanbidang" value="0">
                                        <input {{ $permohonan->fc_persetujuanbidang == 1 ? 'checked': '' }} value="1" type="checkbox" name="fc_persetujuanbidang" class="styled">
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>Fotocopy Surat Rekomendasi dari Departemen Luar Negeri</td>
                                    <td>
                                        <input type="hidden" name="fc_rekomendasi" value="0">
                                        <input {{ $permohonan->fc_rekomendasi == 1 ? 'checked': '' }} value="1" type="checkbox" name="fc_rekomendasi" class="styled">
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>Surat Persetujuan Penguasaan Tanah (untuk Instansi)</td>
                                    <td>
                                        <input type="hidden" name="surat_persetujuan_penguasaan" value="0">
                                        <input {{ $permohonan->surat_persetujuan_penguasaan == 1 ? 'checked': '' }} value="1" type="checkbox" name="surat_persetujuan_penguasaan" class="styled">
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>Surat Pernyataan Pemohon mengenai Jumlah Bidang, Luas dan Status tanah yang dimiliki</td>
                                    <td>
                                        <input type="hidden" name="surat_pernyataan" value="0">
                                        <input {{ $permohonan->surat_pernyataan == 1 ? 'checked': '' }} value="1" type="checkbox" name="surat_pernyataan" class="styled">
                                    </td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>Surat Pelepasan Kawasan Hutan dan Instansi</td>
                                    <td>
                                        <input type="hidden" name="surat_pelepasan_kawasan" value="0">
                                        <input {{ $permohonan->surat_pelepasan_kawasan == 1 ? 'checked': '' }} value="1" type="checkbox" name="surat_pelepasan_kawasan" class="styled">
                                    </td>
                                </tr>
                                <tr>
                                    <td>11.</td>
                                    <td>Surat Penunjukkan atau Penyerahan Tanah dari Pemerintah</td>
                                    <td>
                                        <input type="hidden" name="surat_penunjukkan" value="0">
                                        <input {{ $permohonan->surat_penunjukkan == 1 ? 'checked': '' }} value="1" type="checkbox" name="surat_penunjukkan" class="styled">
                                    </td>
                                </tr>
                                <tr>
                                    <td>12.</td>
                                    <td>Surat Rencana Penguasaan Tanah Jangka Pendek dan Jangka Panjang</td>
                                    <td>
                                        <input type="hidden" name="surat_rencana" value="0">
                                        <input {{ $permohonan->surat_rencana == 1 ? 'checked': '' }} value="1" type="checkbox" name="surat_rencana" class="styled">
                                    </td>
                                </tr>
                                <tr>
                                    <td>13.</td>
                                    <td>Surat Pernyataan atau bukti bahwa seluruh modalnya dimiliki oleh Pemerintah</td>
                                    <td>
                                        <input type="hidden" name="surat_pernyataan_modal" value="0">
                                        <input {{ $permohonan->surat_pernyataan_modal == 1 ? 'checked': '' }} value="1" type="checkbox" name="surat_pernyataan_modal" class="styled">
                                    </td>
                                </tr>
                                <tr>
                                    <td>14.</td>
                                    <td>Surat-surat lainnya</td>
                                    <td>
                                        <input type="hidden" name="surat_lain" value="0">
                                        <input {{ $permohonan->surat_lain == 1 ? 'checked': '' }} value="1" type="checkbox" name="surat_lain" class="styled">
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                    <button type="submit" class="btn btn-primary stepy-finish">Submit <i class="icon-check position-right"></i></button>

                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-white">
            <div class="panel-heading">
                <h5 class="panel-title text-semibold">
                    Data Pemohon : 
                </h5>
                <div class="heading-elements">
                    <button class="btn btn-primary btn-xs pull-left" data-toggle="modal" data-target="#modalPemohon">Edit Pemohon</button>
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
                <div class="form-horizontal">

                    <div class="form-group">
                        <label class="control-label col-md-3">Nama / Umur <span class="pull-right">:</span></label>
                        <div class="col-md-9">
                            <div class="form-control-static">
                                {{ $permohonan->pemohon->nama }} / {{ $permohonan->pemohon->umur }}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Kewarganegaraan <span class="pull-right">:</span></label>
                        <div class="col-md-9">
                            <div class="form-control-static">
                                {{ $permohonan->pemohon->kewarganegaraan }}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Identitas yang digunakan <span class="pull-right">:</span></label>
                        <div class="col-md-9">
                            <div class="form-control-static">
                                {{ $permohonan->pemohon->jenis_identitas }} / {{ $permohonan->pemohon->nomor_identitas }}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Pekerjaan <span class="pull-right">:</span></label>
                        <div class="col-md-9">
                            <div class="form-control-static">
                                {{ $permohonan->pemohon->pekerjaan }}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Alamat <span class="pull-right">:</span></label>
                        <div class="col-md-9">
                            <div class="form-control-static">
                                {{ $permohonan->pemohon->alamat }}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Nama Ibu <span class="pull-right">:</span></label>
                        <div class="col-md-9">
                            <div class="form-control-static">
                                {{ $permohonan->pemohon->nama_ibu }}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">No. Telepon <span class="pull-right">:</span></label>
                        <div class="col-md-9">
                            <div class="form-control-static">
                                {{ $permohonan->pemohon->no_hp }}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Pekerjaan <span class="pull-right">:</span></label>
                        <div class="col-md-9">
                            <div class="form-control-static">
                                {{ $permohonan->pemohon->pekerjaan }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-white">
            <div class="panel-heading">
                <h5 class="panel-title text-semibold">
                    Data Tanah : 
                </h5>
                <div class="heading-elements">
                    <button class="btn btn-primary btn-xs pull-left" data-toggle="modal" data-target="#modalTanah">Edit Tanah</button>
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-md-3">1. Letak Tanah <span class="pull-right">:</span></label>
                        <div class="col-md-9">
                            <label class="control-label col-md-3">Jalan <span class="pull-right">:</span></label>
                            <div class="col-md-9">
                                <div class="form-control-static">{{ $permohonan->tanah->jalan }}</div>
                            </div>
    
                            <label class="control-label col-md-3">Desa <span class="pull-right">:</span></label>
                            <div class="col-md-9">
                                <div class="form-control-static">{{ $permohonan->tanah->desa }}</div>
                            </div>
    
                            <label class="control-label col-md-3">Kecamatan <span class="pull-right">:</span></label>
                            <div class="col-md-9">
                                <div class="form-control-static">{{ $permohonan->tanah->kecamatan }}</div>
                            </div>
    
                            <label class="control-label col-md-3">Kabupaten <span class="pull-right">:</span></label>
                            <div class="col-md-9">
                                <div class="form-control-static">{{ $permohonan->tanah->kabupaten }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">2. Luasnya <span class="pull-right">:</span></label>
                        <div class="col-md-9">
                            <div class="form-control-static">{{ $permohonan->tanah->luas }}</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">3. Batas-batasnya <span class="pull-right">:</span></label>
                        <div class="col-md-9">
                            <label class="control-label col-md-3">Utara <span class="pull-right">:</span></label>
                            <div class="col-md-9">
                                <div class="form-control-static">{{ $permohonan->tanah->batas_utara }}</div>
                            </div>
    
                            <label class="control-label col-md-3">Timur <span class="pull-right">:</span></label>
                            <div class="col-md-9">
                                <div class="form-control-static">{{ $permohonan->tanah->batas_timur }}</div>
                            </div>
    
                            <label class="control-label col-md-3">Selatan <span class="pull-right">:</span></label>
                            <div class="col-md-9">
                                <div class="form-control-static">{{ $permohonan->tanah->batas_selatan  }}</div>
                            </div>
    
                            <label class="control-label col-md-3">Barat <span class="pull-right">:</span></label>
                            <div class="col-md-9">
                                <div class="form-control-static">{{ $permohonan->tanah->batas_barat }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">4. Status Tanah <span class="pull-right">:</span></label>
                        <div class="col-md-9">
                            <div class="form-control-static">{{ $permohonan->tanah->status_tanah }}</div>
                            <label class="control-label col-md-7">(Hak yang melekat di atas tanah) <span class="pull-right">:</span></label>
                            <div class="col-md-5">
                                <div class="form-control-static">{{ $permohonan->tanah->hak_tanah }}</div>
                            </div>
    
                            <label class="control-label col-md-3">Tgl. <span class="pull-right">:</span></label>
                            <div class="col-md-9">
                                <div class="form-control-static">{{ $permohonan->tanah->tanggal_haktanah  }}</div>
                            </div>
    
                            <label class="control-label col-md-3">No.  <span class="pull-right">:</span></label>
                            <div class="col-md-9">
                                <div class="form-control-static">{{ $permohonan->tanah->nomor_haktanah }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">5. Jenis dan Keadaan Tanah <span class="pull-right">:</span></label>
                        <div class="col-md-8">
                            <div class="form-control-static">{{ $permohonan->tanah->jenis_tanah }}</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">6. Dasar Penguasaan <span class="pull-right">:</span></label>
                        <div class="col-md-8">
                            <div class="form-control-static">{{ $permohonan->tanah->dasar_penguasaan }}</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">7. Rencana Penggunaan <span class="pull-right">:</span></label>
                        <div class="col-md-8">
                            <div class="form-control-static">{{ $permohonan->tanah->rencana_penggunaan }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalPemohon" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Data Pemohon</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ route('loket.pemohon.update', $permohonan->pemohon->id) }}" class="form-horizontal">
            @csrf
            @method('put')
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-md-2">Nama dan Umur</label>
                        <div class="col-md-4">
                            <input type="text" name="nama" class="form-control" value="{{ $permohonan->pemohon->nama }}">
                        </div>
                        <div class="col-md-1">
                            <input type="number" name="umur" class="form-control" value="{{ $permohonan->pemohon->umur }}">
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label class="control-label col-md-2">Kewarganegaraan</label>
                        <div class="col-md-3">
                            <input type="text" name="kewarganegaraan" class="form-control" value="{{ $permohonan->pemohon->kewarganegaraan }}">
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="jenis_identitas" class="form-control" value="{{ $permohonan->pemohon->jenis_identitas }}">
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="nomor_identitas" class="form-control" value="{{ $permohonan->pemohon->nomor_identitas }}">
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label class="control-label col-md-2">Pekerjaan</label>
                        <div class="col-md-10">
                            <input type="text" name="pekerjaan" class="form-control" value="{{ $permohonan->pemohon->pekerjaan }}">
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label class="control-label col-md-2">Alamat</label>
                        <div class="col-md-10">
                            <input type="text" name="alamat" class="form-control" value="{{ $permohonan->pemohon->alamat }}">
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label class="control-label col-md-2">Nama Ibu</label>
                        <div class="col-md-10">
                            <input type="text" name="nama_ibu" class="form-control" value="{{ $permohonan->pemohon->nama_ibu }}">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-md-2">Nomor Telepon</label>
                        <div class="col-md-10">
                            <input type="number" name="no_hp" class="form-control" value="{{ $permohonan->pemohon->no_hp }}">
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label class="control-label col-md-2">Susunan Keluarga</label>
                        <div class="col-md-10">
                            <label class="radio-inline">
                                <input type="radio" name="status_pasangan" value="Belum Menikah" {{ $permohonan->pemohon->status_pasangan == 'Belum Menikah' ? 'checked' : '' }}>
                                Belum Menikah
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="status_pasangan" value="Suami" {{ $permohonan->pemohon->status_pasangan == 'Suami' ? 'checked' : '' }}>
                                Suami
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="status_pasangan" value="Istri" {{ $permohonan->pemohon->status_pasangan == 'Istri' ? 'checked' : '' }}>
                                Istri
                            </label>
                            <input type="text" name="nama_pasangan" class="form-control" value="{{ $permohonan->pemohon->nama_pasangan }}">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modalTanah" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Data Pemohon</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ route('loket.tanah.update', $permohonan->tanah->id) }}" class="form-horizontal">
            @csrf
            @method('put')
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-md-3">1. Letak Tanah : </label>
                        <div class="col-md-9">
                            <label class="control-label col-md-2">Jalan</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="jalan" value="{{ $permohonan->tanah->jalan }}">
                            </div>
    
                            <label class="control-label col-md-2">Desa</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="desa" value="{{ $permohonan->tanah->desa }}">
                            </div>
    
                            <label class="control-label col-md-2">Kecamatan</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="kecamatan" value="{{ $permohonan->tanah->kecamatan }}">
                            </div>
    
                            <label class="control-label col-md-2">Kabupaten</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="kabupaten" value="{{ $permohonan->tanah->kabupaten }}">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-md-3">2. Luasnya : </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="luas" value="{{ $permohonan->tanah->luas }}">
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label class="control-label col-md-3">3. Batas-batasnya : </label>
                        <div class="col-md-9">
                            <label class="control-label col-md-2">Utara</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="batas_utara" value="{{ $permohonan->tanah->batas_utara }}">
                            </div>
    
                            <label class="control-label col-md-2">Timur</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="batas_timur" value="{{ $permohonan->tanah->batas_timur }}">
                            </div>
    
                            <label class="control-label col-md-2">Barat</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="batas_barat" value="{{ $permohonan->tanah->batas_barat }}">
                            </div>
    
                            <label class="control-label col-md-2">Selatan</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="batas_selatan" value="{{ $permohonan->tanah->batas_selatan }}">
                            </div>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label class="control-label col-md-3">4. Status Tanah : </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="status_tanah"  value="{{ $permohonan->tanah->status_tanah }}">
    
                            <label class="control-label col-md-3">(Hak yang melekat di atas tanah)</label>
                            <div class="col-md-3">
                                <select name="hak_tanah" id="hak_tanah" class="select">
                                    <option selected disabled hidden></option>
                                    <option {{  $permohonan->tanah->hak_tanah == 'SKPT' ? 'selected':'' }}>SKPT</option>
                                    <option {{  $permohonan->tanah->hak_tanah == 'Ketitir' ? 'selected':'' }}>Ketitir</option>
                                    <option {{  $permohonan->tanah->hak_tanah == 'Surat Pernyataan Tanah' ? 'selected':'' }}>Surat Pernyataan Tanah</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="control-label col-md-3">Tgl.</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="tanggal_haktanah" value="{{ $permohonan->tanah->tanggal_haktanah }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="control-label col-md-3">No.</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="nomor_haktanah" value="{{ $permohonan->tanah->nomor_haktanah }}">
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label class="control-label col-md-3">5. Jenis dan Keadaan Tanah : </label>
                        <div class="col-md-9">
                            <label class="radio-inline">
                                <input type="radio" name="jenis_tanah" value="Perumahan" {{  $permohonan->tanah->jenis_tanah == 'Perumahan' ? 'checked':'' }}>
                                Perumahan
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="jenis_tanah" value="Pertanian" {{  $permohonan->tanah->jenis_tanah == 'Pertanian' ? 'checked':'' }}>
                                Pertanian
                            </label>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label class="control-label col-md-3">6. Dasar Penguasaan : </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="dasar_penguasaan" value="{{ $permohonan->tanah->dasar_penguasaan }}">
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label class="control-label col-md-3">7. Rencana Penggunaan : </label>
                        <div class="col-md-9">
                            <label class="radio-inline">
                                <input type="radio" name="rencana_penggunaan" value="Perumahan" {{ $permohonan->tanah->rencana_penggunaan == 'Perumahan' ? 'checked':'' }}>
                                Perumahan
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="rencana_penggunaan" value="Pertanian" {{ $permohonan->tanah->rencana_penggunaan == 'Pertanian' ? 'checked':'' }}>
                                Pertanian
                            </label>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('js')
    <script type="text/javascript" src="{{ asset('js/plugins/forms/selects/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/pages/form_layouts.js') }}"></script>
    <script>
    $(function() {
        $('.styled').uniform({
            radioClass: 'choice'
        });
    });
    </script>
@endpush
