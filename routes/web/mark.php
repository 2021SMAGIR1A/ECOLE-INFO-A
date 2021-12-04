
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
    Route::get('/', [MarkController::class, 'getIndex'])->name('MarkGetIndex');
    Route::get('/{uuid}', [MarkController::class, 'getFind'])->name('MarkGetFind');
    Route::get('/create', [MarkController::class, 'getCreate'])->name('MarkGetCreate');
    Route::post('/create', [MarkController::class, 'postCreate'])->name('MarkPostCreate');
    Route::get('/edit/{uuid}', [MarkController::class, 'getEdit'])->name('MarkGetEdit');
    Route::post('/edit/{uuid}', [MarkController::class, 'postEdit'])->name('MarkPostEdit');
    Route::post('/delete', [MarkController::class, 'postDelete'])->name('MarkPostDelete');
});
