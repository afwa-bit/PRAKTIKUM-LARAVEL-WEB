@extends('layouts.app')

@section('content')
    <!-- Stat Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5 mb-6">
        <div class="bg-white rounded-xl border border-slate-200 p-5 shadow-xs">
            <p class="text-xs font-medium text-slate-500 uppercase tracking-wider">Total Modul</p>
            <p class="mt-2 text-2xl font-bold text-slate-900">4 Bab</p>
            <p class="mt-1 text-xs text-emerald-600 font-medium">Templating siap digunakan</p>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-5 shadow-xs">
            <p class="text-xs font-medium text-slate-500 uppercase tracking-wider">Layout Utama</p>
            <p class="mt-2 text-2xl font-bold text-slate-900">1 Master</p>
            <p class="mt-1 text-xs text-slate-500">Sidebar, Header &amp; Footer</p>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-5 shadow-xs">
            <p class="text-xs font-medium text-slate-500 uppercase tracking-wider">Komponen UI</p>
            <p class="mt-2 text-2xl font-bold text-slate-900">Responsive</p>
            <p class="mt-1 text-xs text-indigo-600 font-medium">Desktop &amp; mobile ready</p>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-5 shadow-xs">
            <p class="text-xs font-medium text-slate-500 uppercase tracking-wider">Status Route</p>
            <p class="mt-2 text-2xl font-bold text-slate-900">200 OK</p>
            <p class="mt-1 text-xs text-emerald-600 font-medium">Terhubung ke view Blade</p>
        </div>
    </div>

    <!-- Table Section -->
    <div class="bg-white rounded-xl border border-slate-200 shadow-xs overflow-hidden">
        <div class="px-6 py-4 border-b border-slate-200 flex items-center justify-between">
            <div>
                <h2 class="text-sm font-semibold text-slate-900">Daftar Tahapan Pengembangan</h2>
                <p class="text-xs text-slate-500">Struktur progres aplikasi berbasis Laravel</p>
            </div>
            <span class="px-3 py-1 rounded-md text-xs font-medium bg-indigo-50 text-indigo-700">
                {{ $judul ?? 'Dashboard' }}
            </span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-sm">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-200 text-xs font-semibold text-slate-600 uppercase">
                        <th class="px-6 py-3">Tahap</th>
                        <th class="px-6 py-3">Fitur Utama</th>
                        <th class="px-6 py-3">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200">
                    <tr class="hover:bg-slate-50/70">
                        <td class="px-6 py-3.5 font-medium text-slate-900">Bab 1</td>
                        <td class="px-6 py-3.5 text-slate-600">Sistem Templating Blade (`@@extends`, `@@section`, `@@yield`)</td>
                        <td class="px-6 py-3.5">
                            <span class="inline-flex px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">
                                Selesai
                            </span>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50/70">
                        <td class="px-6 py-3.5 font-medium text-slate-900">Bab 2</td>
                        <td class="px-6 py-3.5 text-slate-600">CRUD Data &amp; Controller</td>
                        <td class="px-6 py-3.5">
                            <span class="inline-flex px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-700">
                                Berikutnya
                            </span>
                        </td>
                    </tr>
                    <tr class="hover:bg-slate-50/70">
                        <td class="px-6 py-3.5 font-medium text-slate-900">Bab 3 &amp; 4</td>
                        <td class="px-6 py-3.5 text-slate-600">Migration / Seeder &amp; Autentikasi</td>
                        <td class="px-6 py-3.5">
                            <span class="inline-flex px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-700">
                                Terjadwal
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection