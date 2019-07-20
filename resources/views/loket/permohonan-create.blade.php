@extends('layouts.app')

@section('page-title')
    Permohonan
@endsection

@section('content')
<!-- Wizard with validation -->
<div class="panel panel-white">
    <div class="panel-heading">
        <h6 class="panel-title">Tambah Permohonan</h6>
    </div>

    <form class="steps-validation form-horizontal" action="#">
        <h6>Data Pemohon</h6>
        <fieldset>
            <div class="form-group">
                <label class="control-label col-md-2">Nama dan Umur</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Nama Lengkap">
                </div>
                <div class="col-md-1">
                    <input type="number" class="form-control" placeholder="Umur">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Kewarganegaraan</label>
                <div class="col-md-3">
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Surat Identitas yang digunakan">
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Nomor Identitas">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Pekerjaan</label>
                <div class="col-md-10">
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Alamat</label>
                <div class="col-md-10">
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Nama Ibu</label>
                <div class="col-md-10">
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Susunan Keluarga</label>
                <div class="col-md-10">
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
                    <input type="text" class="form-control" placeholder="Nama Pasangan">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2">Nomor Telepon</label>
                <div class="col-md-10">
                    <input type="number" class="form-control">
                </div>
            </div>

        </fieldset>

        <h6>Data Tanah</h6>
        <fieldset>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>University: <span class="text-danger">*</span></label>
                        <input type="text" name="university" placeholder="University name" class="form-control required">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Country:</label>
                        <select name="university-country" data-placeholder="Choose a Country..." class="select">
                            <option></option> 
                            <option value="1">United States</option> 
                            <option value="2">France</option> 
                            <option value="3">Germany</option> 
                            <option value="4">Spain</option> 
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Degree level: <span class="text-danger">*</span></label>
                        <input type="text" name="degree-level" placeholder="Bachelor, Master etc." class="form-control required">
                    </div>

                    <div class="form-group">
                        <label>Specialization:</label>
                        <input type="text" name="specialization" placeholder="Design, Development etc." class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <label>From:</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="education-from-month" data-placeholder="Month" class="select">
                                            <option></option>
                                            <option value="January">January</option> 
                                            <option value="...">...</option> 
                                            <option value="December">December</option> 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="education-from-year" data-placeholder="Year" class="select">
                                            <option></option> 
                                            <option value="1995">1995</option> 
                                            <option value="...">...</option> 
                                            <option value="1980">1980</option> 
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label>To:</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="education-to-month" data-placeholder="Month" class="select">
                                            <option></option>
                                            <option value="January">January</option> 
                                            <option value="...">...</option> 
                                            <option value="December">December</option> 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="education-to-year" data-placeholder="Year" class="select">
                                            <option></option> 
                                            <option value="1995">1995</option> 
                                            <option value="...">...</option> 
                                            <option value="1980">1980</option> 
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Language of education:</label>
                        <input type="text" name="education-language" placeholder="English, German etc." class="form-control">
                    </div>
                </div>
            </div>
        </fieldset>

        
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
<script type="text/javascript" src="{{ asset('js/plugins/forms/wizards/steps.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/forms/selects/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/forms/styling/uniform.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/core/libraries/jasny_bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/forms/validation/validate.min.js') }}"></script>
{{-- <script type="text/javascript" src="{{ asset('js/plugins/extensions/cookie.js') }}"></script> --}}

<script type="text/javascript" src="{{ asset('js/pages/wizard_steps.js') }}"></script>
@endpush
