@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Daftar Pegawai</h1>
        <a href="{{ route('pegawai.create') }}" class="btn btn-primary mb-3">Tambah Pegawai</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID Pegawai</th>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Password</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawai as $p)
                    <tr>
                        <td>{{ $p->id_pegawai }}</td>
                        <td>{{ $p->nama_pegawai }}</td>
                        <td>{{ $p->password }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>{{ $p->no_hp }}</td>
                        <td>{{ $p->jabatan }}</td>
                        <td>
                            <a href="{{ route('pegawai.edit', $p->id_pegawai) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('pegawai.destroy', $p->id_pegawai) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>   
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
