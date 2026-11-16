<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Luas Segitiga</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; font-family: 'Plus Jakarta Sans', sans-serif; }
        body { background: #f8fafc; color: #0f172a; display: flex; flex-direction: column; align-items: center; justify-content: center; min-height: 100vh; margin: 0; padding: 20px; }
        .nav { margin-bottom: 20px; display: flex; gap: 10px; }
        .nav a { text-decoration: none; padding: 8px 16px; border-radius: 8px; font-weight: 600; font-size: 14px; background: #e2e8f0; color: #475569; }
        .nav a.active { background: #4f46e5; color: white; }
        .card { background: white; padding: 30px; border-radius: 16px; box-shadow: 0 10px 25px rgba(0,0,0,0.05); width: 100%; max-width: 450px; border: 1px solid #e2e8f0; }
        h2 { margin-top: 0; color: #1e293b; font-size: 20px; margin-bottom: 20px; text-align: center; }
        .form-group { margin-bottom: 15px; }
        label { display: block; font-weight: 600; font-size: 13px; margin-bottom: 6px; color: #334155; }
        input { width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 14px; outline: none; }
        input:focus { border-color: #4f46e5; box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1); }
        button { width: 100%; padding: 12px; background: #4f46e5; color: white; border: none; border-radius: 8px; font-weight: 700; cursor: pointer; font-size: 15px; margin-top: 5px; }
        button:hover { background: #4338ca; }
        .result { margin-top: 20px; background: #ecfdf5; border: 1px solid #a7f3d0; padding: 15px; border-radius: 8px; color: #065f46; text-align: center; font-weight: 600; }
        .error-list { background: #fef2f2; border: 1px solid #fecaca; color: #b91c1c; padding: 10px; border-radius: 8px; margin-bottom: 15px; font-size: 13px; }
    </style>
</head>
<body>

    <div class="nav">
        <a href="{{ url('/daftar/mahasiswa') }}">Daftar Mahasiswa</a>
        <a href="{{ url('/kalkulator/segitiga') }}" class="active">Kalkulator Segitiga</a>
    </div>

    <div class="card">
        <h2>Kalkulator Luas Segitiga</h2>

        @if ($errors->any())
            <div class="error-list">
                <ul style="margin: 0; padding-left: 15px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('/kalkulator/segitiga') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Panjang Alas (cm)</label>
                <input type="number" step="any" name="alas" placeholder="Masukkan alas" value="{{ isset($alas) ? $alas : old('alas') }}" required>
            </div>

            <div class="form-group">
                <label>Tinggi Segitiga (cm)</label>
                <input type="number" step="any" name="tinggi" placeholder="Masukkan tinggi" value="{{ isset($tinggi) ? $tinggi : old('tinggi') }}" required>
            </div>

            <button type="submit">Hitung Luas</button>
        </form>

        @isset($luas)
            <div class="result">
                Luas Segitiga: {{ $luas }} cm² <br>
                <span style="font-size: 12px; font-weight: normal; color: #047857;">(Rumus: ½ × {{ $alas }} × {{ $tinggi }})</span>
            </div>
        @endisset
    </div>

</body>
</html>