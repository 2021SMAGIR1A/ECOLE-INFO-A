
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;

/*
|--------------------------------------------------------------------------
| Web Routes for 'teacher'
|--------------------------------------------------------------------------
|
| Here is where you can register Web routes for Teacher. These
| routes are loaded by the require directive in the general Routes/web.php.
| Here you go !
|
*/
Route::group(['prefix' => 'teacher'], function (){
    Route::get('/', [TeacherController::class, 'getIndex'])->name('Module-TaskManagerTeacherGetIndex');
    Route::get('/{uuid}', [TeacherController::class, 'getFind'])->name('Module-TaskManagerTeacherGetFind');
    Route::get('/create', [TeacherController::class, 'getCreate'])->name('Module-TaskManagerTeacherGetCreate');
    Route::post('/create', [TeacherController::class, 'postCreate'])->name('Module-TaskManagerTeacherPostCreate');
    Route::get('/edit/{uuid}', [TeacherController::class, 'getEdit'])->name('Module-TaskManagerTeacherGetEdit');
    Route::post('/edit/{uuid}', [TeacherController::class, 'postEdit'])->name('Module-TaskManagerTeacherPostEdit');
    Route::post('/delete', [TeacherController::class, 'postDelete'])->name('Module-TaskManagerTeacherPostDelete');
});
