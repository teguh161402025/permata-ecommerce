<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RatingController;
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


Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('janji', [\App\Http\Controllers\janjiController::class, 'index'])->name('janji');
Route::get('permataAnda', [\App\Http\Controllers\PermataAndaController::class, 'index'])->name('permata_anda');
Route::delete('/permataAnda/{id}', [\App\Http\Controllers\PermataAndaController::class, 'destroy'])->name('permata_anda.destroy');
Route::get('/permataAnda/disetujui', [\App\Http\Controllers\PermataAndaController::class, 'setuju'])->name('permata_anda.setuju');
Route::get('/permataAnda/ditolak', [\App\Http\Controllers\PermataAndaController::class, 'ditolak'])->name('permata_anda.ditolak');
Route::get('/permataAnda/history', [\App\Http\Controllers\PermataAndaController::class, 'history'])->name('permata_anda.history');
Route::get('/permataAnda/aktivitas', [\App\Http\Controllers\PermataAndaController::class, 'aktivitas'])->name('permata_anda.aktivitas');
// metode nya get lalu masukkan namespace AuthController 
// attribute name merupakan penamaan dari route yang kita buat
// kita tinggal panggil fungsi route(name) pada layout atau controller
Route::get('login', [AuthController::class,'index'])->name('login');
Route::get('register', [AuthController::class,'register'])->name('register');
Route::post('proses_login', [AuthController::class,'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class,'logout'])->name('logout');

Route::post('proses_register',[AuthController::class,'proses_register'])->name('proses_register');

// kita atur juga untuk middleware menggunakan group pada routing
// didalamnya terdapat group untuk mengecek kondisi login
// jika user yang login merupakan admin maka akan diarahkan ke AdminController
// jika user yang login merupakan user biasa maka akan diarahkan ke UserController
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::resource('user', UserController::class);
    });
});

Route::resource('/belanja', \App\Http\Controllers\BatuController::class);
Route::get('/belanja/{jenis}', [\App\Http\Controllers\BatuController::class, 'show'])->name('belanja.show');
Route::get('/belanja/kategori/{kategori}', [\App\Http\Controllers\BatuController::class, 'kategori'])->name('belanja.kategori');
Route::post('/belanja/harga/', [\App\Http\Controllers\BatuController::class, 'harga'])->name('belanja.harga');
Route::post('/belanja/tag/', [\App\Http\Controllers\BatuController::class, 'harga'])->name('belanja.harga');
Route::post('/belanja/pencarian/', [\App\Http\Controllers\BatuController::class, 'pencarian'])->name('belanja.pencarian');
Route::post('/belanja/tag/', [\App\Http\Controllers\BatuController::class, 'tag'])->name('belanja.tag');
Route::get('/item/{id}', [\App\Http\Controllers\BatuController::class, 'item'])->name('item');
Route::post('pesan', [\App\Http\Controllers\PesanController::class, 'store'])->name('pesan.store');
Route::post('/store-rating', [\App\Http\Controllers\RatingController::class, 'storeRating'])->name('store-rating');
Route::get('/admin/{id}/update-aproval', '\App\Http\Controllers\AprovalController@updateAproval')->name('aproval.update_aproval');
Route::post('/admin/tolak-aproval', '\App\Http\Controllers\AprovalController@tolakAproval')->name('aproval.tolak_aproval');
Route::get('/createItem', [\App\Http\Controllers\CreateItemController::class, 'index'])->name('createItem.index');
Route::post('/createItem/store', [\App\Http\Controllers\CreateItemController::class, 'store'])->name('createItem.store');
Route::get('/itemAdmin', [\App\Http\Controllers\ItemController::class, 'index'])->name('item.index');
Route::delete('/itemAdmin/{id}', [\App\Http\Controllers\ItemController::class, 'destroy'])->name('items.destroy');
Route::put('/edit/{id}/update', [\App\Http\Controllers\ItemController::class, 'update'])->name('update');
Route::get('/edit/{id}', [\App\Http\Controllers\ItemController::class, 'edit'])->name('edit');