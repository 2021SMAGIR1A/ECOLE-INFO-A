<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FieldsHasCourse;
use App\Http\Requests\CreateFieldsHasCourseFormRequest;
use App\Http\Requests\UpdateFieldsHasCourseFormRequest;
use App\Http\Requests\DeleteFormRequest;

class FieldsHasCourseController extends Controller
{
    /**
     * Get all FieldsHasCourses
     * 
     * @return mixed
     */
    public function getIndex()
    {
        $fieldsHasCourses = FieldsHasCourse::getAll();
        return view('pages.fields_has_courses.index', compact('fieldsHasCourses'));
    }
    
    /**
     * Get find FieldsHasCourse
     * 
     * @param FieldsHasCourse $uuid
     * @return mixed
     */
    public function getFind(FieldsHasCourse $uuid)
    {
        $fieldsHasCourse = FieldsHasCourse::find($uuid);
        return view('pages.fields_has_courses.show', compact('fieldsHasCourse'));
    }
    
    /**
     * Get create FieldsHasCourse
     * 
     * @return mixed
     */
    public function getCreate()
    {
        return view('pages.fields_has_courses.create');
    }

    /**
     * Post create FieldsHasCourse
     * 
     * @param CreateFieldsHasCourseFormRequest $request
     * @param FieldsHasCourse $uuid
     * @return mixed
     */
    public function postCreate(CreateFieldsHasCourseFormRequest $request)
    {
        $fieldsHasCourse = FieldsHasCourse::store($request->only(['fields_id','courses_id']));
        return $request->api ? response()->json($fieldsHasCourse['message']) : back()->withMessage($fieldsHasCourse['message']);
    }
    
    /**
     * Get edit FieldsHasCourse
     * 
     * @param FieldsHasCourse $uuid
     * @return mixed
     */
    public function getEdit(FieldsHasCourse $uuid)
    {
        $fieldsHasCourse = FieldsHasCourse::find($uuid);
        return view('pages.fields_has_courses.edit', compact('fieldsHasCourse'));
    }
    
    /**
     * Post edit FieldsHasCourse
     * 
     * @param UpdateFieldsHasCourseFormRequest $request
     * @param FieldsHasCourse $uuid
     * @return mixed
     */
    public function postEdit(UpdateFieldsHasCourseFormRequest $request, FieldsHasCourse $uuid)
    {
        $fieldsHasCourse = $uuid->uptodate($request->only(['fields_id','courses_id']));
        return back()->withMessage($fieldsHasCourse['message']);
    }
    
    /**
     * Post delete FieldsHasCourse
     * 
     * @param FieldsHasCourse $uuid
     * @return mixed
     */
    public function postDelete(DeleteFormRequest $request)
    {
        $fieldsHasCourse = FieldsHasCourse::find($request->uuid)->delete();
        return $request->api ? response()->json(['success' => true, 'message' => 'Supression de FieldsHasCourse effectuée avec succès']) : back()->withMessage('Supression de FieldsHasCourse effectuée avec succès');
    }
}
