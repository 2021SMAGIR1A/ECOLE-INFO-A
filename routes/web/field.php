
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FieldController;

/*
|--------------------------------------------------------------------------
| Web Routes for 'field'
|--------------------------------------------------------------------------
|
| Here is where you can register Web routes for Field. These
| routes are loaded by the require directive in the general Routes/web.php.
| Here you go !
|
*/
Route::group(['prefix' => 'field'], function (){
    Route::get('/', [FieldController::class, 'getIndex'])->name('Module-TaskManagerFieldGetIndex');
    Route::get('/{uuid}', [FieldController::class, 'getFind'])->name('Module-TaskManagerFieldGetFind');
    Route::get('/create', [FieldController::class, 'getCreate'])->name('Module-TaskManagerFieldGetCreate');
    Route::post('/create', [FieldController::class, 'postCreate'])->name('Module-TaskManagerFieldPostCreate');
    Route::get('/edit/{uuid}', [FieldController::class, 'getEdit'])->name('Module-TaskManagerFieldGetEdit');
    Route::post('/edit/{uuid}', [FieldController::class, 'postEdit'])->name('Module-TaskManagerFieldPostEdit');
    Route::post('/delete', [FieldController::class, 'postDelete'])->name('Module-TaskManagerFieldPostDelete');
});
