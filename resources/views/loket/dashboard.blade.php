@extends('layouts.app')

@section('page-title')
    Dashboard Loket
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Basic datatable -->
        <div class="panel panel-flat">
            <div class="table-responsive">
                <table class="table datatable-basic">
                    <thead>
                        <tr>
                            <th width=5%>#</th>
                            <th>No. Pemohon</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th class="text-center" width=15%>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permohonan as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><a href="{{ route('loket.permohonan.show', $item->id) }}">{{ $item->nomor_pemohon }}</a></td>
                            <td><a href="">{{ $item->pemohon->nama }}</a></td>
                            <td>{{ $item->status }}</td>
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
        </div>
        <!-- /basic datatable -->
    </div>
</div>
@endsection

@push('js')
<script type="text/javascript" src="{{ asset('js/plugins/tables/datatables/datatables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/forms/selects/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/pages/datatables_basic.js') }}"></script>
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
