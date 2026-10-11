@extends('layouts.app')

@section('title', 'Edit Kategori')

@section('content')
    <div class="form-page">
        <div class="form-heading">
            <h1>Edit Kategori</h1>
            <p>Perbarui informasi kategori koleksi buku.</p>
        </div>

        <form class="form-card" action="{{ route('categories.update', $category['id']) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-grid">
                <div class="form-field form-field-full">
                    <label for="nama_kategori">Nama Kategori</label>
                    <input class="form-control" type="text" name="nama_kategori" id="nama_kategori" value="{{ old('nama_kategori', $category['nama_kategori']) }}">
                    @error('nama_kategori')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-field form-field-full">
                    <label for="deskripsi">Deskripsi <span class="form-help">(opsional)</span></label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="4">{{ old('deskripsi', $category['deskripsi']) }}</textarea>
                    @error('deskripsi')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn">Perbarui Kategori</button>
                <a href="{{ route('categories.index') }}" class="btn-secondary">Batal</a>
            </div>
        </form>
    </div>
@endsection