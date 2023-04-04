<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Pricing;
use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendRoomGridController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public  function roomGrid(){
        $roomGrid = Rooms::select('rooms.*','pricing.nightly')
                    ->Join('rooms','rooms.id','pricing.room_id')->get();
        dd($roomGrid);

//        $roomGrid=DB::table('rooms')->paginate(3);
//        $rooms = Rooms::find($id);
//        $pricing = Pricing::where('room_id',$id)->first();
//        $gallery = DB::table('galleries')->paginate(2);
        return view('frontend.room_grid_page',compact('roomGrid',));
    }
}
