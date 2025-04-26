@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">📒 DailyNotes Dashboard</h2>
        <a href="" class="btn btn-primary">+ Tambah Catatan</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($notes->count())
        <div class="row">
            @foreach ($notes as $note)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $note->title }}</h5>
                            <p class="card-text">{{ Str::limit($note->content, 100) }}</p>
                            <small class="text-muted mb-2">Ditulis pada: {{ $note->created_at->format('d M Y') }}</small>

                            <div class="mt-auto d-flex justify-content-between">
                                <a href="" class="btn btn-sm btn-warning">Edit</a>

                                <form action="" method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-info">Belum ada catatan yang ditambahkan.</div>
    @endif
@endsection
