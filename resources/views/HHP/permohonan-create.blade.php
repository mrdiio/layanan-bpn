@extends('layouts.app')

@section('page-title')
    Permohonan HHP
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Basic datatable -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Data Permohonan Masuk ke HHP</h5>
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
                        @foreach ($permohonan as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><a href="{{ route('permohonan', $data->id) }}">{{ $data->nomor_pemohon }}</a></td>
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

@foreach($permohonan as $edit)
<div class="modal fade" id="update{{$edit->id}}" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">Ubah Status</h5>
            </div>
            <form class="form-horizontal" method="POST" action="/hhp/permohonan/{{$edit->id}}" enctype="multipart/form-data">
                @method('put')
                @csrf}
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Status</label>
                        <div class="col-lg-9">
                            <select class="select" name="status_id" class="form-control" required>
                                @foreach($status as $s)
                                <option value="{{ $s->id }}" {{ $edit->status_id == $s->id ? 'selected' : '' }}> {{ $s->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Keterangan</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="keterangan" placeholder="Isi Keterangan Jika Permohonan Ditolak">
                        </div>
                    </div>
                </div>
                <br>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

@endsection

@push('js')
<script type="text/javascript" src="{{ asset('js/plugins/forms/styling/uniform.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/pages/form_layouts.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/plugins/tables/datatables/datatables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/forms/selects/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/pages/datatables_basic.js') }}"></script>
<script>
    $(function() {
      $('.datatable-basic').DataTable({
        columnDefs: [{ 
            orderable: false,
            width: '100px',
            targets: [ 6 ]
        }],
      });
    });
</script>
@endpush