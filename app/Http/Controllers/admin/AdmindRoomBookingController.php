<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\RoomBooking;
use Illuminate\Http\Request;

class AdmindRoomBookingController extends Controller
{


    public  function roomBooking(){

        $adminRoomBooking = RoomBooking::join('users','room_bookings.user_id','=','users.id')
        ->join('rooms','room_bookings.room_id','=','rooms.id')
            ->select('users.name','rooms.title','room_bookings.*')
            ->get();
//        $userRoom = RoomBooking::join('rooms','room_bookings.room_id','=','rooms.title')->get();
        //dd($adminRoomBooking);
//return $userRoom;
       // $allRoom=RoomBooking::with('rooms')->get();
        //dd($allRoom);
        return view('admin.roomBooking.admin_room_booking_page',compact('adminRoomBooking'));
    }
}
