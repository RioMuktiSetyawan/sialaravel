@extends('layouts.master')

@section('title', 'Edit Data Guru')

@section('content')
<div class="row">
    <div class="col-md-6">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ old('nama', $guru->nama) }}">
                <div class="text-danger">@error('nama') {{ $message }} @enderror</div>
            </div>

            <div class="form-group">
                <label>NIP</label>
                <input type="text" name="nip" class="form-control" value="{{ old('nip', $guru->nip) }}">
                <div class="text-danger">@error('nip') {{ $message }} @enderror</div>
            </div>

            <div class="form-group">
                <label>Jabatan</label>
                <input type="text" name="jabatan" class="form-control" value="{{ old('jabatan', $guru->jabatan) }}">
                <div class="text-danger">@error('jabatan') {{ $message }} @enderror</div>
            </div>

            <div class="form-group">
                <label>Pendidikan</label>
                <input type="text" name="pendidikan" class="form-control" value="{{ old('pendidikan', $guru->pendidikan) }}">
                <div class="text-danger">@error('pendidikan') {{ $message }} @enderror</div>
            </div>

            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" value="{{ old('tempat_lahir', $guru->tempat_lahir) }}">
                <div class="text-danger">@error('tempat_lahir') {{ $message }} @enderror</div>
            </div>

            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" value="{{ old('tanggal_lahir', $guru->tanggal_lahir) }}">
                <div class="text-danger">@error('tanggal_lahir') {{ $message }} @enderror</div>
            </div>

            <div class="form-group">
                <label>Agama</label>
                <select name="agama" class="form-control">
                    <option value="">Pilih Agama</option>
                    @foreach(['Islam', 'Kristen', 'Hindu', 'Buddha', 'Lainnya'] as $agama)
                        <option value="{{ $agama }}" {{ old('agama', $guru->agama) == $agama ? 'selected' : '' }}>
                            {{ $agama }}
                        </option>
                    @endforeach
                </select>
                <div class="text-danger">@error('agama') {{ $message }} @enderror</div>
            </div>

            <div class="form-group">
                <label>No Telp</label>
                <input type="text" name="telp" class="form-control" value="{{ old('telp', $guru->telp) }}">
                <div class="text-danger">@error('telp') {{ $message }} @enderror</div>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" value="{{ old('alamat', $guru->alamat) }}">
                <div class="text-danger">@error('alamat') {{ $message }} @enderror</div>
            </div>
            <div class="col-sm-12">
    <div class="row">
        <!-- Preview Foto -->
        <div class="col-sm-6">
            @if($guru->photo)
                <img src="{{ url('images/' . $guru->photo) }}" width="100px" alt="Foto Guru">
            @else
                <p>Tidak ada foto</p>
            @endif
        </div>

        <!-- Upload File Baru -->
        <div class="col-sm-6">
            <div class="form-group">
                <label>Photo</label>
                <input type="file" name="photo" class="form-control">
                <input type="hidden" name="old_photo" value="{{ $guru->photo }}">
                <div class="text-danger">
                    @error('photo') {{ $message }} @enderror
                </div>
            </div>
        </div>
    </div>
</div>


            <div>
                <a href="{{ route('guru') }}" class="btn btn-success btn-sm">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
