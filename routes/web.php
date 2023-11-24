<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\ProductController;
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

/**MVC
 * Modals- interact with database and tables
 * Controllers- manages what need to happen. The Brains of the system
 * View - frontend of our system
 */
Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('/terms', [DashboardController::class, 'terms'])->name('terms');

// create an idea route
Route::post('/idea', [IdeaController::class, 'store'])->name('idea.create');


// delete idea route
Route::delete('/idea/{idea}', [IdeaController::class, 'destroy'])->name('idea.destroy');

// show the idea
Route::get('/idea/{idea}', [IdeaController::class, 'show'])->name('idea.show');

// edit and update idea route
Route::get('/idea/{idea}/edit', [IdeaController::class, 'edit'])->name('idea.edit');
Route::put('/idea/{idea}', [IdeaController::class, 'update'])->name('idea.update');
