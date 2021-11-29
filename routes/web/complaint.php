
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplaintController;

/*
|--------------------------------------------------------------------------
| Web Routes for 'complaint'
|--------------------------------------------------------------------------
|
| Here is where you can register Web routes for Complaint. These
| routes are loaded by the require directive in the general Routes/web.php.
| Here you go !
|
*/
Route::group(['prefix' => 'complaint'], function (){
    Route::get('/', [ComplaintController::class, 'getIndex'])->name('Module-TaskManagerComplaintGetIndex');
    Route::get('/{uuid}', [ComplaintController::class, 'getFind'])->name('Module-TaskManagerComplaintGetFind');
    Route::get('/create', [ComplaintController::class, 'getCreate'])->name('Module-TaskManagerComplaintGetCreate');
    Route::post('/create', [ComplaintController::class, 'postCreate'])->name('Module-TaskManagerComplaintPostCreate');
    Route::get('/edit/{uuid}', [ComplaintController::class, 'getEdit'])->name('Module-TaskManagerComplaintGetEdit');
    Route::post('/edit/{uuid}', [ComplaintController::class, 'postEdit'])->name('Module-TaskManagerComplaintPostEdit');
    Route::post('/delete', [ComplaintController::class, 'postDelete'])->name('Module-TaskManagerComplaintPostDelete');
});
