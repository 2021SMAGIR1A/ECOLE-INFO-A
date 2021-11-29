<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Field;
use App\Http\Requests\CreateFieldFormRequest;
use App\Http\Requests\UpdateFieldFormRequest;
use App\Http\Requests\DeleteFormRequest;

class FieldController extends Controller
{
    /**
     * Get all Fields
     * 
     * @return mixed
     */
    public function getIndex()
    {
        $fields = Field::getAll();
        return view('pages.fields.index', compact('fields'));
    }
    
    /**
     * Get find Field
     * 
     * @param Field $uuid
     * @return mixed
     */
    public function getFind(Field $uuid)
    {
        $field = Field::find($uuid);
        return view('pages.fields.show', compact('field'));
    }
    
    /**
     * Get create Field
     * 
     * @return mixed
     */
    public function getCreate()
    {
        return view('pages.fields.create');
    }

    /**
     * Post create Field
     * 
     * @param CreateFieldFormRequest $request
     * @param Field $uuid
     * @return mixed
     */
    public function postCreate(CreateFieldFormRequest $request)
    {
        $field = Field::store($request->only(['title','description']));
        return $request->api ? response()->json($field['message']) : back()->withMessage($field['message']);
    }
    
    /**
     * Get edit Field
     * 
     * @param Field $uuid
     * @return mixed
     */
    public function getEdit(Field $uuid)
    {
        $field = Field::find($uuid);
        return view('pages.fields.edit', compact('field'));
    }
    
    /**
     * Post edit Field
     * 
     * @param UpdateFieldFormRequest $request
     * @param Field $uuid
     * @return mixed
     */
    public function postEdit(UpdateFieldFormRequest $request, Field $uuid)
    {
        $field = $uuid->uptodate($request->only(['title','description']));
        return back()->withMessage($field['message']);
    }
    
    /**
     * Post delete Field
     * 
     * @param Field $uuid
     * @return mixed
     */
    public function postDelete(DeleteFormRequest $request)
    {
        $field = Field::find($request->uuid)->delete();
        return $request->api ? response()->json(['success' => true, 'message' => 'Supression de Field effectuée avec succès']) : back()->withMessage('Supression de Field effectuée avec succès');
    }
}
