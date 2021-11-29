
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FieldsHasCourseController;

/*
|--------------------------------------------------------------------------
| Web Routes for 'fields_has_course'
|--------------------------------------------------------------------------
|
| Here is where you can register Web routes for FieldsHasCourse. These
| routes are loaded by the require directive in the general Routes/web.php.
| Here you go !
|
*/
Route::group(['prefix' => 'fields_has_course'], function (){
    Route::get('/', [FieldsHasCourseController::class, 'getIndex'])->name('Module-TaskManagerFieldsHasCourseGetIndex');
    Route::get('/{uuid}', [FieldsHasCourseController::class, 'getFind'])->name('Module-TaskManagerFieldsHasCourseGetFind');
    Route::get('/create', [FieldsHasCourseController::class, 'getCreate'])->name('Module-TaskManagerFieldsHasCourseGetCreate');
    Route::post('/create', [FieldsHasCourseController::class, 'postCreate'])->name('Module-TaskManagerFieldsHasCoursePostCreate');
    Route::get('/edit/{uuid}', [FieldsHasCourseController::class, 'getEdit'])->name('Module-TaskManagerFieldsHasCourseGetEdit');
    Route::post('/edit/{uuid}', [FieldsHasCourseController::class, 'postEdit'])->name('Module-TaskManagerFieldsHasCoursePostEdit');
    Route::post('/delete', [FieldsHasCourseController::class, 'postDelete'])->name('Module-TaskManagerFieldsHasCoursePostDelete');
});
