<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Http\Requests\CreateTestFormRequest;
use App\Http\Requests\UpdateTestFormRequest;
use App\Http\Requests\DeleteFormRequest;

class TestController extends Controller
{
    /**
     * Get all Tests
     * 
     * @return mixed
     */
    public function getIndex()
    {
        $tests = Test::getAll();
        return view('pages.tests.index', compact('tests'));
    }
    
    /**
     * Get find Test
     * 
     * @param Test $uuid
     * @return mixed
     */
    public function getFind(Test $uuid)
    {
        $test = Test::find($uuid);
        return view('pages.tests.show', compact('test'));
    }
    
    /**
     * Get create Test
     * 
     * @return mixed
     */
    public function getCreate()
    {
        return view('pages.tests.create');
    }

    /**
     * Post create Test
     * 
     * @param CreateTestFormRequest $request
     * @param Test $uuid
     * @return mixed
     */
    public function postCreate(CreateTestFormRequest $request)
    {
        $test = Test::store($request->only(['title','coef','datetest','courses_id','classes_id']));
        return $request->api ? response()->json($test['message']) : back()->withMessage($test['message']);
    }
    
    /**
     * Get edit Test
     * 
     * @param Test $uuid
     * @return mixed
     */
    public function getEdit(Test $uuid)
    {
        $test = Test::find($uuid);
        return view('pages.tests.edit', compact('test'));
    }
    
    /**
     * Post edit Test
     * 
     * @param UpdateTestFormRequest $request
     * @param Test $uuid
     * @return mixed
     */
    public function postEdit(UpdateTestFormRequest $request, Test $uuid)
    {
        $test = $uuid->uptodate($request->only(['title','coef','datetest','courses_id','classes_id']));
        return back()->withMessage($test['message']);
    }
    
    /**
     * Post delete Test
     * 
     * @param Test $uuid
     * @return mixed
     */
    public function postDelete(DeleteFormRequest $request)
    {
        $test = Test::find($request->uuid)->delete();
        return $request->api ? response()->json(['success' => true, 'message' => 'Supression de Test effectuée avec succès']) : back()->withMessage('Supression de Test effectuée avec succès');
    }
}
