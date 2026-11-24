@extends('layouts.app')

@section('content')
    <div class="max-w-2xl bg-white rounded-xl border border-slate-200 p-6 shadow-xs">
        <form action="{{ route('items.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Nama</label>
                <input type="text" name="nama" value="{{ old('nama') }}" class="w-full rounded-lg border border-slate-300 px-3.5 py-2 text-sm focus:outline-none focus:border-indigo-500" required>
                @error('nama') <p class="text-xs text-rose-600 mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Kategori</label>
                <input type="text" name="kategori" value="{{ old('kategori') }}" class="w-full rounded-lg border border-slate-300 px-3.5 py-2 text-sm focus:outline-none focus:border-indigo-500" required>
                @error('kategori') <p class="text-xs text-rose-600 mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Jumlah</label>
                <input type="number" name="jumlah" value="{{ old('jumlah', 1) }}" min="0" class="w-full rounded-lg border border-slate-300 px-3.5 py-2 text-sm focus:outline-none focus:border-indigo-500" required>
                @error('jumlah') <p class="text-xs text-rose-600 mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-700 mb-1">Catatan (Opsional)</label>
                <textarea name="catatan" rows="3" class="w-full rounded-lg border border-slate-300 px-3.5 py-2 text-sm focus:outline-none focus:border-indigo-500">{{ old('catatan') }}</textarea>
                @error('catatan') <p class="text-xs text-rose-600 mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="pt-2 flex items-center gap-3">
                <button type="submit" class="px-4 py-2 rounded-lg text-xs font-medium bg-indigo-600 text-white hover:bg-indigo-700">
                    Simpan Data
                </button>
                <a href="{{ route('items.index') }}" class="px-4 py-2 rounded-lg text-xs font-medium bg-slate-100 text-slate-700 hover:bg-slate-200">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection