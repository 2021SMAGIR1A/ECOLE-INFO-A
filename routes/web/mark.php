
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarkController;

/*
|--------------------------------------------------------------------------
| Web Routes for 'mark'
|--------------------------------------------------------------------------
|
| Here is where you can register Web routes for Mark. These
| routes are loaded by the require directive in the general Routes/web.php.
| Here you go !
|
*/
Route::group(['prefix' => 'mark'], function (){
    Route::get('/', [MarkController::class, 'getIndex'])->name('Module-TaskManagerMarkGetIndex');
    Route::get('/{uuid}', [MarkController::class, 'getFind'])->name('Module-TaskManagerMarkGetFind');
    Route::get('/create', [MarkController::class, 'getCreate'])->name('Module-TaskManagerMarkGetCreate');
    Route::post('/create', [MarkController::class, 'postCreate'])->name('Module-TaskManagerMarkPostCreate');
    Route::get('/edit/{uuid}', [MarkController::class, 'getEdit'])->name('Module-TaskManagerMarkGetEdit');
    Route::post('/edit/{uuid}', [MarkController::class, 'postEdit'])->name('Module-TaskManagerMarkPostEdit');
    Route::post('/delete', [MarkController::class, 'postDelete'])->name('Module-TaskManagerMarkPostDelete');
});
