<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeachersHasCourse;
use App\Http\Requests\CreateTeachersHasCourseFormRequest;
use App\Http\Requests\UpdateTeachersHasCourseFormRequest;
use App\Http\Requests\DeleteFormRequest;

class TeachersHasCourseController extends Controller
{
    /**
     * Get all TeachersHasCourses
     * 
     * @return mixed
     */
    public function getIndex()
    {
        $teachersHasCourses = TeachersHasCourse::getAll();
        return view('pages.teachers_has_courses.index', compact('teachersHasCourses'));
    }
    
    /**
     * Get find TeachersHasCourse
     * 
     * @param TeachersHasCourse $uuid
     * @return mixed
     */
    public function getFind(TeachersHasCourse $uuid)
    {
        $teachersHasCourse = TeachersHasCourse::find($uuid);
        return view('pages.teachers_has_courses.show', compact('teachersHasCourse'));
    }
    
    /**
     * Get create TeachersHasCourse
     * 
     * @return mixed
     */
    public function getCreate()
    {
        return view('pages.teachers_has_courses.create');
    }

    /**
     * Post create TeachersHasCourse
     * 
     * @param CreateTeachersHasCourseFormRequest $request
     * @param TeachersHasCourse $uuid
     * @return mixed
     */
    public function postCreate(CreateTeachersHasCourseFormRequest $request)
    {
        $teachersHasCourse = TeachersHasCourse::store($request->only(['teachers_id','courses_id','rooms_id','classes_id']));
        return $request->api ? response()->json($teachersHasCourse['message']) : back()->withMessage($teachersHasCourse['message']);
    }
    
    /**
     * Get edit TeachersHasCourse
     * 
     * @param TeachersHasCourse $uuid
     * @return mixed
     */
    public function getEdit(TeachersHasCourse $uuid)
    {
        $teachersHasCourse = TeachersHasCourse::find($uuid);
        return view('pages.teachers_has_courses.edit', compact('teachersHasCourse'));
    }
    
    /**
     * Post edit TeachersHasCourse
     * 
     * @param UpdateTeachersHasCourseFormRequest $request
     * @param TeachersHasCourse $uuid
     * @return mixed
     */
    public function postEdit(UpdateTeachersHasCourseFormRequest $request, TeachersHasCourse $uuid)
    {
        $teachersHasCourse = $uuid->uptodate($request->only(['teachers_id','courses_id','rooms_id','classes_id']));
        return back()->withMessage($teachersHasCourse['message']);
    }
    
    /**
     * Post delete TeachersHasCourse
     * 
     * @param TeachersHasCourse $uuid
     * @return mixed
     */
    public function postDelete(DeleteFormRequest $request)
    {
        $teachersHasCourse = TeachersHasCourse::find($request->uuid)->delete();
        return $request->api ? response()->json(['success' => true, 'message' => 'Supression de TeachersHasCourse effectuée avec succès']) : back()->withMessage('Supression de TeachersHasCourse effectuée avec succès');
    }
}
