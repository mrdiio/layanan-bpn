@extends('layouts.app')

@section('page-title')
Permission
@endsection

@section('breadcrumb')
<li><a href="#">User</a></li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Basic datatable permission -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">
                    <button type="button" class="btn btn-primary btn-sm" id="addModal">
                        <i class="icon-user-plus position-left"></i> Tambah Permission
                    </button>
                </h5>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th width=5%>#</th>
                        <th>Nama</th>
                        <th class="text-center" width=15%>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permission as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="#" id="editModal" data-id="{{ $item->id }}">
                                                <i class="icon-pencil7"></i> Ubah
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" id="hapusModal" data-id="{{ $item->id }}" data-name="{{ $item->name }}">
                                                <i class="icon-trash"></i> Hapus
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /basic datatable permission -->
    </div>
</div>

<!-- Modal form permission -->
<div class="modal fade permission" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Judul Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" class="form-horizontal" id="form">
                <div class="modal-body">
                    @csrf
                    <input type="text" class="hidden" id="_id">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Nama Permission</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Masukan Nama Permission" required autofocus>
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
<script type="text/javascript" src="{{ asset('js/crud/permission.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/notifications/toastr.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/notifications/sweet_alert.min.js') }}"></script>
@endpush