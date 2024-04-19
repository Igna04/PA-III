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

Route::get('/', function () {
    return view('layouts.dashboard');
});

Route::get('/home', function () {
    $response=Http::get('http://localhost:8070/api/data-tanaman');
    $blogs=$response->json()['data'];
    return view('layouts.crud.home', ['blogs' => $blogs]);
});

Route::post('/tambahtanaman', function(Request $request) {
    $response = Http::post('https://3981-2404-c0-5610-00-43a8-7dbe.ngrok-free.app/api/add-tanaman', [
        'data' => $request->all(),
    ]);

    if($response) {
        dd($response);
    } else {
        dd('igna');
    }

    // Periksa apakah respons tidak null sebelum mengakses elemen 'data'
    if ($response->json() !== null && array_key_exists('data', $response->json())) {
        $blogs = $response->json()['data'];
    } else {
        $errorMessage = $response->json()['message'] ?? 'Data tanaman belum tersedia';
        $blogs = []; // Atau definisikan nilai default sesuai kebutuhan
        session()->flash('error', $errorMessage);
    }

    return view('layouts.crud.home', ['blogs' => $blogs]);
});

Route::get('/bawang', function () {
    return view('layouts.tanaman.bawang');
});

Route::get('/jagung', function () {
    return view('layouts.tanaman.jagung');
});

Route::get('/kopi', function () {
    return view('layouts.tanaman.kopi');
});

Route::get('/padi', function () {
    return view('layouts.tanaman.padi');
});

Route::get('/add-tanaman', function() {
    return view('layouts.crud.create');
});

// Route::post('/tambahtanaman', 'BlogController@store')->name('tambah.tanaman');