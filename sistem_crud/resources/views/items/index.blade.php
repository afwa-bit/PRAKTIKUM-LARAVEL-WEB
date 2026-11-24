@extends('layouts.app')

@section('content')
    @if (session('sukses'))
        <div class="mb-4 px-4 py-3 rounded-lg bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm">
            {{ session('sukses') }}
        </div>
    @endif

    <div class="bg-white rounded-xl border border-slate-200 shadow-xs overflow-hidden">
        <div class="px-6 py-4 border-b border-slate-200 flex items-center justify-between">
            <div>
                <h2 class="text-sm font-semibold text-slate-900">Daftar Data</h2>
                <p class="text-xs text-slate-500">Total {{ $items->count() }} data</p>
            </div>
            <a href="{{ route('items.create') }}" class="px-4 py-2 rounded-lg text-xs font-medium bg-indigo-600 text-white hover:bg-indigo-700">
                + Tambah Data
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-sm">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-200 text-xs font-semibold text-slate-600 uppercase">
                        <th class="px-6 py-3">#</th>
                        <th class="px-6 py-3">Nama</th>
                        <th class="px-6 py-3">Kategori</th>
                        <th class="px-6 py-3">Jumlah</th>
                        <th class="px-6 py-3">Catatan</th>
                        <th class="px-6 py-3 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200">
                    @forelse ($items as $index => $item)
                        <tr class="hover:bg-slate-50/70">
                            <td class="px-6 py-3.5 text-slate-500">{{ $index + 1 }}</td>
                            <td class="px-6 py-3.5 font-medium text-slate-900">{{ $item->nama }}</td>
                            <td class="px-6 py-3.5 text-slate-600">{{ $item->kategori }}</td>
                            <td class="px-6 py-3.5 text-slate-600">{{ $item->jumlah }}</td>
                            <td class="px-6 py-3.5 text-slate-500">{{ $item->catatan ?? '-' }}</td>
                            <td class="px-6 py-3.5 text-right space-x-2">
                                <a href="{{ route('items.edit', $item) }}" class="inline-block px-3 py-1 rounded-md text-xs font-medium bg-amber-50 text-amber-700 border border-amber-200 hover:bg-amber-100">
                                    Edit
                                </a>
                                <form action="{{ route('items.destroy', $item) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-3 py-1 rounded-md text-xs font-medium bg-rose-50 text-rose-700 border border-rose-200 hover:bg-rose-100">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-8 text-center text-sm text-slate-500">
                                Belum ada data. Klik <strong>+ Tambah Data</strong> untuk mengisi data pertama.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection