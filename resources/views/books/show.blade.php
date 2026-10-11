@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
    <div class="detail-page">
        <div class="detail-heading">
            <h1>Detail Buku</h1>
            <p>Informasi lengkap buku dalam koleksi perpustakaan.</p>
        </div>

        <div class="detail-card">
            <table class="detail-table">
                <tr>
                    <th>Judul</th>
                    <td>{{ $book['judul'] }}</td>
                </tr>
                <tr>
                    <th>Penulis</th>
                    <td>{{ $book['penulis'] }}</td>
                </tr>
                <tr>
                    <th>Penerbit</th>
                    <td>{{ $book['penerbit'] }}</td>
                </tr>
                <tr>
                    <th>Tahun Terbit</th>
                    <td>{{ $book['tahun_terbit'] }}</td>
                </tr>
                <tr>
                    <th>ISBN</th>
                    <td>{{ $book['isbn'] ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Stok</th>
                    <td>{{ $book['stok'] }}</td>
                </tr>
                <tr>
                    <th>Kategori</th>
                    <td>{{ $book['category']['nama_kategori'] }}</td>
                </tr>
            </table>

            <div class="form-actions">
                <a href="{{ route('books.index') }}" class="btn-secondary">Kembali ke Daftar Buku</a>
            </div>
        </div>
    </div>
@endsection