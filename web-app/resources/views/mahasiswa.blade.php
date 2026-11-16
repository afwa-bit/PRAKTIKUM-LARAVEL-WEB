<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa — Portal Akademik</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4f46e5;
            --primary-light: #eef2ff;
            --text-main: #0f172a;
            --text-muted: #64748b;
            --bg-body: #f8fafc;
            --surface: #ffffff;
            --border: #e2e8f0;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            background: radial-gradient(circle at top left, #e0e7ff 0%, #f8fafc 45%, #f1f5f9 100%);
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
        }

        /* Navbar Navigasi */
        .navbar {
            width: 100%;
            max-width: 760px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            padding: 12px 20px;
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.9);
            box-shadow: 0 4px 20px -2px rgba(15, 23, 42, 0.05);
            margin-bottom: 28px;
        }

        .brand {
            font-weight: 800;
            font-size: 16px;
            color: var(--primary);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav-links {
            display: flex;
            gap: 8px;
        }

        .nav-btn {
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            padding: 8px 14px;
            border-radius: 10px;
            transition: all 0.2s ease;
            color: var(--text-muted);
        }

        .nav-btn.active {
            background: var(--primary);
            color: #ffffff;
            box-shadow: 0 4px 12px rgba(79, 70, 229, 0.25);
        }

        .nav-btn:not(.active):hover {
            background: #f1f5f9;
            color: var(--text-main);
        }

        /* Card Utama */
        .card {
            width: 100%;
            max-width: 760px;
            background: var(--surface);
            border-radius: 24px;
            border: 1px solid var(--border);
            box-shadow: 0 20px 40px -15px rgba(15, 23, 42, 0.08);
            overflow: hidden;
        }

        .card-header {
            padding: 28px 32px;
            border-bottom: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 16px;
        }

        .title-group h1 {
            font-size: 22px;
            font-weight: 800;
            letter-spacing: -0.02em;
            color: var(--text-main);
        }

        .title-group p {
            font-size: 14px;
            color: var(--text-muted);
            margin-top: 4px;
        }

        .stat-pill {
            background: var(--primary-light);
            color: var(--primary);
            padding: 8px 16px;
            border-radius: 99px;
            font-size: 13px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* Tabel Modern */
        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #f8fafc;
            color: var(--text-muted);
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            padding: 14px 32px;
            text-align: left;
            border-bottom: 1px solid var(--border);
        }

        td {
            padding: 18px 32px;
            border-bottom: 1px solid #f1f5f9;
            font-size: 14px;
            vertical-align: middle;
        }

        tbody tr {
            transition: background-color 0.2s ease;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        tbody tr:hover {
            background-color: #f8fafc;
        }

        .student-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .avatar {
            width: 38px;
            height: 38px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 15px;
            color: white;
        }

        .avatar-l {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
        }

        .avatar-p {
            background: linear-gradient(135deg, #ec4899, #be185d);
        }

        .student-name {
            font-weight: 700;
            color: var(--text-main);
        }

        .city-tag {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: #475569;
            font-weight: 500;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 12px;
            border-radius: 99px;
            font-size: 12px;
            font-weight: 700;
        }

        .badge-l {
            background: #eff6ff;
            color: #1d4ed8;
            border: 1px solid #dbeafe;
        }

        .badge-p {
            background: #fdf2f8;
            color: #be185d;
            border: 1px solid #fce7f3;
        }

        .dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
        }

        .badge-l .dot { background: #2563eb; }
        .badge-p .dot { background: #db2777; }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="brand">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                <polyline points="2 17 12 22 22 17"></polyline>
                <polyline points="2 12 12 17 22 12"></polyline>
            </svg>
            Laravel Praktikum
        </div>
        <div class="nav-links">
            <a href="{{ url('/daftar/mahasiswa') }}" class="nav-btn active">Daftar Mahasiswa</a>
            <a href="{{ url('/kalkulator/segitiga') }}" class="nav-btn">Kalkulator Segitiga</a>
        </div>
    </nav>

    <div class="card">
        <div class="card-header">
            <div class="title-group">
                <h1>Daftar Mahasiswa Aktif</h1>
                <p>Data direktori mahasiswa hasil parsing dari MahasiswaController</p>
            </div>
            <div class="stat-pill">
                <span>Total: {{ count($mahasiswa) }} Mahasiswa</span>
            </div>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th style="width: 70px;">No</th>
                        <th>Nama Mahasiswa</th>
                        <th>Kota Asal</th>
                        <th>Gender</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $index =>$mhs)
                        <tr>
                            <td style="color: var(--text-muted); font-weight: 600;">
                                0{{ $index + 1 }}
                            </td>
                            <td>
                                <div class="student-info">
                                    <div class="avatar {{ $mhs['gender'] == 'L' ? 'avatar-l' : 'avatar-p' }}">
                                        {{ substr($mhs['nama'], 0, 1) }}
                                    </div>
                                    <span class="student-name">{{ $mhs['nama'] }}</span>
                                </div>
                            </td>
                            <td>
                                <span class="city-tag">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                    {{ $mhs['alamat'] }}
                                </span>
                            </td>
                            <td>
                                <span class="badge {{ $mhs['gender'] == 'L' ? 'badge-l' : 'badge-p' }}">
                                    <span class="dot"></span>
                                    {{ $mhs['gender'] == 'L' ? 'Laki-laki (L)' : 'Perempuan (P)' }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>