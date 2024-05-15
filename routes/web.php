<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Admin
// Pengawasan
Route::get('/pengawasan-ami', function () {
    return view('pengawasan.proses_ami');
});

Route::get('/foto-kegiatan', function () {
    return view('pengawasan.foto_kegiatan');
});

// AMI
Route::get('/ami/ami', function () {
    return view('ami.ami');
});
Route::get('/ami/standar', function () {
    return view('ami.standar');
});
Route::get('/ami/kts', function () {
    return view('ami.kts');
});
Route::get('/ami/siklus', function () {
    return view('ami.siklus');
});

//Files
Route::get('/files/auditor', function () {
    return view('files.auditor');
});
Route::get('/files/prodi', function () {
    return view('files.prodi');
});
