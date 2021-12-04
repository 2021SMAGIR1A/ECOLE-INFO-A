
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
    Route::get('/', [ComplaintController::class, 'getIndex'])->name('ComplaintGetIndex');
    Route::get('/{uuid}', [ComplaintController::class, 'getFind'])->name('ComplaintGetFind');
    Route::get('/create', [ComplaintController::class, 'getCreate'])->name('ComplaintGetCreate');
    Route::post('/create', [ComplaintController::class, 'postCreate'])->name('ComplaintPostCreate');
    Route::get('/edit/{uuid}', [ComplaintController::class, 'getEdit'])->name('ComplaintGetEdit');
    Route::post('/edit/{uuid}', [ComplaintController::class, 'postEdit'])->name('ComplaintPostEdit');
    Route::post('/delete', [ComplaintController::class, 'postDelete'])->name('ComplaintPostDelete');
});
