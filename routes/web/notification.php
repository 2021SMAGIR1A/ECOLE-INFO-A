
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;

/*
|--------------------------------------------------------------------------
| Web Routes for 'notification'
|--------------------------------------------------------------------------
|
| Here is where you can register Web routes for Notification. These
| routes are loaded by the require directive in the general Routes/web.php.
| Here you go !
|
*/
Route::group(['prefix' => 'notification'], function (){
    Route::get('/', [NotificationController::class, 'getIndex'])->name('NotificationGetIndex');
    Route::get('/{uuid}', [NotificationController::class, 'getFind'])->name('NotificationGetFind');
    Route::get('/create', [NotificationController::class, 'getCreate'])->name('NotificationGetCreate');
    Route::post('/create', [NotificationController::class, 'postCreate'])->name('NotificationPostCreate');
    Route::get('/edit/{uuid}', [NotificationController::class, 'getEdit'])->name('NotificationGetEdit');
    Route::post('/edit/{uuid}', [NotificationController::class, 'postEdit'])->name('NotificationPostEdit');
    Route::post('/delete', [NotificationController::class, 'postDelete'])->name('NotificationPostDelete');
});
