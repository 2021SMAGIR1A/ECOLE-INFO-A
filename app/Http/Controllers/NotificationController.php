<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use App\Http\Requests\CreateNotificationFormRequest;
use App\Http\Requests\UpdateNotificationFormRequest;
use App\Http\Requests\DeleteFormRequest;

class NotificationController extends Controller
{
    /**
     * Get all Notifications
     * 
     * @return mixed
     */
    public function getIndex()
    {
        $notifications = Notification::getAll();
        return view('pages.notifications.index', compact('notifications'));
    }
    
    /**
     * Get find Notification
     * 
     * @param Notification $uuid
     * @return mixed
     */
    public function getFind(Notification $uuid)
    {
        $notification = Notification::find($uuid);
        return view('pages.notifications.show', compact('notification'));
    }
    
    /**
     * Get create Notification
     * 
     * @return mixed
     */
    public function getCreate()
    {
        return view('pages.notifications.create');
    }

    /**
     * Post create Notification
     * 
     * @param CreateNotificationFormRequest $request
     * @param Notification $uuid
     * @return mixed
     */
    public function postCreate(CreateNotificationFormRequest $request)
    {
        $notification = Notification::store($request->only(['title','description','users_id']));
        return $request->api ? response()->json($notification['message']) : back()->withMessage($notification['message']);
    }
    
    /**
     * Get edit Notification
     * 
     * @param Notification $uuid
     * @return mixed
     */
    public function getEdit(Notification $uuid)
    {
        $notification = Notification::find($uuid);
        return view('pages.notifications.edit', compact('notification'));
    }
    
    /**
     * Post edit Notification
     * 
     * @param UpdateNotificationFormRequest $request
     * @param Notification $uuid
     * @return mixed
     */
    public function postEdit(UpdateNotificationFormRequest $request, Notification $uuid)
    {
        $notification = $uuid->uptodate($request->only(['title','description','users_id']));
        return back()->withMessage($notification['message']);
    }
    
    /**
     * Post delete Notification
     * 
     * @param Notification $uuid
     * @return mixed
     */
    public function postDelete(DeleteFormRequest $request)
    {
        $notification = Notification::find($request->uuid)->delete();
        return $request->api ? response()->json(['success' => true, 'message' => 'Supression de Notification effectuée avec succès']) : back()->withMessage('Supression de Notification effectuée avec succès');
    }
}
