
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
    Route::get('/', [StudentController::class, 'getIndex'])->name('Module-TaskManagerStudentGetIndex');
    Route::get('/{uuid}', [StudentController::class, 'getFind'])->name('Module-TaskManagerStudentGetFind');
    Route::get('/create', [StudentController::class, 'getCreate'])->name('Module-TaskManagerStudentGetCreate');
    Route::post('/create', [StudentController::class, 'postCreate'])->name('Module-TaskManagerStudentPostCreate');
    Route::get('/edit/{uuid}', [StudentController::class, 'getEdit'])->name('Module-TaskManagerStudentGetEdit');
    Route::post('/edit/{uuid}', [StudentController::class, 'postEdit'])->name('Module-TaskManagerStudentPostEdit');
    Route::post('/delete', [StudentController::class, 'postDelete'])->name('Module-TaskManagerStudentPostDelete');
});
