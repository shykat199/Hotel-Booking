<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\RoomBooking;
use Illuminate\Http\Request;

class AdmindRoomBookingController extends Controller
{


    public  function roomBooking(){

        $adminRoomBooking = RoomBooking::all();

        return view('admin.roomBooking.admin_room_booking_page',compact('adminRoomBooking'));
    }
}
