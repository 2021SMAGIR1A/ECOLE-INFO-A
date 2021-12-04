
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes for 'test'
|--------------------------------------------------------------------------
|
| Here is where you can register Web routes for Test. These
| routes are loaded by the require directive in the general Routes/web.php.
| Here you go !
|
*/
Route::group(['prefix' => 'test'], function (){
    Route::get('/', [TestController::class, 'getIndex'])->name('TestGetIndex');
    Route::get('/{uuid}', [TestController::class, 'getFind'])->name('TestGetFind');
    Route::get('/create', [TestController::class, 'getCreate'])->name('TestGetCreate');
    Route::post('/create', [TestController::class, 'postCreate'])->name('TestPostCreate');
    Route::get('/edit/{uuid}', [TestController::class, 'getEdit'])->name('TestGetEdit');
    Route::post('/edit/{uuid}', [TestController::class, 'postEdit'])->name('TestPostEdit');
    Route::post('/delete', [TestController::class, 'postDelete'])->name('TestPostDelete');
});
