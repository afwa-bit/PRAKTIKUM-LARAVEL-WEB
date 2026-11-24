<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard', [
        'judul' => 'Dashboard Sistem Templating',
        'subjudul' => 'Tampilan terstruktur menggunakan Blade Layout & Tailwind CSS',
    ]);
});

Route::get('/manajemen-data', function () {
    return view('halaman-info', [
        'judul' => 'Manajemen Data',
        'subjudul' => 'Kelola data utama sistem',
        'menuAktif' => 'manajemen-data',
        'deskripsi' => 'Halaman ini disiapkan untuk pengelolaan data (CRUD pada bab berikutnya).',
    ]);
});

Route::get('/laporan', function () {
    return view('halaman-info', [
        'judul' => 'Laporan',
        'subjudul' => 'Ringkasan dan rekapitulasi sistem',
        'menuAktif' => 'laporan',
        'deskripsi' => 'Halaman ini menampilkan ringkasan dan laporan data.',
    ]);
});

Route::get('/pengaturan', function () {
    return view('halaman-info', [
        'judul' => 'Pengaturan',
        'subjudul' => 'Konfigurasi dasar aplikasi',
        'menuAktif' => 'pengaturan',
        'deskripsi' => 'Halaman ini digunakan untuk pengaturan preferensi sistem.',
    ]);
});