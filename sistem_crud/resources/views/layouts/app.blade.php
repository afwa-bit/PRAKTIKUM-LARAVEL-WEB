<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $judul ?? 'Sistem CRUD' }} — Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 text-slate-800 antialiased">
    <div class="min-h-screen flex">
        <aside class="w-60 bg-slate-900 text-slate-200 hidden md:flex flex-col">
            <div class="px-5 py-5 border-b border-slate-800">
                <p class="font-semibold text-white text-sm">Sistem CRUD</p>
                <p class="text-xs text-slate-400">Laravel Project</p>
            </div>
            <nav class="p-4 space-y-1 text-sm">
                <a href="{{ route('items.index') }}" class="block px-3 py-2 rounded-lg bg-indigo-600 text-white font-medium">
                    Data Items
                </a>
                <a href="{{ route('items.create') }}" class="block px-3 py-2 rounded-lg text-slate-300 hover:bg-slate-800 hover:text-white">
                    + Tambah Data
                </a>
            </nav>
        </aside>

        <div class="flex-1 flex flex-col min-w-0">
            <header class="bg-white border-b border-slate-200 px-6 py-4">
                <h1 class="text-lg font-semibold text-slate-900">{{ $judul ?? 'Manajemen Data' }}</h1>
                <p class="text-xs text-slate-500">{{ $subjudul ?? '' }}</p>
            </header>

            <main class="flex-1 p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>