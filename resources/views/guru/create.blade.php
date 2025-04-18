@extends('layouts.master')

@section('title', 'Tambah Data Guru')

@section('content')
<div class="row">
    <div class="col-md-6">

        {{-- Tampilkan semua error --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('guru.insert') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ old('nama') }}">
                </div>
                <div class="text-danger">
                    @error('nama') {{ $message }} @enderror
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-book"></i></span>
                    <input type="text" name="nip" class="form-control" placeholder="NIP" value="{{ old('nip') }}">
                </div>
                <div class="text-danger">
                    @error('nip') {{ $message }} @enderror
                </div>
            </div>
    </div>


            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="{{ old('jabatan') }}">
                </div>
                <div class="text-danger">
                    @error('jabatan') {{ $message }} @enderror
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
                    <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan" value="{{ old('pendidikan') }}">
                </div>
                <div class="text-danger">
                    @error('pendidikan') {{ $message }} @enderror
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-bank"></i></span>
                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="{{ old('tempat_lahir') }}">
                </div>
                <div class="text-danger">
                    @error('tempat_lahir') {{ $message }} @enderror
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    <input type="date" name="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir') }}">
                </div>
                <div class="text-danger">
                    @error('tanggal_lahir') {{ $message }} @enderror
                </div>
            </div>

            <div class="form-group">
                <select name="agama" class="form-control">
                    <option value="">Pilih Agama</option>
                    <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                    <option value="Kristen" {{ old('agama') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                    <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                    <option value="Buddha" {{ old('agama') == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                    <option value="Lainnya" {{ old('agama') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                </select>
                <div class="text-danger">
                    @error('agama') {{ $message }} @enderror
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                    <input type="text" name="telp" class="form-control" placeholder="No Telp" value="{{ old('telp') }}">
                </div>
                <div class="text-danger">
                    @error('telp') {{ $message }} @enderror
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ old('alamat') }}">
                </div>
                <div class="text-danger">
                    @error('alamat') {{ $message }} @enderror
                </div>
            </div>

            <div class="form-group">
                <label>Photo</label>
                <input type="file" name="photo" class="form-control">
                <div class="text-danger">
                    @error('photo') {{ $message }} @enderror
                </div>
            </div>

            <div>
                <a href="/guru" class="btn btn-success btn-sm">Close</a>
                <button type="submit" class="btn btn-primary btn-sm">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(function() {
    $("#guru-table").DataTable();
});
</script>
@endpush
