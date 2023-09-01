<?php
use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AnimalController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/test', [AnimalController::class, 'index']);

// Route::get('/test', function(){
//     $animals = Animal::All();
//     return response()->json([
//         'results' => $animals,
//     ]);
// });

Route::get('/animals', [AnimalController::class, 'index']);