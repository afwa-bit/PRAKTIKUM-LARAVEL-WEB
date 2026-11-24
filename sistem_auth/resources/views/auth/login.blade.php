<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Sistem Auth</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen flex items-center justify-center p-4 text-slate-800">
    <div class="w-full max-w-md bg-white rounded-xl border border-slate-200 p-6 shadow-xs">
        <h1 class="text-lg font-semibold text-slate-900">Masuk ke Akun</h1>
        <p class="text-xs text-slate-500 mb-5">Silakan masukkan email dan password Anda.</p>

        @if (session('sukses'))
            <div class="mb-4 px-3.5 py-2.5 rounded-lg bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs">
                {{ session('sukses') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-4 px-3.5 py-2.5 rounded-lg bg-rose-50 border border-rose-200 text-rose-700 text-xs">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ url('/login') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="w-full rounded-lg border border-slate-300 px-3.5 py-2 text-sm focus:outline-none focus:border-indigo-500" required autofocus>
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Password</label>
                <input type="password" name="password" class="w-full rounded-lg border border-slate-300 px-3.5 py-2 text-sm focus:outline-none focus:border-indigo-500" required>
            </div>

            <div class="flex items-center justify-between text-xs">
                <label class="inline-flex items-center gap-2 text-slate-600">
                    <input type="checkbox" name="remember" class="rounded border-slate-300">
                    Ingat saya
                </label>
                <a href="{{ route('register') }}" class="text-indigo-600 font-medium hover:underline">
                    Daftar akun baru
                </a>
            </div>

            <button type="submit" class="w-full py-2.5 rounded-lg text-xs font-medium bg-indigo-600 text-white hover:bg-indigo-700">
                Login
            </button>
        </form>
    </div>
</body>
</html>