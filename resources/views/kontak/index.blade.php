@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2>Daftar Kontak</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Form Pencarian -->
    <form action="{{ route('kontak.index') }}" method="GET" class="mb-3 d-flex">
        <input type="text" name="search" value="{{ request('search') }}" class="form-control me-2" placeholder="Cari nama atau email...">
        <button type="submit" class="btn btn-secondary">Cari</button>
    </form>

    <a href="{{ route('kontak.create') }}" class="btn btn-primary mb-3">Tambah Baru</a>

    @if($kontaks->count() > 0)
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kontaks as $kontak)
            <tr>
                <td>{{ ($kontaks->currentPage()-1) * $kontaks->perPage() + $loop->iteration }}</td>
                <td>{{ $kontak->nama }}</td>
                <td>{{ $kontak->email }}</td>
                <td>{{ Str::limit($kontak->pesan, 50) }}</td>
                <td>{{ $kontak->created_at->format('d/m/Y') }}</td>
                <td>
                    <a href="{{ route('kontak.edit', $kontak->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('kontak.destroy', $kontak->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $kontaks->appends(['search' => request('search')])->links() }}
    </div>

    @else
    <p class="text-center">Belum ada data kontak.</p>
    @endif
</div>
@endsection
