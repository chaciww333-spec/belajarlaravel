<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Homecontroller ::class, 'home']);

Route::get('/about', [\App\Http\Controllers\Homecontroller ::class, 'about']);

Route::get('/Artikel/berita', [\App\Http\Controllers\Homecontroller ::class, 'Artikel_berita']);

Route::get('/user', [\App\Http\Controllers\Homecontroller ::class, 'user']);

Route::get('/product/{id}', [\App\Http\Controllers\Homecontroller ::class, 'home']);


Route::get('/about', function (){
    return view('about');
});

Route::get('/Arikel/berita', function (){
    return view('Artikel.berita');
});

Route::get('/user', function (){
    return "Halaman User | GET";
});

Route::get('/product/{id}', function ($id){
    return "Halaman product:" . $id;
});

Route::get('/product/{id}/ item/{item}', function ($id, $item){
    return "Halaman product:" . $id . "item:" .$item;
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\Homecontroller:: class, 'index'])->name('home');

Route::get('/siswa', [App\Http\Controllers\Siswacontroller:: class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [App\Http\Controllers\Siswacontroller:: class, 'create'])->name('siswa.create');
Route::post('/siswa', [App\Http\Controllers\Siswacontroller:: class, 'store'])->name('siswa.store');
Route::get('/siswa/{id}', [App\Http\Controllers\Siswacontroller:: class, 'show'])->name('siswa.show');
Route::get('/siswa/{id}/edit', [App\Http\Controllers\Siswacontroller:: class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{id}', [App\Http\Controllers\Siswacontroller:: class, 'update'])->name('siswa.update');
Route::delete('/siswa/{id}', [App\Http\Controllers\Siswacontroller:: class, 'destroy'])->name('siswa.destroy');

Route::resource('/category', \App\Http\Controllers\CategoryController:: class);
Route::resource('/articles', \App\Http\Controllers\ArticleController:: class);
Route::resource('/mobil', \App\Http\Controllers\MobilController:: class);
Route::resource('/suppliers', \App\Http\Controllers\SuppliersController:: class);
Route::resource('/products', \App\Http\Controllers\ProductsController:: class);



