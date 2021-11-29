
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
    Route::get('/', [CourseController::class, 'getIndex'])->name('Module-TaskManagerCourseGetIndex');
    Route::get('/{uuid}', [CourseController::class, 'getFind'])->name('Module-TaskManagerCourseGetFind');
    Route::get('/create', [CourseController::class, 'getCreate'])->name('Module-TaskManagerCourseGetCreate');
    Route::post('/create', [CourseController::class, 'postCreate'])->name('Module-TaskManagerCoursePostCreate');
    Route::get('/edit/{uuid}', [CourseController::class, 'getEdit'])->name('Module-TaskManagerCourseGetEdit');
    Route::post('/edit/{uuid}', [CourseController::class, 'postEdit'])->name('Module-TaskManagerCoursePostEdit');
    Route::post('/delete', [CourseController::class, 'postDelete'])->name('Module-TaskManagerCoursePostDelete');
});
