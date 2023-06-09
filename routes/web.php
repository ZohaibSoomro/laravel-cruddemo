<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/',[StudentController::class,'index'])->name('home');
Route::post('/students',[StudentController::class,'store'])->name('save');
Route::get('/students/{student}/edit',[StudentController::class,'edit'])->name('edit');
Route::put('/students/{student}',[StudentController::class,'update'])->name('update');
Route::delete('/students/{student}',[StudentController::class,'destroy'])->name('destroy');
