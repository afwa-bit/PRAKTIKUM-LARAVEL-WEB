<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard — Sistem Auth</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen text-slate-800">
    <header class="bg-white border-b border-slate-200 px-6 py-4 flex items-center justify-between">
        <div>
            <h1 class="text-base font-semibold text-slate-900">Dashboard</h1>
            <p class="text-xs text-slate-500">Halaman terproteksi middleware auth</p>
        </div>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="px-4 py-2 rounded-lg text-xs font-medium bg-rose-50 text-rose-700 border border-rose-200 hover:bg-rose-100">
                Logout
            </button>
        </form>
    </header>

    <main class="max-w-3xl mx-auto p-6">
        @if (session('sukses'))
            <div class="mb-4 px-4 py-3 rounded-lg bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm">
                {{ session('sukses') }}
            </div>
        @endif

        <div class="bg-white rounded-xl border border-slate-200 p-6 shadow-xs">
            <h2 class="text-sm font-semibold text-slate-900 mb-1">Selamat datang, {{ auth()->user()->name }}!</h2>
            <p class="text-xs text-slate-500">Email terdaftar: {{ auth()->user()->email }}</p>
        </div>
    </main>
</body>
</html>