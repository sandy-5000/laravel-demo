<?php

use App\Http\Controllers\Compiler\CompilerHomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
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

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/framework', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/users', function () {
    $user = User::where([
        ['name', '=', 'Cassi'],
        ['email', '=', 'cassi@gmail.com'],
    ])->get();
    $user = json_decode(json_encode($user));
    echo "<pre>" . print_r($user, true) . "</pre>";
    return response(true);
});

Route::get('/home', [
    HomeController::class, 'index'
])->name('home');

Route::get('/compiler', function () {
    return redirect('/compiler/home');
});

Route::get('/compiler/home', [
    CompilerHomeController::class, 'index'
])->name('compiler.home');

Route::get('/compiler/editor', [
    CompilerHomeController::class, 'editor'
])->name('compiler.editor');

require __DIR__ . '/auth.php';
