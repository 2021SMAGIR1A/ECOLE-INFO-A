<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Http\Requests\CreateRoomFormRequest;
use App\Http\Requests\UpdateRoomFormRequest;
use App\Http\Requests\DeleteFormRequest;

class RoomController extends Controller
{
    /**
     * Get all Rooms
     * 
     * @return mixed
     */
    public function getIndex()
    {
        $rooms = Room::getAll();
        return view('pages.rooms.index', compact('rooms'));
    }
    
    /**
     * Get find Room
     * 
     * @param Room $uuid
     * @return mixed
     */
    public function getFind(Room $uuid)
    {
        $room = Room::find($uuid);
        return view('pages.rooms.show', compact('room'));
    }
    
    /**
     * Get create Room
     * 
     * @return mixed
     */
    public function getCreate()
    {
        return view('pages.rooms.create');
    }

    /**
     * Post create Room
     * 
     * @param CreateRoomFormRequest $request
     * @param Room $uuid
     * @return mixed
     */
    public function postCreate(CreateRoomFormRequest $request)
    {
        $room = Room::store($request->only(['title','description']));
        return $request->api ? response()->json($room['message']) : back()->withMessage($room['message']);
    }
    
    /**
     * Get edit Room
     * 
     * @param Room $uuid
     * @return mixed
     */
    public function getEdit(Room $uuid)
    {
        $room = Room::find($uuid);
        return view('pages.rooms.edit', compact('room'));
    }
    
    /**
     * Post edit Room
     * 
     * @param UpdateRoomFormRequest $request
     * @param Room $uuid
     * @return mixed
     */
    public function postEdit(UpdateRoomFormRequest $request, Room $uuid)
    {
        $room = $uuid->uptodate($request->only(['title','description']));
        return back()->withMessage($room['message']);
    }
    
    /**
     * Post delete Room
     * 
     * @param Room $uuid
     * @return mixed
     */
    public function postDelete(DeleteFormRequest $request)
    {
        $room = Room::find($request->uuid)->delete();
        return $request->api ? response()->json(['success' => true, 'message' => 'Supression de Room effectuée avec succès']) : back()->withMessage('Supression de Room effectuée avec succès');
    }
}
