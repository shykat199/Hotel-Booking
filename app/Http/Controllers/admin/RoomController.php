<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Redirect;
use App\Http\Requests\RoomRequest;
use App\Models\Categorie;
use App\Models\Facilities;
use App\Models\Features;
use App\Models\Pricing;
use App\Models\RoomFacilities;
use App\Models\RoomFeatures;
use App\Models\Rooms;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoryList = Categorie::all();
        $featureListGet = Features::all();
        $facilitiesListGet = Facilities::all();
        return view('admin.room.add_room_page_show',compact('categoryList','featureListGet','facilitiesListGet'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function listShow()
    {
        $roomList = Rooms::all();
        return view('admin.room.room_list_page',compact('roomList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoomRequest $request)
    {
        if ($request->hasFile('image')){
            $name = time().'.'.$request->file('image')->getClientOriginalExtension();
            $image = Storage::put('/public/room-images/'.$name,file_get_contents($request->file('image')));
        }
        $room_store = Rooms::create([
            'room_category_id' => $request->get('room_category_id'),
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'beds'=>$request->get('beds'),
            'baths'=>$request->get('baths'),
            'room_size'=>$request->get('room_size'),
            'image' => ($name),


        ]);
        $price_store = Pricing::create([
            'room_id'=>$room_store->id,
            'nightly'=>$request->get('nightly'),
            'weekend'=>$request->get('weekend'),
            'weekly'=>$request->get('weekly'),
            'monthly'=>$request->get('monthly'),
            'security_deposit'=>$request->get('security_deposit'),
            'additional_guest_allow'=>$request->get('additional_guest_allow'),
            'additional_guest_cost'=>$request->get('additional_guest_cost'),
            'cleaning_fee'=>$request->get('cleaning_fee'),
            'city_fee'=>$request->get('city_fee'),
            'minimum_number_of_days'=>$request->get('minimum_number_of_days'),
            'maximum_number_of_days'=>$request->get('maximum_number_of_days')
        ]);
        foreach ($request->features as $key => $value) {
            RoomFeatures::create([
                'room_id' => $room_store->id,
                'features_id'=> $value,
            ]);
        }

        $facilities = [];
        foreach ($request->facilities as $value) {
            $facilities[] = [
                'room_id' => $room_store->id,
                'facilities_id'=> $value,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        if (!empty($facilities)) {
            RoomFacilities::insert($facilities);
        }

        if ($room_store) {
            return redirect()->route('room.list.show.page')->with('success', 'Room lists added Successfully');
        } else {
             return Redirect::back()->with('fail','Room lists not added Successfully');
        }
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
        $categories=Categorie::all();
        $features=Features::all();
        $facilities = Facilities::all();
//        $pricing = Pricing::where('additional_guest_allow', $id);
        $room_features = RoomFeatures::where('room_id', $id)->pluck('features_id')->toArray();
        $room_facilities = RoomFacilities::where('room_id', $id)->pluck('facilities_id')->toArray();
        $edtRoom = Rooms::with('price')->where('id', $id)->first();


//        dd($pricing);
        return view('admin.room.room_edit_page',compact('edtRoom','categories','features','room_features','facilities','room_facilities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if ($request->hasFile('image')){
            $name = time().'.'.$request->file('image')->getClientOriginalExtension();
            $upload_image = Storage::put('/public/room-images/'.$name,file_get_contents($request->file('image')));

            if ($upload_image){
                $data['image'] = $name;
            }
        }

        $data['room_category_id'] = $request->get('room_category_id');
        $data['title'] = $request->get('title');
        $data['description'] = $request->get('description');
        $data['beds'] = $request->get('beds');
        $data['baths'] = $request->get('baths');
        $updateRoomList = Rooms::where('id',$request->id)->update($data);
//        pricing table
        $price_data['room_id'] = $request->id;
        $price_data['nightly'] = $request->get('nightly');
        $price_data['weekend'] =$request->get('weekend');
        $price_data['weekly']=$request->get('weekly');
        $price_data['monthly']=$request->get('monthly');
        $price_data['security_deposit']=$request->get('security_deposit');
        $price_data['additional_guest_allow']=$request->get('additional_guest_allow');
        $price_data['additional_guest_cost']=$request->get('additional_guest_cost');
        $price_data['cleaning_fee']=$request->get('cleaning_fee');
        $price_data['city_fee']=$request->get('city_fee');
        $price_data['minimum_number_of_days']=$request->get('minimum_number_of_days');
        $price_data['maximum_number_of_days']=$request->get('maximum_number_of_days');
        $updatePricingList = Pricing::where('room_id',$request->id)->update($price_data);

//        features table

//        delete from room_features where room_id = $request->id;
        $dltRoomFeatures = RoomFeatures::where('room_id',$request->id)->delete();

        foreach ($request->features as $key => $value) {
            RoomFeatures::create([
                'room_id' => $request->id,
                'features_id'=> $value,
            ]);
        }
        $dltRoomFacilities = RoomFacilities::where('room_id',$request->id)->delete();
        $facilities = [];
        foreach ($request->facilities as $value) {
            $facilities[] = [
                'room_id' => $request->id,
                'facilities_id'=> $value,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        if (!empty($facilities)) {
            RoomFacilities::insert($facilities);
        }


        return redirect()->route('room.list.show.page')->with('success','Room list has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dltRoomList = Rooms::findorfail($id);
        $dltRoomList = $dltRoomList->delete();
        if ($dltRoomList){
            return redirect()->route('room.list.show.page')->with('success','staff deleted successfully');
        }else{
            return Redirect::back()->with('fail','room list not deleted');
        }
    }
}
