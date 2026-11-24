<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $judul ?? 'Dashboard' }} — Sistem Templating</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 text-slate-800 antialiased">
    @php $aktif = $menuAktif ?? 'dashboard'; @endphp
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-slate-900 text-slate-200 hidden md:flex flex-col justify-between">
            <div>
                <div class="px-6 py-5 border-b border-slate-800 flex items-center gap-3">
                    <div class="h-9 w-9 rounded-lg bg-indigo-600 flex items-center justify-center font-bold text-white">
                        ST
                    </div>
                    <div>
                        <p class="font-semibold text-white text-sm tracking-wide">Sistem Templating</p>
                        <p class="text-xs text-slate-400">Laravel Workspace</p>
                    </div>
                </div>

                <nav class="px-4 py-5 space-y-1 text-sm">
                    <a href="/dashboard" class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition {{ $aktif === 'dashboard' ? 'bg-indigo-600 text-white font-medium' : 'text-slate-300 hover:bg-slate-800 hover:text-white' }}">
                        <span>Dashboard</span>
                    </a>
                    <a href="/manajemen-data" class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition {{ $aktif === 'manajemen-data' ? 'bg-indigo-600 text-white font-medium' : 'text-slate-300 hover:bg-slate-800 hover:text-white' }}">
                        <span>Manajemen Data</span>
                    </a>
                    <a href="/laporan" class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition {{ $aktif === 'laporan' ? 'bg-indigo-600 text-white font-medium' : 'text-slate-300 hover:bg-slate-800 hover:text-white' }}">
                        <span>Laporan</span>
                    </a>
                    <a href="/pengaturan" class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition {{ $aktif === 'pengaturan' ? 'bg-indigo-600 text-white font-medium' : 'text-slate-300 hover:bg-slate-800 hover:text-white' }}">
                        <span>Pengaturan</span>
                    </a>
                </nav>
            </div>

            <div class="p-4 border-t border-slate-800 text-xs text-slate-400">
                <p class="font-medium text-slate-300">Mode Praktikum</p>
                <p class="mt-0.5">Blade Layout &amp; Section</p>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col min-w-0">
            <!-- Topbar -->
            <header class="bg-white border-b border-slate-200 px-6 py-4 flex items-center justify-between">
                <div>
                    <h1 class="text-lg font-semibold text-slate-900">{{ $judul ?? 'Dashboard Utama' }}</h1>
                    <p class="text-xs text-slate-500">{{ $subjudul ?? 'Ringkasan sistem dan struktur halaman terpadu' }}</p>
                </div>
                <div class="flex items-center gap-3">
                    <span class="hidden sm:inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-emerald-50 text-emerald-700 border border-emerald-200">
                        Aktif
                    </span>
                    <div class="h-9 w-9 rounded-full bg-slate-900 text-white text-xs font-semibold flex items-center justify-center">
                        AC
                    </div>
                </div>
            </header>

            <!-- Page Body -->
            <main class="flex-1 p-6">
                @yield('content')
            </main>

            <!-- Footer -->
            <footer class="bg-white border-t border-slate-200 px-6 py-3.5 text-xs text-slate-500 flex flex-col sm:flex-row items-center justify-between gap-2">
                <span>&copy; {{ date('Y') }} Sistem Templating Laravel</span>
                <span>Dibangun dengan Blade &amp; Tailwind CSS</span>
            </footer>
        </div>
    </div>
</body>
</html>