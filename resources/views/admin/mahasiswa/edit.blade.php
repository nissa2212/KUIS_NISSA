@extends('adminlte::page')

@section('title', 'Edit Mahasiswa')

@section('content_header')
    <h1>Edit Data Mahasiswa</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('students.update', $mahasiswa) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama_mahasiswa">Nama Mahasiswa</label>
                    <input type="text" class="form-control @error('nama_mahasiswa') is-invalid @enderror"
                           id="nama_mahasiswa" name="nama_mahasiswa"
                           value="{{ old('nama_mahasiswa', $mahasiswa->nama_mahasiswa) }}" required>
                    @error('nama_mahasiswa')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror"
                           id="nim" name="nim" value="{{ old('nim', $mahasiswa->nim) }}" required>
                    @error('nim')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                           id="email" name="email" value="{{ old('email', $mahasiswa->email) }}" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror"
                           id="jurusan" name="jurusan" value="{{ old('jurusan', $mahasiswa->jurusan) }}" required>
                    @error('jurusan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control @error('alamat') is-invalid @enderror"
                              id="alamat" name="alamat" rows="3" required>{{ old('alamat', $student->alamat) }}</textarea>
                    @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@stop
