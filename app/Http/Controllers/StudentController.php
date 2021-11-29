<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\CreateStudentFormRequest;
use App\Http\Requests\UpdateStudentFormRequest;
use App\Http\Requests\DeleteFormRequest;

class StudentController extends Controller
{
    /**
     * Get all Students
     * 
     * @return mixed
     */
    public function getIndex()
    {
        $students = Student::getAll();
        return view('pages.students.index', compact('students'));
    }
    
    /**
     * Get find Student
     * 
     * @param Student $uuid
     * @return mixed
     */
    public function getFind(Student $uuid)
    {
        $student = Student::find($uuid);
        return view('pages.students.show', compact('student'));
    }
    
    /**
     * Get create Student
     * 
     * @return mixed
     */
    public function getCreate()
    {
        return view('pages.students.create');
    }

    /**
     * Post create Student
     * 
     * @param CreateStudentFormRequest $request
     * @param Student $uuid
     * @return mixed
     */
    public function postCreate(CreateStudentFormRequest $request)
    {
        $student = Student::store($request->only(['matricule','firstname','lastname','email','contact','birthdate','classes_id','users_id']));
        return $request->api ? response()->json($student['message']) : back()->withMessage($student['message']);
    }
    
    /**
     * Get edit Student
     * 
     * @param Student $uuid
     * @return mixed
     */
    public function getEdit(Student $uuid)
    {
        $student = Student::find($uuid);
        return view('pages.students.edit', compact('student'));
    }
    
    /**
     * Post edit Student
     * 
     * @param UpdateStudentFormRequest $request
     * @param Student $uuid
     * @return mixed
     */
    public function postEdit(UpdateStudentFormRequest $request, Student $uuid)
    {
        $student = $uuid->uptodate($request->only(['matricule','firstname','lastname','email','contact','birthdate','classes_id','users_id']));
        return back()->withMessage($student['message']);
    }
    
    /**
     * Post delete Student
     * 
     * @param Student $uuid
     * @return mixed
     */
    public function postDelete(DeleteFormRequest $request)
    {
        $student = Student::find($request->uuid)->delete();
        return $request->api ? response()->json(['success' => true, 'message' => 'Supression de Student effectuée avec succès']) : back()->withMessage('Supression de Student effectuée avec succès');
    }
}
