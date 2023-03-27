<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\RoomBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use JetBrains\PhpStorm\NoReturn;

class UserDashboardController extends Controller
{
    public function dashboard(){

        return view('users.user_dashboard_layout.user_body_page');
    }

 public function userLoginDetails(){
        $userLoginDetails = RoomBooking::with('users','rooms')->select('room_bookings.*')
            ->where('room_bookings.user_id','=',Auth::id())
            ->get();
//     dd($userLoginDetails);
     return view('users.Loged_in_users_details.Logged_in_users_details',compact('userLoginDetails'));
//        return$userLoginDetails;
        //dd($userLoginDetails);
    }
}
