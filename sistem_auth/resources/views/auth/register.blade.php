<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register — Sistem Auth</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen flex items-center justify-center p-4 text-slate-800">
    <div class="w-full max-w-md bg-white rounded-xl border border-slate-200 p-6 shadow-xs">
        <h1 class="text-lg font-semibold text-slate-900">Buat Akun Baru</h1>
        <p class="text-xs text-slate-500 mb-5">Isi data di bawah untuk mendaftar.</p>

        @if ($errors->any())
            <div class="mb-4 px-3.5 py-2.5 rounded-lg bg-rose-50 border border-rose-200 text-rose-700 text-xs">
                <ul class="list-disc list-inside space-y-0.5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('/register') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Nama Lengkap</label>
                <input type="text" name="name" value="{{ old('name') }}" class="w-full rounded-lg border border-slate-300 px-3.5 py-2 text-sm focus:outline-none focus:border-indigo-500" required autofocus>
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="w-full rounded-lg border border-slate-300 px-3.5 py-2 text-sm focus:outline-none focus:border-indigo-500" required>
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Password (minimal 6 karakter)</label>
                <input type="password" name="password" class="w-full rounded-lg border border-slate-300 px-3.5 py-2 text-sm focus:outline-none focus:border-indigo-500" required>
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="w-full rounded-lg border border-slate-300 px-3.5 py-2 text-sm focus:outline-none focus:border-indigo-500" required>
            </div>

            <button type="submit" class="w-full py-2.5 rounded-lg text-xs font-medium bg-indigo-600 text-white hover:bg-indigo-700">
                Daftar
            </button>

            <p class="text-center text-xs text-slate-600">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="text-indigo-600 font-medium hover:underline">Login di sini</a>
            </p>
        </form>
    </div>
</body>
</html>