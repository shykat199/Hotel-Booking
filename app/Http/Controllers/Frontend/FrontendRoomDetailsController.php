<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Features;
use App\Models\Pricing;
use App\Models\RoomFacilities;
use App\Models\RoomFeatures;
use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendRoomDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function roomDetails(string $id)
    {
//        $item = Rooms::where('id', $id)->with(['price', 'category', 'features','facilities'])->first();
//        dd($item);
       $rooms = Rooms::find($id);
       $pricing = Pricing::where('room_id',$id)->first();
       //dd($pricing);
       $roomCategory = Categorie::all();
       $roomList = Rooms::where('room_category_id', $id)->get();


        $allFacilities = RoomFacilities::select('facilities.*')->where('room_id',$id)
        ->join('facilities', 'room_facilities.facilities_id', '=', 'facilities.id')->get();
//        dd($allFacilities);

        $allFeatures=RoomFeatures::select('features.*')->where('room_id',$id)
            ->join('features', 'room_features.features_id', '=', 'features.id')
            ->get();
//        dd($allFeatures);

        return view('frontend.room_details_page',compact('roomCategory','rooms','pricing','allFacilities','allFeatures','roomList'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
