
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

/*
|--------------------------------------------------------------------------
| Web Routes for 'room'
|--------------------------------------------------------------------------
|
| Here is where you can register Web routes for Room. These
| routes are loaded by the require directive in the general Routes/web.php.
| Here you go !
|
*/
Route::group(['prefix' => 'room'], function (){
    Route::get('/', [RoomController::class, 'getIndex'])->name('RoomGetIndex');
    Route::get('/{uuid}', [RoomController::class, 'getFind'])->name('RoomGetFind');
    Route::get('/create', [RoomController::class, 'getCreate'])->name('RoomGetCreate');
    Route::post('/create', [RoomController::class, 'postCreate'])->name('RoomPostCreate');
    Route::get('/edit/{uuid}', [RoomController::class, 'getEdit'])->name('RoomGetEdit');
    Route::post('/edit/{uuid}', [RoomController::class, 'postEdit'])->name('RoomPostEdit');
    Route::post('/delete', [RoomController::class, 'postDelete'])->name('RoomPostDelete');
});
