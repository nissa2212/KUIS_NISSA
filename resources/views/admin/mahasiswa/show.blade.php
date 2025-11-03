@extends('adminlte::page')

@section('title', 'Detail Mahasiswa')

@section('content_header')
    <h1>Detail Mahasiswa</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered">
                        <tr>
                            <th>NIM</th>
                            <td>{{ $mahasiswa->nim }}</td>
                        </tr>
                        <tr>
                            <th>Nama Mahasiswa</th>
                            <td>{{ $mahasiswa->nama_mahasiswa }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $mahasiswa->email }}</td>
                        </tr>
                        <tr>
                            <th>Jurusan</th>
                            <td>{{ $mahasiswa->jurusan }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <strong>Alamat:</strong>
                    <p>{{ $mahasiswa->alamat }}</p>
                </div>
            </div>

            <div class="mt-3">
                <a href="{{ route('mahasiswa.edit', $mahasiswa) }}" class="btn btn-warning">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </div>
@stop
