<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Perpustakaan Digital Kampus')</title>
    <style>
        * { box-sizing: border-box; }
        body { font-family: sans-serif; margin: 0; color: #1f2937; }
        nav { background: #1e3a8a; padding: 14px 40px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; }
        nav .brand { color: #fff; font-weight: bold; font-size: 18px; }
        nav ul { list-style: none; display: flex; gap: 20px; margin: 0; padding: 0; }
        nav ul li a { color: #cbd5e1; text-decoration: none; padding: 6px 4px; }
        nav ul li a.active { color: #fff; font-weight: bold; border-bottom: 2px solid #fff; }
        nav .navbar-user { display: flex; align-items: center; gap: 12px; color: #cbd5e1; font-size: 14px; }
        nav .btn-logout { background: none; border: 1px solid #cbd5e1; color: #cbd5e1; padding: 4px 10px; border-radius: 4px; cursor: pointer; font-size: 14px; }
        nav .btn-logout:hover { background: #1e40af; color: #fff; }
        main { max-width: 900px; margin: 0 auto; padding: 30px 40px; }
        table { border-collapse: collapse; width: 100%; margin-top: 16px; }
        th, td { border: 1px solid #ccc; padding: 8px 12px; text-align: left; }
        .alert-success { background: #d1fae5; color: #065f46; padding: 10px 14px; border-radius: 4px; margin-bottom: 16px; }
        .badge { display: inline-block; padding: 4px 8px; border-radius: 9999px; font-size: 12px; font-weight: bold; }
        .badge-dikembalikan { background: #d1fae5; color: #065f46; }
        .badge-dipinjam { background: #fef3c7; color: #92400e; }
        .badge-terlambat { background: #fee2e2; color: #991b1b; }
        .btn { display: inline-block; padding: 6px 14px; background: #2563eb; color: #fff; text-decoration: none; border-radius: 4px; border: none; cursor: pointer; }
        .form-page { max-width: 720px; margin: 0 auto; }
        .form-heading { margin-bottom: 20px; }
        .form-heading h1 { margin-bottom: 8px; }
        .form-heading p { margin: 0; color: #6b7280; }
        .form-card { padding: 24px; background: #fff; border: 1px solid #e5e7eb; border-radius: 10px; box-shadow: 0 4px 14px rgb(15 23 42 / 6%); }
        .form-grid { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 18px 20px; }
        .form-field { min-width: 0; }
        .form-field-full { grid-column: 1 / -1; }
        .form-field label { display: block; margin-bottom: 6px; font-weight: 600; }
        .form-control { display: block; width: 100%; padding: 10px 12px; border: 1px solid #cbd5e1; border-radius: 6px; background: #fff; color: #1f2937; font: inherit; }
        .form-control:focus { outline: 2px solid #93c5fd; border-color: #2563eb; }
        .checkbox-list { display: grid; gap: 8px; max-height: 220px; overflow-y: auto; padding: 12px; border: 1px solid #cbd5e1; border-radius: 6px; }
        .checkbox-list label { display: flex; align-items: center; gap: 10px; margin: 0; font-weight: normal; cursor: pointer; }
        .checkbox-list input { width: 16px; height: 16px; margin: 0; accent-color: #2563eb; }
        textarea.form-control { resize: vertical; }
        .form-help { margin: 6px 0 0; color: #6b7280; font-size: 13px; }
        .error { margin-top: 6px; color: #b91c1c; font-size: 14px; }
        .form-actions { display: flex; gap: 10px; margin-top: 24px; }
        .btn-secondary { display: inline-block; padding: 8px 14px; border: 1px solid #cbd5e1; border-radius: 6px; color: #374151; text-decoration: none; }
        .detail-page { max-width: 760px; margin: 0 auto; }
        .detail-heading { margin-bottom: 20px; }
        .detail-heading h1 { margin-bottom: 8px; }
        .detail-heading p { margin: 0; color: #6b7280; }
        .detail-card { padding: 24px; background: #fff; border: 1px solid #e5e7eb; border-radius: 10px; box-shadow: 0 4px 14px rgb(15 23 42 / 6%); }
        .detail-table { margin-top: 0; }
        .detail-table th { width: 190px; background: #f8fafc; }
        .detail-section-title { margin: 24px 0 12px; }
        .readonly { padding: 10px 12px; border: 1px solid #e5e7eb; border-radius: 6px; background: #f8fafc; }
        form.inline { display: inline; }
        footer { text-align: center; padding: 20px; color: #6b7280; font-size: 14px; border-top: 1px solid #e5e7eb; margin-top: 40px; }
        @media (max-width: 600px) {
            main { padding: 24px 16px; }
            .form-grid { grid-template-columns: 1fr; }
            .form-field-full { grid-column: auto; }
            .form-card { padding: 18px; }
        }
    </style>
</head>    
<body>
    @include('partials.navbar')

    <main>
        @include('partials.alert')

        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} Sistem Perpustakaan
    </footer>
</body>
</html>