@extends('layouts.app')

@section('title', 'Detail Peminjaman')

@section('content')
    <div class="detail-page">
        <div class="detail-heading">
            <h1>Detail Peminjaman</h1>
            <p>Informasi transaksi dan buku yang dipinjam.</p>
        </div>

        <div class="detail-card">
            <table class="detail-table">
                <tr>
                    <th>Anggota</th>
                    <td>{{ $loan['member']['nama'] }} ({{ $loan['member']['nim'] }})</td>
                </tr>
                <tr>
                    <th>Petugas</th>
                    <td>{{ $loan['user']['name'] }}</td>
                </tr>
                <tr>
                    <th>Tanggal Pinjam</th>
                    <td>{{ $loan['tanggal_pinjam'] }}</td>
                </tr>
                <tr>
                    <th>Tanggal Kembali</th>
                    <td>{{ $loan['tanggal_kembali'] }}</td>
                </tr>
                <tr>
                    <th>Tanggal Dikembalikan</th>
                    <td>{{ $loan['tanggal_pengembalian'] ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td><span class="badge badge-{{ $loan['status'] }}">{{ ucfirst($loan['status']) }}</span></td>
                </tr>
            </table>

            <h2 class="detail-section-title">Buku yang Dipinjam</h2>
            <table>
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Penulis</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($loan['loanItems'] as $item)
                        <tr>
                            <td>{{ $item['book']['judul'] }}</td>
                            <td>{{ $item['book']['penulis'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="form-actions">
                <a href="{{ route('loans.index') }}" class="btn-secondary">Kembali ke Daftar Peminjaman</a>
            </div>
        </div>
    </div>
@endsection
