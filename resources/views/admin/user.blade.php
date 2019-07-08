@extends('layouts.app')

@section('page-title')
Daftar User
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
                        <i class="icon-user-plus position-left"></i> Tambah Pengguna
                    </button>
                </h5>
            </div>
            <table class="table datatable-basic">
                <thead>
                    <tr>
                        <th width=5%>#</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Hak Akses</th>
                        <th class="text-center" width=15%>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->email }}</td>
                        <td><span class="label label-warning">{{ $item->getRoleNames()->first() }}</span></td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a href="#" id="editModal" data-id="{{ $item->id }}"  data-role="{{ $item->getRoleNames()->first() }}">
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
<div class="modal fade user" data-backdrop="static" data-keyboard="false">
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
                        <label class="col-lg-3 control-label">Nama Lengkap</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Masukan Nama Lengkap" required autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Username</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="username" id="username"
                                placeholder="Masukan Username" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email</label>
                        <div class="col-lg-9">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Masukan Email (opsional)">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Hak Akses</label>
                        <div class="col-lg-9">
                            <select class="select" name="role" id="role" required>
                                <option value="" selected disabled hidden></option>                                
                                @foreach ($roles as $role)
                                <option value="{{ $role->name }}">{{ ucwords($role->name) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Password</label>
                        <div class="col-lg-9">
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Masukan Password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Konfirmasi Password</label>
                        <div class="col-lg-9">
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                                placeholder="Ulangi Password">
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
<!-- /modal form -->
@endsection

@push('js')
<script type="text/javascript" src="{{ asset('js/plugins/tables/datatables/datatables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/forms/selects/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/pages/datatables_basic.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/plugins/forms/styling/uniform.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/pages/form_layouts.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/crud/user.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/notifications/toastr.min.js') }}"></script>
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