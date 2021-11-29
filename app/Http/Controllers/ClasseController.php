<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classe;
use App\Http\Requests\CreateClasseFormRequest;
use App\Http\Requests\UpdateClasseFormRequest;
use App\Http\Requests\DeleteFormRequest;

class ClasseController extends Controller
{
    /**
     * Get all Classes
     * 
     * @return mixed
     */
    public function getIndex()
    {
        $classes = Classe::getAll();
        return view('pages.classes.index', compact('classes'));
    }
    
    /**
     * Get find Classe
     * 
     * @param Classe $uuid
     * @return mixed
     */
    public function getFind(Classe $uuid)
    {
        $classe = Classe::find($uuid);
        return view('pages.classes.show', compact('classe'));
    }
    
    /**
     * Get create Classe
     * 
     * @return mixed
     */
    public function getCreate()
    {
        return view('pages.classes.create');
    }

    /**
     * Post create Classe
     * 
     * @param CreateClasseFormRequest $request
     * @param Classe $uuid
     * @return mixed
     */
    public function postCreate(CreateClasseFormRequest $request)
    {
        $classe = Classe::store($request->only(['title','description','fields_id']));
        return $request->api ? response()->json($classe['message']) : back()->withMessage($classe['message']);
    }
    
    /**
     * Get edit Classe
     * 
     * @param Classe $uuid
     * @return mixed
     */
    public function getEdit(Classe $uuid)
    {
        $classe = Classe::find($uuid);
        return view('pages.classes.edit', compact('classe'));
    }
    
    /**
     * Post edit Classe
     * 
     * @param UpdateClasseFormRequest $request
     * @param Classe $uuid
     * @return mixed
     */
    public function postEdit(UpdateClasseFormRequest $request, Classe $uuid)
    {
        $classe = $uuid->uptodate($request->only(['title','description','fields_id']));
        return back()->withMessage($classe['message']);
    }
    
    /**
     * Post delete Classe
     * 
     * @param Classe $uuid
     * @return mixed
     */
    public function postDelete(DeleteFormRequest $request)
    {
        $classe = Classe::find($request->uuid)->delete();
        return $request->api ? response()->json(['success' => true, 'message' => 'Supression de Classe effectuée avec succès']) : back()->withMessage('Supression de Classe effectuée avec succès');
    }
}
