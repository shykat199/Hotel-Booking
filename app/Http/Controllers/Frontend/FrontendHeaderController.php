<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Rooms;
use Illuminate\Http\Request;

class FrontendHeaderController extends Controller
{


    public function roomList(string $id)
    {
        $roomGrid = Rooms::where('room_category_id', $id)->get();
//        dd($rooms);
        return view('frontend.room_grid_page',compact('roomGrid'));
    }

    public function ourService(string $id){


    }


}
