<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facedes\Sessions;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Halaman Utama
Route::get('/', function () {
    return view('layouts.dashboard');
});

// Halaman Home dengan Daftar Tanaman
Route::get('/home', function () {
    $response = Http::get('http://localhost:8070/api/data-tanaman');
    $blogs = $response->json()['data'];
    return view('layouts.crud.home', compact('blogs'));
});

// Form Tambah Tanaman
Route::get('/add-tanaman', function() {
    return view('layouts.crud.create');
});

Route::get('/edit-tanaman/{id}', function() {
    return view('layouts.crud.edit');
});

// Simpan Edit Tanaman
Route::post('/edit-tanaman', function(Request $request, $id) {
    $response = Http::post('http://localhost:8070/api/edit-tanaman/$id', $request->all());
    if ($response->successful()) {
        return redirect('/home');
    }
});


// Proses Tambah Tanaman
Route::post('/tambahtanaman', function(Request $request) {
    $title = $request->title;
    $content = $request->content;
    $image = $request->image;

    $response = Http::attach('image', file_get_contents($image), $image->getClientOriginalName())
            ->post('http://localhost:8070/api/add-tanaman', [
                'title' => $title,
                'content' => $content
            ]);
    if($response->successful()) {
        return redirect('/home');
    }
});


// Proses Hapus Tanaman
Route::delete('/delete-tanaman', function($id) {
    $response = Http::delete("http://localhost:8070/api/hapus-tanaman/$id");
    if ($response->successful()) {
        return redirect('/home');
    }
});

// Halaman Detail Tanaman Bawang
Route::get('/bawang', function () {
    return view('layouts.tanaman.bawang');
});

// Halaman Detail Tanaman Jagung
Route::get('/jagung', function () {
    return view('layouts.tanaman.jagung');
});

// Halaman Detail Tanaman Kopi
Route::get('/kopi', function () {
    return view('layouts.tanaman.kopi');
});

// Halaman Detail Tanaman Padi
Route::get('/padi', function () {
    return view('layouts.tanaman.padi');
});
