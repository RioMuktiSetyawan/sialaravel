@extends('layouts.master')

@section('content')
<div class="col-xs-12">
    <div class="box">
        <h3 class="box-title"><i class="fa fa-database"></i> Data Guru</h3>
        @if (session('pesan'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="fa fa-check"></i>Success</h4>
            {{session('pesan')}}.
</div>
    @endif
        <div class="box-header">
            <a href="guru/create" class="btn btn-primary btn-sm"><i class="fa fa-plus-square"></i> Tambah Guru</a>
        </div>
        <!--/.box-header -->
        <div class="box-body">
            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="guru-table" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                            <thead>
                                <tr role="row">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NIP</th>
                                    <th>Alamat</th>
                                    <th>Photo</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($guru as $data)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->nip }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td><img src="{{ url('images/'.$data->photo) }}" width="50"></td>
                                        <td>
                                            <a href="/guru/profil/{{ $data->id}}" class="btn btn-success btn-sm">Detail</a>
                                            <a href="/guru/edit/{{ $data->id}}" class="btn btn-primary btn-sm">Edit</a>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id }}">Delete</button>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@foreach($guru as $data)
<!-- Modal Hapus -->
<div class="modal fade" id="delete{{ $data->id }}">
    <div class="modal-dialog modal-sm">
        <div class="modal-content bg-danger text-white">
            <div class="modal-header">
                <h4 class="modal-title">Konfirmasi Hapus</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus data guru bernama <strong>{{ $data->nama }}</strong>?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light btn-sm" data-dismiss="modal">Batal</button>
                <a href="{{ url('/guru/delete/' . $data->id) }}" class="btn btn-outline-light btn-sm">Hapus</a>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection

@push('script')
<script>
$(function() {
    $('#guru-table').DataTable();
});
</script>
@endpush