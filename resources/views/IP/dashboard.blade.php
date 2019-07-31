@extends('layouts.app')

@section('page-title')
    Dashboard IP
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Basic datatable -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Data Pra Pengukuran</h5>
            </div>
            <div class="table-responsive">
                <table class="table datatable-basic">
                    <thead>
                        <tr>
                            <th width=5%>#</th>
                            <th>Nomor Pemohon</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Kontak</th>
                            <th>Status</th>
                            <th class="text-center" width=15%>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prapengukuran as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->nomor_pemohon }}</td>
                            <td>{{ $data->pemohon->nama }}</td>
                            <td>{{ $data->pemohon->alamat }}</td>
                            <td>{{ $data->pemohon->no_hp }}</td>
                            <td>{{ $data->status->nama }}</td>
                            <td class="text-center">
                                <a type="button" role="button"  data-toggle="modal" data-target="#update{{$data->id}}" class="btn btn-success btn-labeled btn-xs legitRipple"><b><i class="icon-pencil7"></i></b> Ubah Status</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /basic datatable -->
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- Basic datatable -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Data Pengukuran</h5>
            </div>
            <div class="table-responsive">
                <table class="table datatable-basic">
                    <thead>
                        <tr>
                            <th width=5%>#</th>
                            <th>Nomor Pemohon</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Kontak</th>
                            <th>Status</th>
                            <th class="text-center" width=15%>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengukuran as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->nomor_pemohon }}</td>
                            <td>{{ $data->pemohon->nama }}</td>
                            <td>{{ $data->pemohon->alamat }}</td>
                            <td>{{ $data->pemohon->no_hp }}</td>
                            <td>{{ $data->status->nama }}</td>
                            <td class="text-center">
                                <a type="button" role="button"  data-toggle="modal" data-target="#update{{$data->id}}" class="btn btn-success btn-labeled btn-xs legitRipple"><b><i class="icon-pencil7"></i></b> Ubah Status</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /basic datatable -->
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- Basic datatable -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Upload Peta Bidang dan Masuk P2</h5>
            </div>
            <div class="table-responsive">
                <table class="table datatable-basic">
                    <thead>
                        <tr>
                            <th width=5%>#</th>
                            <th>Nomor Pemohon</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Kontak</th>
                            <th>Status</th>
                            <th class="text-center" width=15%>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengukuran as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->nomor_pemohon }}</td>
                            <td>{{ $data->pemohon->nama }}</td>
                            <td>{{ $data->pemohon->alamat }}</td>
                            <td>{{ $data->pemohon->no_hp }}</td>
                            <td>{{ $data->status->nama }}</td>
                            <td class="text-center">
                                <a type="button" role="button"  data-toggle="modal" data-target="#update{{$data->id}}" class="btn btn-success btn-labeled btn-xs legitRipple"><b><i class="icon-pencil7"></i></b> Ubah Status</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /basic datatable -->
    </div>
</div>
@endsection

@push('js')
<script type="text/javascript" src="{{ asset('js/plugins/forms/styling/uniform.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/pages/form_layouts.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/forms/validation/validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/forms/wizards/stepy.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/pages/wizard_stepy.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/plugins/tables/datatables/datatables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/forms/selects/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/pages/datatables_basic.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/notifications/sweet_alert.min.js') }}"></script>
<script>
    $(function() {
      $('.datatable-basic').DataTable({
        columnDefs: [{ 
            orderable: false,
            width: '100px',
            targets: [ 4 ]
        }],
      });
    });
</script>
@endpush