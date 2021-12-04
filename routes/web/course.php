
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| Web Routes for 'course'
|--------------------------------------------------------------------------
|
| Here is where you can register Web routes for Course. These
| routes are loaded by the require directive in the general Routes/web.php.
| Here you go !
|
*/
Route::group(['prefix' => 'course'], function (){
    Route::get('/', [CourseController::class, 'getIndex'])->name('CourseGetIndex');
    Route::get('/{uuid}', [CourseController::class, 'getFind'])->name('CourseGetFind');
    Route::get('/create', [CourseController::class, 'getCreate'])->name('CourseGetCreate');
    Route::post('/create', [CourseController::class, 'postCreate'])->name('CoursePostCreate');
    Route::get('/edit/{uuid}', [CourseController::class, 'getEdit'])->name('CourseGetEdit');
    Route::post('/edit/{uuid}', [CourseController::class, 'postEdit'])->name('CoursePostEdit');
    Route::post('/delete', [CourseController::class, 'postDelete'])->name('CoursePostDelete');
});
