
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
    Route::get('/', [RoomController::class, 'getIndex'])->name('Module-TaskManagerRoomGetIndex');
    Route::get('/{uuid}', [RoomController::class, 'getFind'])->name('Module-TaskManagerRoomGetFind');
    Route::get('/create', [RoomController::class, 'getCreate'])->name('Module-TaskManagerRoomGetCreate');
    Route::post('/create', [RoomController::class, 'postCreate'])->name('Module-TaskManagerRoomPostCreate');
    Route::get('/edit/{uuid}', [RoomController::class, 'getEdit'])->name('Module-TaskManagerRoomGetEdit');
    Route::post('/edit/{uuid}', [RoomController::class, 'postEdit'])->name('Module-TaskManagerRoomPostEdit');
    Route::post('/delete', [RoomController::class, 'postDelete'])->name('Module-TaskManagerRoomPostDelete');
});
