@extends('layouts.app')

@section('page-title')
    Permohonan IP
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Basic datatable -->
        <div class="panel panel-flat">
            <table class="table datatable-basic">
                <thead>
                    <tr>
                        <th width=5%>#</th>
                        <th>Nomor Pemohon</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th class="text-center" width=15%>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permohonan as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nomor_pemohon }}</td>
                        <td>{{ $data->pemohon->nama }}</td>
                        <td>{{ $data->status }}</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-success btn-labeled btn-xs legitRipple"><b><i class="icon-pencil7"></i></b> Ubah Status</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /basic datatable -->
    </div>
</div>
@endsection
