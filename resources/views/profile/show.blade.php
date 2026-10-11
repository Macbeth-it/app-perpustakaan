@extends('layouts.app')

@section('title', 'Profil')

@section('content')
    <div class="detail-page">
        <div class="detail-heading">
            <h1>Profil Petugas</h1>
            <p>Informasi akun yang sedang digunakan.</p>
        </div>

        <div class="detail-card">
            <table class="detail-table">
                <tr>
                    <th>Nama</th>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <th>Role</th>
                    <td>{{ ucfirst($user->role) }}</td>
                </tr>
            </table>
        </div>

        <h2 class="detail-section-title">Ganti Password</h2>
        <form class="form-card" action="{{ route('profile.password.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-grid">
                <div class="form-field form-field-full">
                    <label for="current_password">Password Lama</label>
                    <input class="form-control" type="password" name="current_password" id="current_password" autocomplete="current-password">
                    @error('current_password')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-field">
                    <label for="password">Password Baru</label>
                    <input class="form-control" type="password" name="password" id="password" autocomplete="new-password">
                    @error('password')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-field">
                    <label for="password_confirmation">Konfirmasi Password Baru</label>
                    <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" autocomplete="new-password">
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn">Simpan Password Baru</button>
            </div>
        </form>
    </div>
@endsection
