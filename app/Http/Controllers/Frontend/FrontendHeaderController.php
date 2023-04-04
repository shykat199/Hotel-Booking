<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Rooms;
use Illuminate\Http\Request;

class FrontendHeaderController extends Controller
{


    public function roomList(string $id)
    {
//        $roomGrid = Rooms::where('room_category_id', $id)->get();
////        dd($rooms);
///

        $roomGrid = Rooms::select('rooms.*','pricings.nightly')->where('room_category_id', $id)
            ->Join('pricings','rooms.id','pricings.room_id')->get();
//        dd($roomGrid);
        return view('frontend.room_grid_page',compact('roomGrid'));
    }

    public function ourService(string $id){


    }


}
