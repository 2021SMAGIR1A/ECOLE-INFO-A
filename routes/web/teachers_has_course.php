
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeachersHasCourseController;

/*
|--------------------------------------------------------------------------
| Web Routes for 'teachers_has_course'
|--------------------------------------------------------------------------
|
| Here is where you can register Web routes for TeachersHasCourse. These
| routes are loaded by the require directive in the general Routes/web.php.
| Here you go !
|
*/
Route::group(['prefix' => 'teachers_has_course'], function (){
    Route::get('/', [TeachersHasCourseController::class, 'getIndex'])->name('TeachersHasCourseGetIndex');
    Route::get('/{uuid}', [TeachersHasCourseController::class, 'getFind'])->name('TeachersHasCourseGetFind');
    Route::get('/create', [TeachersHasCourseController::class, 'getCreate'])->name('TeachersHasCourseGetCreate');
    Route::post('/create', [TeachersHasCourseController::class, 'postCreate'])->name('TeachersHasCoursePostCreate');
    Route::get('/edit/{uuid}', [TeachersHasCourseController::class, 'getEdit'])->name('TeachersHasCourseGetEdit');
    Route::post('/edit/{uuid}', [TeachersHasCourseController::class, 'postEdit'])->name('TeachersHasCoursePostEdit');
    Route::post('/delete', [TeachersHasCourseController::class, 'postDelete'])->name('TeachersHasCoursePostDelete');
});
