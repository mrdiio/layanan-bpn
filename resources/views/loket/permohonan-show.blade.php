@extends('layouts.app')

@section('page-title')
    Permohonan
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title text-semibold">No. Pemohon : {{ $permohonan->nomor_pemohon }}</h5>
                <small class="text-muted">
                    <span class="text-semibold">Status:</span> {{ $permohonan->status->nama }} 
                </small>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                    </ul>
                </div>
            </div>
            
            <div class="panel-body">
                <form class="form-horizontal">
                    <fieldset class="content-group">
                        <legend class="text-bold">Persyaratan</legend>

                        <div class="form-group">
                            <label class="control-label col-md-3">1. FC KTP <span class="pull-right">:</span></label>
                            <div class="col-md-9">
                                <div class="form-control-static">Ada</div>
                            </div>
                        </div>
                    </fieldset>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')

@endpush
