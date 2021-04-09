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
Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/delete/oppas/{id}', [\App\Http\Controllers\OppasController::class, 'delete']);
    Route::post('/delete/oppas', [\App\Http\Controllers\OppasController::class, 'destroy']);
    Route::get('/blokkeer', [\App\Http\Controllers\UsersController::class, 'delete']);
    Route::post('/blokkeer', [\App\Http\Controllers\UsersController::class, 'update']);
    Route::get('/deblokkeer', [\App\Http\Controllers\UsersController::class, 'delete']);
    Route::post('/deblokkeer', [\App\Http\Controllers\UsersController::class, 'update_deblokkeer']);
});

Route::middleware(['banned', 'auth'])->group(function(){
    Route::get('/create/huisdier', [\App\Http\Controllers\HuisdierController::class, 'create']);
    Route::post('/huisdier', [App\Http\Controllers\HuisdierController::class, 'store']);
    Route::get('/huisdier', [App\Http\Controllers\HuisdierController::class, 'index']);
    Route::get('/huisdier/{id}', [App\Http\Controllers\HuisdierController::class, 'show']);
    Route::get('/create/oppas', [\App\Http\Controllers\OppasController::class, 'create']);
    Route::post('/oppas', [App\Http\Controllers\OppasController::class, 'store']);
    Route::get('/', [App\Http\Controllers\OppasController::class, 'index']);
    Route::get('/oppas/{id}', [App\Http\Controllers\OppasController::class, 'show']);
    Route::get('/oppassen', [App\Http\Controllers\UsersController::class, 'show']);
    Route::post('/oppassen', [App\Http\Controllers\UsersController::class, 'update_role']);
    Route::get('logout', '\App\Http\Controllers\LoginController@logout');
    Route::get('/mijnhuisdier', [\App\Http\Controllers\HuisdierController::class, 'mijnhuisdier']);
    Route::get('/oppasreacties', [\App\Http\Controllers\UsersController::class, 'reactie']);
    Route::post('/oppasWeiger', [\App\Http\Controllers\UsersController::class, 'update_role_gast']);
    Route::post('/oppasAccepteer', [\App\Http\Controllers\UsersController::class, 'oppas_accept']);
    Route::post('/review', [\App\Http\Controllers\OppasController::class, 'review']);
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
