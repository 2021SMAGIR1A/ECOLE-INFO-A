<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use App\Http\Requests\CreateComplaintFormRequest;
use App\Http\Requests\UpdateComplaintFormRequest;
use App\Http\Requests\DeleteFormRequest;

class ComplaintController extends Controller
{
    /**
     * Get all Complaints
     * 
     * @return mixed
     */
    public function getIndex()
    {
        $complaints = Complaint::getAll();
        return view('pages.complaints.index', compact('complaints'));
    }
    
    /**
     * Get find Complaint
     * 
     * @param Complaint $uuid
     * @return mixed
     */
    public function getFind(Complaint $uuid)
    {
        $complaint = Complaint::find($uuid);
        return view('pages.complaints.show', compact('complaint'));
    }
    
    /**
     * Get create Complaint
     * 
     * @return mixed
     */
    public function getCreate()
    {
        return view('pages.complaints.create');
    }

    /**
     * Post create Complaint
     * 
     * @param CreateComplaintFormRequest $request
     * @param Complaint $uuid
     * @return mixed
     */
    public function postCreate(CreateComplaintFormRequest $request)
    {
        $complaint = Complaint::store($request->only(['title','description','marks_id']));
        return $request->api ? response()->json($complaint['message']) : back()->withMessage($complaint['message']);
    }
    
    /**
     * Get edit Complaint
     * 
     * @param Complaint $uuid
     * @return mixed
     */
    public function getEdit(Complaint $uuid)
    {
        $complaint = Complaint::find($uuid);
        return view('pages.complaints.edit', compact('complaint'));
    }
    
    /**
     * Post edit Complaint
     * 
     * @param UpdateComplaintFormRequest $request
     * @param Complaint $uuid
     * @return mixed
     */
    public function postEdit(UpdateComplaintFormRequest $request, Complaint $uuid)
    {
        $complaint = $uuid->uptodate($request->only(['title','description','marks_id']));
        return back()->withMessage($complaint['message']);
    }
    
    /**
     * Post delete Complaint
     * 
     * @param Complaint $uuid
     * @return mixed
     */
    public function postDelete(DeleteFormRequest $request)
    {
        $complaint = Complaint::find($request->uuid)->delete();
        return $request->api ? response()->json(['success' => true, 'message' => 'Supression de Complaint effectuée avec succès']) : back()->withMessage('Supression de Complaint effectuée avec succès');
    }
}
