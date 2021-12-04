
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
    Route::get('/', [FieldController::class, 'getIndex'])->name('FieldGetIndex');
    Route::get('/{uuid}', [FieldController::class, 'getFind'])->name('FieldGetFind');
    Route::get('/create', [FieldController::class, 'getCreate'])->name('FieldGetCreate');
    Route::post('/create', [FieldController::class, 'postCreate'])->name('FieldPostCreate');
    Route::get('/edit/{uuid}', [FieldController::class, 'getEdit'])->name('FieldGetEdit');
    Route::post('/edit/{uuid}', [FieldController::class, 'postEdit'])->name('FieldPostEdit');
    Route::post('/delete', [FieldController::class, 'postDelete'])->name('FieldPostDelete');
});
