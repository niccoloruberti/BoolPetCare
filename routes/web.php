<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as DashBoardController;
use App\Http\Controllers\Admin\AnimalController as AnimalController;
use App\Http\Controllers\Admin\OwnerController as OwnerController;
use App\Http\Controllers\Admin\AnimalVaccinationController as AnimalVaccinationController;
use Illuminate\Http\Request;



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
    return view('home');
});

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class,'index'])->name('dashboard');
    Route::resource('animals', AnimalController::class);
    Route::resource('owners', OwnerController::class);
    //Route::resource('animal_vaccination', AnimalVaccinationController::class);
    Route::get('animals/{animal}/index/vaccine', [AnimalController::class, 'animal_vaccine_index'])
    ->name('animals.index.vaccine');
    Route::get('animals/{animal}/create/vaccine', [AnimalController::class, 'animal_vaccine_create'])
    ->name('animals.create.vaccine');
    Route::post('animals/{animal}/store/vaccine', [AnimalController::class, 'animal_vaccine_store'])
    ->name('animals.store.vaccine');
    Route::get('animals/{animal}/edit/vaccine', [AnimalController::class, 'animal_vaccine_edit'])
    ->name('animals.edit.vaccine');
    Route::put('animals/{animal}/update/vaccine', [AnimalController::class, 'animal_vaccine_update'])
    ->name('animals.update.vaccine');
    Route::delete('animals/{animal}/destroy/vaccine', [AnimalController::class, 'animal_vaccine_destroy'])
    ->name('animals.destroy.vaccine');
    Route::get('/search/', [AnimalController::class, 'search'])->name('animals.search');
    
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
