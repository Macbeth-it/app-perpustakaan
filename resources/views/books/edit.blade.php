@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <div class="form-page">
        <div class="form-heading">
            <h1>Edit Buku</h1>
            <p>Perbarui informasi buku dalam koleksi perpustakaan.</p>
        </div>

        <form class="form-card" action="{{ route('books.update', $book['id']) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-grid">
                <div class="form-field form-field-full">
                    <label for="judul">Judul</label>
                    <input class="form-control" type="text" name="judul" id="judul" value="{{ old('judul', $book['judul']) }}">
                    @error('judul')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-field">
                    <label for="penulis">Penulis</label>
                    <input class="form-control" type="text" name="penulis" id="penulis" value="{{ old('penulis', $book['penulis']) }}">
                    @error('penulis')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-field">
                    <label for="penerbit">Penerbit</label>
                    <input class="form-control" type="text" name="penerbit" id="penerbit" value="{{ old('penerbit', $book['penerbit']) }}">
                    @error('penerbit')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-field">
                    <label for="tahun_terbit">Tahun Terbit</label>
                    <input class="form-control" type="number" name="tahun_terbit" id="tahun_terbit" value="{{ old('tahun_terbit', $book['tahun_terbit']) }}">
                    @error('tahun_terbit')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-field">
                    <label for="stok">Stok</label>
                    <input class="form-control" type="number" name="stok" id="stok" value="{{ old('stok', $book['stok']) }}">
                    @error('stok')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-field">
                    <label for="isbn">ISBN <span class="form-help">(opsional)</span></label>
                    <input class="form-control" type="text" name="isbn" id="isbn" value="{{ old('isbn', $book['isbn']) }}">
                    @error('isbn')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-field">
                    <label for="category_id">Kategori</label>
                    <select class="form-control" name="category_id" id="category_id">
                        <option value="">-- Pilih Kategori --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category['id'] }}" @selected(old('category_id', $book['category_id']) == $category['id'])>
                                {{ $category['nama_kategori'] }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn">Perbarui Buku</button>
                <a href="{{ route('books.index') }}" class="btn-secondary">Batal</a>
            </div>
        </form>
    </div>
@endsection