<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mark;
use App\Http\Requests\CreateMarkFormRequest;
use App\Http\Requests\UpdateMarkFormRequest;
use App\Http\Requests\DeleteFormRequest;

class MarkController extends Controller
{
    /**
     * Get all Marks
     * 
     * @return mixed
     */
    public function getIndex()
    {
        $marks = Mark::getAll();
        return view('pages.marks.index', compact('marks'));
    }
    
    /**
     * Get find Mark
     * 
     * @param Mark $uuid
     * @return mixed
     */
    public function getFind(Mark $uuid)
    {
        $mark = Mark::find($uuid);
        return view('pages.marks.show', compact('mark'));
    }
    
    /**
     * Get create Mark
     * 
     * @return mixed
     */
    public function getCreate()
    {
        return view('pages.marks.create');
    }

    /**
     * Post create Mark
     * 
     * @param CreateMarkFormRequest $request
     * @param Mark $uuid
     * @return mixed
     */
    public function postCreate(CreateMarkFormRequest $request)
    {
        $mark = Mark::store($request->only(['mark','observations','tests_id','students_id']));
        return $request->api ? response()->json($mark['message']) : back()->withMessage($mark['message']);
    }
    
    /**
     * Get edit Mark
     * 
     * @param Mark $uuid
     * @return mixed
     */
    public function getEdit(Mark $uuid)
    {
        $mark = Mark::find($uuid);
        return view('pages.marks.edit', compact('mark'));
    }
    
    /**
     * Post edit Mark
     * 
     * @param UpdateMarkFormRequest $request
     * @param Mark $uuid
     * @return mixed
     */
    public function postEdit(UpdateMarkFormRequest $request, Mark $uuid)
    {
        $mark = $uuid->uptodate($request->only(['mark','observations','tests_id','students_id']));
        return back()->withMessage($mark['message']);
    }
    
    /**
     * Post delete Mark
     * 
     * @param Mark $uuid
     * @return mixed
     */
    public function postDelete(DeleteFormRequest $request)
    {
        $mark = Mark::find($request->uuid)->delete();
        return $request->api ? response()->json(['success' => true, 'message' => 'Supression de Mark effectuée avec succès']) : back()->withMessage('Supression de Mark effectuée avec succès');
    }
}
