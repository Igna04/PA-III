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
    $title = $request->title;
    $content = $request->content;
    $image = $request->image;

    $response = Http::attach('image', file_get_contents($image), $image->getClientOriginalName())
            ->post('https://be7a-34-128-109-173.ngrok-free.app/api/add-tanaman', [
                'title' => $title,
                'content' => $content
            ]);
    if($response->successful()) {
        return redirect('/home');
    }
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