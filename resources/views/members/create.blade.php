@extends('layouts.app')

@section('title', 'Tambah Anggota')

@section('content')
    <div class="form-page">
        <div class="form-heading">
            <h1>Tambah Anggota</h1>
            <p>Isi informasi anggota untuk mendaftarkannya ke perpustakaan.</p>
        </div>

        <form class="form-card" action="{{ route('members.store') }}" method="POST">
            @csrf

            <div class="form-grid">
                <div class="form-field">
                    <label for="nama">Nama Lengkap</label>
                    <input class="form-control" type="text" name="nama" id="nama" value="{{ old('nama') }}">
                    @error('nama')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-field">
                    <label for="nim">NIM</label>
                    <input class="form-control" type="text" name="nim" id="nim" value="{{ old('nim') }}">
                    @error('nim')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-field">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}">
                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-field">
                    <label for="nomor_telepon">Nomor Telepon</label>
                    <input class="form-control" type="text" name="nomor_telepon" id="nomor_telepon" value="{{ old('nomor_telepon') }}">
                    @error('nomor_telepon')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-field form-field-full">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" rows="4">{{ old('alamat') }}</textarea>
                    @error('alamat')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-field">
                    <label for="status">Status</label>
                    <select class="form-control" name="status" id="status">
                        <option value="aktif" @selected(old('status') == 'aktif')>Aktif</option>
                        <option value="nonaktif" @selected(old('status') == 'nonaktif')>Nonaktif</option>
                    </select>
                    @error('status')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn">Simpan Anggota</button>
                <a href="{{ route('members.index') }}" class="btn-secondary">Batal</a>
            </div>
        </form>
    </div>
@endsection