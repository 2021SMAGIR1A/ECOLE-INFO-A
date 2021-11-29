<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Http\Requests\CreateTeacherFormRequest;
use App\Http\Requests\UpdateTeacherFormRequest;
use App\Http\Requests\DeleteFormRequest;

class TeacherController extends Controller
{
    /**
     * Get all Teachers
     * 
     * @return mixed
     */
    public function getIndex()
    {
        $teachers = Teacher::getAll();
        return view('pages.teachers.index', compact('teachers'));
    }
    
    /**
     * Get find Teacher
     * 
     * @param Teacher $uuid
     * @return mixed
     */
    public function getFind(Teacher $uuid)
    {
        $teacher = Teacher::find($uuid);
        return view('pages.teachers.show', compact('teacher'));
    }
    
    /**
     * Get create Teacher
     * 
     * @return mixed
     */
    public function getCreate()
    {
        return view('pages.teachers.create');
    }

    /**
     * Post create Teacher
     * 
     * @param CreateTeacherFormRequest $request
     * @param Teacher $uuid
     * @return mixed
     */
    public function postCreate(CreateTeacherFormRequest $request)
    {
        $teacher = Teacher::store($request->only(['matricule','nom','prenoms','users_id']));
        return $request->api ? response()->json($teacher['message']) : back()->withMessage($teacher['message']);
    }
    
    /**
     * Get edit Teacher
     * 
     * @param Teacher $uuid
     * @return mixed
     */
    public function getEdit(Teacher $uuid)
    {
        $teacher = Teacher::find($uuid);
        return view('pages.teachers.edit', compact('teacher'));
    }
    
    /**
     * Post edit Teacher
     * 
     * @param UpdateTeacherFormRequest $request
     * @param Teacher $uuid
     * @return mixed
     */
    public function postEdit(UpdateTeacherFormRequest $request, Teacher $uuid)
    {
        $teacher = $uuid->uptodate($request->only(['matricule','nom','prenoms','users_id']));
        return back()->withMessage($teacher['message']);
    }
    
    /**
     * Post delete Teacher
     * 
     * @param Teacher $uuid
     * @return mixed
     */
    public function postDelete(DeleteFormRequest $request)
    {
        $teacher = Teacher::find($request->uuid)->delete();
        return $request->api ? response()->json(['success' => true, 'message' => 'Supression de Teacher effectuée avec succès']) : back()->withMessage('Supression de Teacher effectuée avec succès');
    }
}
