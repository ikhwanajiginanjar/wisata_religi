@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center border-0 rounded-top">
                    <h2 class="mb-0"><i class="fas fa-envelope me-2"></i>Kontak Kami</h2>
                    <a href="{{ route('kontak.create') }}" class="btn btn-light btn-sm">
                        <i class="fas fa-plus me-1"></i>Tambah Baru
                    </a>
                </div>
                
                <div class="card-body">
                    <!-- Notifications -->
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            <i class="fas fa-check-circle me-2"></i>
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show">
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <!-- Contact List -->
                    @if($kontaks->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered table-striped table-light shadow-sm">
                                <thead class="table-dark">
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
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $kontak->nama }}</td>
                                        <td>{{ $kontak->email }}</td>
                                        <td>{{ Str::limit($kontak->pesan, 50) }}</td>
                                        <td>{{ $kontak->created_at->format('d/m/Y H:i') }}</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{ route('kontak.show', $kontak->id) }}" class="btn btn-info" title="Lihat">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('kontak.edit', $kontak->id) }}" class="btn btn-warning" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('kontak.destroy', $kontak->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" title="Hapus" onclick="return confirm('Apakah Anda yakin menghapus data ini?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="d-flex justify-content-center mt-4">
                            {{ $kontaks->links() }}
                        </div>
                    @else
                        <div class="alert alert-info text-center">
                            <i class="fas fa-info-circle me-2"></i>Belum ada data kontak
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
