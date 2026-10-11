@extends('layouts.app')

@section('title', 'Tambah Peminjaman')

@section('content')
    <div class="form-page">
        <div class="form-heading">
            <h1>Tambah Peminjaman</h1>
            <p>Isi informasi anggota dan buku yang akan dipinjam.</p>
        </div>

        <form class="form-card" action="{{ route('loans.store') }}" method="POST">
            @csrf

            <div class="form-grid">
                <div class="form-field">
                    <label for="member_id">Anggota</label>
                    <select class="form-control" name="member_id" id="member_id">
                        <option value="">-- Pilih Anggota --</option>
                        @foreach ($members as $member)
                            <option value="{{ $member['id'] }}" @selected(old('member_id') == $member['id'])>
                                {{ $member['nama'] }} ({{ $member['nim'] }})
                            </option>
                        @endforeach
                    </select>
                    @error('member_id')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-field">
                    <label>Petugas</label>
                    <div class="readonly">{{ auth()->user()->name }} (otomatis dari akun yang login)</div>
                </div>

                <div class="form-field">
                    <label for="tanggal_pinjam">Tanggal Pinjam</label>
                    <input class="form-control" type="date" name="tanggal_pinjam" id="tanggal_pinjam" value="{{ old('tanggal_pinjam') }}">
                    @error('tanggal_pinjam')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-field">
                    <label for="tanggal_kembali">Tanggal Kembali</label>
                    <input class="form-control" type="date" name="tanggal_kembali" id="tanggal_kembali" value="{{ old('tanggal_kembali') }}">
                    @error('tanggal_kembali')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-field form-field-full">
                    <label>Buku yang Dipinjam</label>
                    <div class="checkbox-list">
                        @forelse ($books as $book)
                            <label>
                                <input type="checkbox" name="book_ids[]" value="{{ $book['id'] }}"
                                    @checked(in_array($book['id'], old('book_ids', [])))>
                                <span>{{ $book['judul'] }} <span class="form-help">(stok: {{ $book['stok'] }})</span></span>
                            </label>
                        @empty
                            <p>Belum ada data buku.</p>
                        @endforelse
                    </div>
                    @error('book_ids')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn">Simpan Peminjaman</button>
                <a href="{{ route('loans.index') }}" class="btn-secondary">Batal</a>
            </div>
        </form>
    </div>
@endsection
