<?php

use App\Http\Controllers\AnimalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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




Route::get('/animals',[AnimalController::class, 'index']);

Route::post('/animals',[AnimalController::class, 'create']);

Route::put('/animals/{$id}', [AnimalController::class, 'update']);

Route::delete('animals/{$id}', [AnimalController::class, 'delete']);


// Route::get('/animals', function(){
//     echo "menampilkan semua data animals";
// });

// Route::post('/animals', function(){
//     echo "Menambahkan data hewan baru";
// });

// Route::put('/animals/{$id}', function($id){
//     echo"mengupdate data animals id $id";
// });

// Route::delete('/animals/{$id}', function($id){
//     echo "Menghapus data animals id $id";
// });
