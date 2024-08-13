<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CRUDController;
use App\Http\Controllers\PageControllerSatu;
use App\Http\Controllers\PengajarController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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

Route::get('/hellow', [
    WelcomeController::class,
    'greeting'
]);
Route::get('/greeting', [
    WelcomeController::class,
    'greeting'
]);
Route::get('/selamat', function () {
    return view('hello', ['name' => 'nasya']);
});
Route::get('/', function () {
    return view('welcome');
});
Route::resource('photos', PhotoController::class)->only([
    'index',
    'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create',
    'store',
    'update',
    'destroy'
]);
Route::resource('crud', CRUDController::class);
Route::get('pasar-buah', [PageControllerSatu::class, 'satu']);
Route::get('/daftar-dosen', [PengajarController::class, 'daftarPengajar']);
Route::get('/tabel-pengajar', [PengajarController::class, 'tabelPengajar']);
Route::get('/blog-pengajar', [PengajarController::class, 'blogPengajar']);

Route::get('/hello', function () {
    return 'hello VSGA';
});
Route::get('/word', function () {
    return 'hello Dunia';
});
Route::get('/welkam', function () {
    return 'Selamat Datang';
});
// // Route::get('/about', function () {
// //     return 'NIM : 2141720011 ';
// });
Route::get('/user/{name}', function ($name) {
    return 'Nama saya: ' . $name;
});
Route::get('/posts/{post}/{comment}', function ($post, $comment) {
    return 'Pos ke-' . $post . ", Komentar ke : " . $comment;
});
// Route::get('/user{name?}',function ($name=null){
//     return 'Nama saya'.$name;
// });
Route::get('/kodebarang{jenis?}/{merek?}', function ($jk = 'k01', $mrk = 'nokia') {
    return "kode barang $jk dan nama barang $mrk";
});
Route::get('about', function () {
    return view('about');
})->name('about');
Route::get('tampil', function () {
    return view('tampil');
})->name('tampil');
Route::get('/pesandisini', function () {
    return '<h1> pesan disini </h1>';
});
Route::redirect('/contact-us', '/pesandisini');
Route::prefix('/polinema')->group(function () {
    Route::get('/dosen', function () {
        return "<h1> daftar dosen </h1>";
    });
    Route::get('/tendik', function () {
        return "<h1> daftar tendik </h1>";
    });
    Route::get('/jurusan', function () {
        return "<h1> daftar jurusan </h1>";
    });
});
Route::prefix('/admin')->group(function () {
    Route::get('/dosen', function () {
        return "<h1> daftar dosen </h1>";
    });
    Route::get('/tendik', function () {
        return "<h1> daftar tendik </h1>";
    });
    Route::get('/jurusan', function () {
        return "<h1> daftar jurusan </h1>";
    });
    // Route::fallback(function () {
    //     return "maaf,alamat ini tidak ditemukan";
    // });

});
