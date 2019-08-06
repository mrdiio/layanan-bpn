@extends('layouts.app')

@section('page-title')
    Permohonan
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-white">
            <div class="panel-body">
                <form class="form-horizontal">
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
                        
                        <label class="control-label col-md-4 text-semibold">Bayar PTPGT<span class="pull-right">:</span></label>
                        <div class="col-md-8">
                            <div class="checkbox">
                                <input type="hidden" name="bayar_ptpgt" value="0">
                                <input disabled {{ $permohonan->bayar_ptpgt == 1 ? 'checked': '' }} type="checkbox" name="bayar_ptpgt" value="1" class="styled">
                            </div>
                        </div>

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
                                        <input disabled {{ $permohonan->fc_identitas == 1 ? 'checked': '' }} value="1" type="checkbox" name="fc_identitas" class="styled">
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Surat Kuasa dari Pimpinan Kongregasi Pasionis Badan Hukum dan Pengesahan</td>
                                    <td>
                                        <input disabled {{ $permohonan->surat_kuasa == 1 ? 'checked': '' }} value="1" type="checkbox" name="surat_kuasa" class="styled">
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Surat Bukti Perolehan Tanah</td>
                                    <td>
                                        <input type="hidden" name="bukti_perolehan" value="0">
                                        <input disabled {{ $permohonan->bukti_perolehan == 1 ? 'checked': '' }} value="1" type="checkbox" name="bukti_perolehan" class="styled">
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Salinan Surat Ukur / Gambar Situasi</td>
                                    <td>
                                        <input disabled {{ $permohonan->fc_suratukur == 1 ? 'checked': '' }} value="1" type="checkbox" name="fc_suratukur" class="styled">
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>I M B</td>
                                    <td>
                                        <input disabled {{ $permohonan->imb == 1 ? 'checked': '' }} value="1" type="checkbox" name="imb" class="styled">
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>Fotocopy Surat Persetujuan Bidang Usaha dari Instansi</td>
                                    <td>
                                        <input disabled {{ $permohonan->fc_persetujuanbidang == 1 ? 'checked': '' }} value="1" type="checkbox" name="fc_persetujuanbidang" class="styled">
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>Fotocopy Surat Rekomendasi dari Departemen Luar Negeri</td>
                                    <td>
                                        <input disabled {{ $permohonan->fc_rekomendasi == 1 ? 'checked': '' }} value="1" type="checkbox" name="fc_rekomendasi" class="styled">
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>Surat Persetujuan Penguasaan Tanah (untuk Instansi)</td>
                                    <td>
                                        <input disabled {{ $permohonan->surat_persetujuan_penguasaan == 1 ? 'checked': '' }} value="1" type="checkbox" name="surat_persetujuan_penguasaan" class="styled">
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>Surat Pernyataan Pemohon mengenai Jumlah Bidang, Luas dan Status tanah yang dimiliki</td>
                                    <td>
                                        <input disabled {{ $permohonan->surat_pernyataan == 1 ? 'checked': '' }} value="1" type="checkbox" name="surat_pernyataan" class="styled">
                                    </td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>Surat Pelepasan Kawasan Hutan dan Instansi</td>
                                    <td>
                                        <input disabled {{ $permohonan->surat_pelepasan_kawasan == 1 ? 'checked': '' }} value="1" type="checkbox" name="surat_pelepasan_kawasan" class="styled">
                                    </td>
                                </tr>
                                <tr>
                                    <td>11.</td>
                                    <td>Surat Penunjukkan atau Penyerahan Tanah dari Pemerintah</td>
                                    <td>
                                        <input disabled {{ $permohonan->surat_penunjukkan == 1 ? 'checked': '' }} value="1" type="checkbox" name="surat_penunjukkan" class="styled">
                                    </td>
                                </tr>
                                <tr>
                                    <td>12.</td>
                                    <td>Surat Rencana Penguasaan Tanah Jangka Pendek dan Jangka Panjang</td>
                                    <td>
                                        <input disabled {{ $permohonan->surat_rencana == 1 ? 'checked': '' }} value="1" type="checkbox" name="surat_rencana" class="styled">
                                    </td>
                                </tr>
                                <tr>
                                    <td>13.</td>
                                    <td>Surat Pernyataan atau bukti bahwa seluruh modalnya dimiliki oleh Pemerintah</td>
                                    <td>
                                        <input disabled {{ $permohonan->surat_pernyataan_modal == 1 ? 'checked': '' }} value="1" type="checkbox" name="surat_pernyataan_modal" class="styled">
                                    </td>
                                </tr>
                                <tr>
                                    <td>14.</td>
                                    <td>Surat-surat lainnya</td>
                                    <td>
                                        <input disabled {{ $permohonan->surat_lain == 1 ? 'checked': '' }} value="1" type="checkbox" name="surat_lain" class="styled">
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="col-md-12">
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h5 class="panel-title text-semibold">Data Pemohon :</h5>
                    <div class="heading-elements">
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
        </div>

        <div class="col-md-12">
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h5 class="panel-title text-semibold">Data Tanah :</h5>
                    <div class="heading-elements">
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
</div>

@endsection

@push('js')
    <script type="text/javascript" src="{{ asset('js/plugins/forms/styling/uniform.min.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ asset('js/plugins/forms/styling/switchery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/plugins/forms/styling/switch.min.js') }}"></script> --}}
    <script>
    $(function() {
        $('.styled').uniform({
            radioClass: 'choice'
        });

        // $('#ktp').prop('checked', true).uniform('refresh');
    });
    </script>
@endpush