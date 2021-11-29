
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
    Route::get('/', [NotificationController::class, 'getIndex'])->name('Module-TaskManagerNotificationGetIndex');
    Route::get('/{uuid}', [NotificationController::class, 'getFind'])->name('Module-TaskManagerNotificationGetFind');
    Route::get('/create', [NotificationController::class, 'getCreate'])->name('Module-TaskManagerNotificationGetCreate');
    Route::post('/create', [NotificationController::class, 'postCreate'])->name('Module-TaskManagerNotificationPostCreate');
    Route::get('/edit/{uuid}', [NotificationController::class, 'getEdit'])->name('Module-TaskManagerNotificationGetEdit');
    Route::post('/edit/{uuid}', [NotificationController::class, 'postEdit'])->name('Module-TaskManagerNotificationPostEdit');
    Route::post('/delete', [NotificationController::class, 'postDelete'])->name('Module-TaskManagerNotificationPostDelete');
});
