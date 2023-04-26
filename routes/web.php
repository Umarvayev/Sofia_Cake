<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TeamController;
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

Route::get('/', [PageController::class, 'main']);
Route::get('about',[PageController::class, 'about'])->name('about');
Route::get('servis',[PageController::class, 'servis'])->name('servis');
Route::get('testimonial',[PageController::class, 'testimonial'])->name('testimonial');
Route::get('contact',[PageController::class, 'contact'])->name('contact');

Route::resource('menus', MenuController::class);
// Route::get('/menus', [MenuController::class, 'index'])->name('menus.index');
// Route::get('/menus/{post}', [MenuController::class, 'show'])->name('menus.show');
// Route::get('/menus/create', [MenuController::class, 'create'])->name('menus.create');
// Route::post('/menus/create', [MenuController::class, 'store'])->name('menus.ctore');
// Route::get('/menus/{post}/edit', [MenuController::class, 'edit'])->name('menus.edit');
// Route::put('/menus/{post}/edit', [MenuController::class, 'update'])->name('menus.update');
// Route::delete('/menus/{post}/destroy', [MenuController::class, 'delete'])->name('menus.delete');

Route::resource('teams', TeamController::class);
// Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
// Route::get('/teams/{post}', [TeamController::class, 'show'])->name('teams.show');
// Route::get('/teams/create', [TeamController::class, 'create'])->name('teams.create');
// Route::post('/teams/create', [TeamController::class, 'store'])->name('teams.ctore');
// Route::get('/teams/{post}/edit', [TeamController::class, 'edit'])->name('teams.edit');
// Route::put('/teams/{post}/edit', [TeamController::class, 'update'])->name('teams.update');
// Route::delete('/teams/{post}/destroy', [TeamController::class, 'destroy'])->name('teams.destroy');
