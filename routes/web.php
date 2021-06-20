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
    return view('admin.home');
});
Route::any('profile-password-edit', function() {

})->name('profile.password.edit');
Route::any('profile-password-edit', function() {

})->name('admin.home');

Route::get('/login', function(){
    return view('admin.pages.login.index');
});

Route::get('/home', function(){
    return view('admin.pages.login.index');
})->name('admin.home');

Route::get('/usuario/novo', function(){
    return view('admin.user.create');
})->name('admin.usuario-novo');

Route::get('/permissoes/cadastrar', function(){
    return view('admin.permission.create');
})->name('admin.permissoes-cadastrar');

Route::get('/permissoes/index', function(){
    return view('admin.permission.index');
})->name('admin.permission.index');

Route::get('/perfis/index', function(){
    return view('admin.role.index');
})->name('admin.perfis.index');

Route::get('/perfis/cadastrar', function(){
    return view('admin.role.create');
})->name('admin.perfis.cadastrar');
