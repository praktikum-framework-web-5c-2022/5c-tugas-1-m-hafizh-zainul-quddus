<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $dsn = [
        'Sayuti S.kom',
        'Siti maimunah S.kom',
        'Soetah Mahmud S.kom, m.kom',
        'Raden Pangestu Maulad S.kom, m.kom',
        'Jojo Kurniawan S.kom, m.kom',
        'Julaiha Maulya S.kom, m.kom',
        'Lesti',
        'Sultan Junaidi S.pd, m.kom',
        'Ucup Kinandar S.kom, m.kom',
        'Adam Lestaluhu S.kom, m.pd',

    ];
    return view('dosen')->with('dosen', $dsn);
});

Route::get('/matkul', function () {
    $mk = [
        'Framework web',
        'PBM',
        'Data Mining',
        'Basis Data',
        'Cloud Computing',
        'Blockchain',
        'Etika Pemrograman',
        'Kalkulus',
        'Bahasa Inggris',
        'Pancasila',

    ];
    return view('matkul')->with('matkul', $mk);
});

Route::get('/mahasiswa', function () {
    $mhs = [
        'M Hafizh Zainulquddus',
        'Ibnu Topan',
        'Hagi Azzam',
        'Harvian Arga',
        'Ilhan Firaldi',
        'gilang Maulana',
        'Hanna Athaya',
        'Frise Anesha',
        'Fanny Suyanto',
        'Lily',

    ];
    return view('mahasiswa')->with('mahasiswa', $mhs);
});
