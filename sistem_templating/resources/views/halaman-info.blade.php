@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-xl border border-slate-200 p-6 shadow-xs">
        <div class="flex items-center justify-between border-b border-slate-100 pb-4 mb-4">
            <div>
                <h2 class="text-base font-semibold text-slate-900">{{ $judul }}</h2>
                <p class="text-xs text-slate-500 mt-0.5">{{ $subjudul }}</p>
            </div>
            <a href="/dashboard" class="px-3 py-1.5 rounded-lg text-xs font-medium bg-slate-100 text-slate-700 hover:bg-slate-200 transition">
                &larr; Kembali ke Dashboard
            </a>
        </div>

        <p class="text-sm text-slate-600">{{ $deskripsi }}</p>
    </div>
@endsection