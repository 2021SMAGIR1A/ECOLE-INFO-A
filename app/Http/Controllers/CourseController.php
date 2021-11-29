<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Http\Requests\CreateCourseFormRequest;
use App\Http\Requests\UpdateCourseFormRequest;
use App\Http\Requests\DeleteFormRequest;

class CourseController extends Controller
{
    /**
     * Get all Courses
     * 
     * @return mixed
     */
    public function getIndex()
    {
        $courses = Course::getAll();
        return view('pages.courses.index', compact('courses'));
    }
    
    /**
     * Get find Course
     * 
     * @param Course $uuid
     * @return mixed
     */
    public function getFind(Course $uuid)
    {
        $course = Course::find($uuid);
        return view('pages.courses.show', compact('course'));
    }
    
    /**
     * Get create Course
     * 
     * @return mixed
     */
    public function getCreate()
    {
        return view('pages.courses.create');
    }

    /**
     * Post create Course
     * 
     * @param CreateCourseFormRequest $request
     * @param Course $uuid
     * @return mixed
     */
    public function postCreate(CreateCourseFormRequest $request)
    {
        $course = Course::store($request->only(['title','description']));
        return $request->api ? response()->json($course['message']) : back()->withMessage($course['message']);
    }
    
    /**
     * Get edit Course
     * 
     * @param Course $uuid
     * @return mixed
     */
    public function getEdit(Course $uuid)
    {
        $course = Course::find($uuid);
        return view('pages.courses.edit', compact('course'));
    }
    
    /**
     * Post edit Course
     * 
     * @param UpdateCourseFormRequest $request
     * @param Course $uuid
     * @return mixed
     */
    public function postEdit(UpdateCourseFormRequest $request, Course $uuid)
    {
        $course = $uuid->uptodate($request->only(['title','description']));
        return back()->withMessage($course['message']);
    }
    
    /**
     * Post delete Course
     * 
     * @param Course $uuid
     * @return mixed
     */
    public function postDelete(DeleteFormRequest $request)
    {
        $course = Course::find($request->uuid)->delete();
        return $request->api ? response()->json(['success' => true, 'message' => 'Supression de Course effectuée avec succès']) : back()->withMessage('Supression de Course effectuée avec succès');
    }
}
