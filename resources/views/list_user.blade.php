@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="text-danger fw-bold">Daftar Pengguna</h2>
    <a href="{{ route('user.create') }}" class="btn btn-danger">+ Tambah Pengguna</a>
</div>

<table class="table table-dark table-hover table-bordered">
    <thead class="table-secondary text-dark">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->nim }}</td>
                <td><span class="badge bg-danger">{{ $user->nama_kelas }}</span></td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="text-center text-secondary">Belum ada data pengguna.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection