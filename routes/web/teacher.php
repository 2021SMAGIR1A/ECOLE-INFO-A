
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
    Route::get('/', [TeacherController::class, 'getIndex'])->name('TeacherGetIndex');
    Route::get('/{uuid}', [TeacherController::class, 'getFind'])->name('TeacherGetFind');
    Route::get('/create', [TeacherController::class, 'getCreate'])->name('TeacherGetCreate');
    Route::post('/create', [TeacherController::class, 'postCreate'])->name('TeacherPostCreate');
    Route::get('/edit/{uuid}', [TeacherController::class, 'getEdit'])->name('TeacherGetEdit');
    Route::post('/edit/{uuid}', [TeacherController::class, 'postEdit'])->name('TeacherPostEdit');
    Route::post('/delete', [TeacherController::class, 'postDelete'])->name('TeacherPostDelete');
});
