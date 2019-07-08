@extends('layouts.app')

@section('page-title')
Role
@endsection

@section('breadcrumb')
<li><a href="#">User</a></li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Basic datatable -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">
                    <button type="button" class="btn btn-primary btn-sm" id="addModal">
                        <i class="icon-user-plus position-left"></i> Tambah Role 
                    </button>
                </h5>
            </div>
            <table class="table">
                <thead class="">
                    <tr>
                        <th width=5%>#</th>
                        <th>Nama</th>
                        <th>Permission</th>
                        <th class="text-center" width=15%>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($role as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            @foreach ($item->getAllPermissions() as $permissions)
                                <span class="label label-primary label-rounded">{{ $permissions->name }}</span> &nbsp;
                            @endforeach
                        </td>
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
        <!-- /basic datatable -->
    </div>
</div>

<!-- Modal form -->
<div class="modal fade role" data-backdrop="static" data-keyboard="false">
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
                        <label class="col-lg-3 control-label">Nama Role :</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Masukan Nama Role" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Permission :</label>
                        @if ($permission->isEmpty())
                            <label class="col-lg-9 control-label text-muted">Permission tidak tersedia.</label>
                        @endif
                        <div class="col-lg-9">
                            @foreach ($permission as $item)
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="{{ $item->id }}" value="{{ $item->name }}" name="permissions[]">
                                    {{ $item->name }}
                                </label>
                            </div>
                            @endforeach
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
<script type="text/javascript" src="{{ asset('js/crud/role.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/notifications/toastr.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/notifications/sweet_alert.min.js') }}"></script>
@endpush