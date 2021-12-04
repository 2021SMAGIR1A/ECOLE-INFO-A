
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClasseController;

/*
|--------------------------------------------------------------------------
| Web Routes for 'classe'
|--------------------------------------------------------------------------
|
| Here is where you can register Web routes for Classe. These
| routes are loaded by the require directive in the general Routes/web.php.
| Here you go !
|
*/
Route::group(['prefix' => 'classe'], function (){
    Route::get('/', [ClasseController::class, 'getIndex'])->name('ClasseGetIndex');
    Route::get('/{uuid}', [ClasseController::class, 'getFind'])->name('ClasseGetFind');
    Route::get('/create', [ClasseController::class, 'getCreate'])->name('ClasseGetCreate');
    Route::post('/create', [ClasseController::class, 'postCreate'])->name('ClassePostCreate');
    Route::get('/edit/{uuid}', [ClasseController::class, 'getEdit'])->name('ClasseGetEdit');
    Route::post('/edit/{uuid}', [ClasseController::class, 'postEdit'])->name('ClassePostEdit');
    Route::post('/delete', [ClasseController::class, 'postDelete'])->name('ClassePostDelete');
});
