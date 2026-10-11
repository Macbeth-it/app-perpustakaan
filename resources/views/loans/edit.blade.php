@extends('layouts.app')

@section('title', 'Edit Peminjaman')

@section('content')
    <div class="form-page">
        <div class="form-heading">
            <h1>Edit Peminjaman</h1>
            <p>Perbarui tanggal kembali atau status transaksi peminjaman.</p>
        </div>

        <form class="form-card" action="{{ route('loans.update', $loan['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="tanggal_pinjam" value="{{ $loan['tanggal_pinjam'] }}">

            <div class="form-grid">
                <div class="form-field form-field-full">
                    <label>Anggota</label>
                    <div class="readonly">{{ $loan['member']['nama'] }} ({{ $loan['member']['nim'] }})</div>
                </div>

                <div class="form-field form-field-full">
                    <label>Buku</label>
                    <div class="readonly">
                        @foreach ($loan['loanItems'] as $item)
                            {{ $item['book']['judul'] }}@if (!$loop->last), @endif
                        @endforeach
                    </div>
                </div>

                <div class="form-field">
                    <label for="tanggal_kembali">Tanggal Kembali</label>
                    <input class="form-control" type="date" name="tanggal_kembali" id="tanggal_kembali" value="{{ old('tanggal_kembali', $loan['tanggal_kembali']) }}">
                    @error('tanggal_kembali')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-field">
                    <label for="status">Status</label>
                    <select class="form-control" name="status" id="status">
                        <option value="dipinjam" @selected(old('status', $loan['status']) == 'dipinjam')>Dipinjam</option>
                        <option value="dikembalikan" @selected(old('status', $loan['status']) == 'dikembalikan')>Dikembalikan</option>
                        <option value="terlambat" @selected(old('status', $loan['status']) == 'terlambat')>Terlambat</option>
                    </select>
                    @error('status')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn">Perbarui Peminjaman</button>
                <a href="{{ route('loans.index') }}" class="btn-secondary">Batal</a>
            </div>
        </form>
    </div>
@endsection
