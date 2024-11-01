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
    return view('welcome');
});
Route::get('user',function(){
    return 'oi usuario';
});
Route::get('teste', function(){
    return [
        'nome' => 'Joaozinho',
        'sobrenome' => 'Silva',
    ];
});
Route::get('/users/{id}', function ($id){
    return $id;
});
Route::get('/user/{id}/{nome}', function ($id,$nome) {
    return $id.' - '.$nome;
});
Route::get('/users/{id?}', function ($id = null) {
    return $id;
});
Route::prefix('usuarios')->group(function(){
    Route::get('',function(){
        return 'Usuario';
    });
    Route::get('/{id}', function($id){
        return 'Mostra detalhes do usuarios';
    });
});
Route::get('/users/{id?}', function ($id = null) {
    return $id;
})->name('users');
Route::get('user/{user}', function (\App\Models\User $user){
    return $user;
});
 
Route::get('/request', function(\Illuminate\Http\Request $request){
 
//dd($request->all());
//dd($request->input('sobrename'));
//dd($request->query('nome'));
//dd($request->url());
//dd($request->fullUrl());
//dd($request->has('nome'));
//dd($request->whenHas ('nome', function() { return 'oi'; }));
//dd($request->whenFilled('nome', function($xuxa) { return $xuxa;}));
});

route::get('/user/{user}', [\app\http\Controllers\UserController::class, 'show']);
Route::get('user/{user}', [\App\Http\Controllers\UserController::class,'show'])->name('user.show');
Route::get('users', [\App\Http\Controllers\UserController::class,'index'])->name('user.index');