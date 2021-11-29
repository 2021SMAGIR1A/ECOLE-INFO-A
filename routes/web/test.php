
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
    Route::get('/', [TestController::class, 'getIndex'])->name('Module-TaskManagerTestGetIndex');
    Route::get('/{uuid}', [TestController::class, 'getFind'])->name('Module-TaskManagerTestGetFind');
    Route::get('/create', [TestController::class, 'getCreate'])->name('Module-TaskManagerTestGetCreate');
    Route::post('/create', [TestController::class, 'postCreate'])->name('Module-TaskManagerTestPostCreate');
    Route::get('/edit/{uuid}', [TestController::class, 'getEdit'])->name('Module-TaskManagerTestGetEdit');
    Route::post('/edit/{uuid}', [TestController::class, 'postEdit'])->name('Module-TaskManagerTestPostEdit');
    Route::post('/delete', [TestController::class, 'postDelete'])->name('Module-TaskManagerTestPostDelete');
});
