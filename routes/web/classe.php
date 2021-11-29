
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
    Route::get('/', [ClasseController::class, 'getIndex'])->name('Module-TaskManagerClasseGetIndex');
    Route::get('/{uuid}', [ClasseController::class, 'getFind'])->name('Module-TaskManagerClasseGetFind');
    Route::get('/create', [ClasseController::class, 'getCreate'])->name('Module-TaskManagerClasseGetCreate');
    Route::post('/create', [ClasseController::class, 'postCreate'])->name('Module-TaskManagerClassePostCreate');
    Route::get('/edit/{uuid}', [ClasseController::class, 'getEdit'])->name('Module-TaskManagerClasseGetEdit');
    Route::post('/edit/{uuid}', [ClasseController::class, 'postEdit'])->name('Module-TaskManagerClassePostEdit');
    Route::post('/delete', [ClasseController::class, 'postDelete'])->name('Module-TaskManagerClassePostDelete');
});
