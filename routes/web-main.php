
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the 'web' middleware group. Enjoy building your Web!
|
*/
require 'web/classe.php';
require 'web/complaint.php';
require 'web/course.php';
require 'web/field.php';
require 'web/fields_has_course.php';
require 'web/mark.php';
require 'web/notification.php';
require 'web/room.php';
require 'web/student.php';
require 'web/teacher.php';
require 'web/teachers_has_course.php';
require 'web/test.php';
