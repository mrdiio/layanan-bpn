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
                        <tr class="bg-danger">
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
                            <td>{{ $item->pemohon->nama }}</td>
                            <td>{{ $item->status->nama }}</td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="#" id="hapusModal" data-id="{{ $item->id }}" data-name="{{ $item->nomor_pemohon }}">
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

    $(function() {
        $(document).on('click', '#hapusModal', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            var name = $(this).data('name');
            swal({
                title: "Anda yakin ingin menghapus "+name+"?",
                text: name,
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#FF7043",
                confirmButtonText: "Yes, delete it!"
            },
            function() {
                $.ajax({
                    type: 'delete',
                    url: 'permohonan/' + id,
                    data: {
                        '_token': $('input[name=_token]').val(),
                    },
                    success: function(data) {
                        toastr.success('Data berhasil dihapus!', 'Terhapus', {timeOut: 5000});
                        location.reload();
                        // console.log(data);
                        
                    },
                    error: function(errors) {
                        toastr.error("Data Error.");
                        var error = errors.responseJSON;
                        // console.log(error);
                    },
                })
            })
        })
    })
</script>

@endpush
