
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes for 'student'
|--------------------------------------------------------------------------
|
| Here is where you can register Web routes for Student. These
| routes are loaded by the require directive in the general Routes/web.php.
| Here you go !
|
*/
Route::group(['prefix' => 'student'], function (){
    Route::get('/', [StudentController::class, 'getIndex'])->name('StudentGetIndex');
    Route::get('/{uuid}', [StudentController::class, 'getFind'])->name('StudentGetFind');
    Route::get('/create', [StudentController::class, 'getCreate'])->name('StudentGetCreate');
    Route::post('/create', [StudentController::class, 'postCreate'])->name('StudentPostCreate');
    Route::get('/edit/{uuid}', [StudentController::class, 'getEdit'])->name('StudentGetEdit');
    Route::post('/edit/{uuid}', [StudentController::class, 'postEdit'])->name('StudentPostEdit');
    Route::post('/delete', [StudentController::class, 'postDelete'])->name('StudentPostDelete');
});
