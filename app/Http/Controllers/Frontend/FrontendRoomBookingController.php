<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\RoomBooking;
use App\Models\Rooms;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FrontendRoomBookingController extends Controller
{

    public function store(Request $request)
    {
//        dd(Auth::id());
        $depart_date = Carbon::parse($request->get('depart_date'));
        $arrive_date = Carbon::parse($request->get('arrive_date'));
        $difference = ($depart_date->diff($arrive_date)->days);
//dd($depart_date, $arrive_date, $difference);

//        dd($request->all(), $request->get('per_day_cost'));
        $total_cost = $difference * $request->get('per_day_cost') ;
        $room_booking_list = RoomBooking::create([
            'arrive_date' => $request->get('arrive_date'),
            'depart_date' => $request->get('depart_date'),
            'guests' => $request->get('guests'),
            'child' => $request->get('child'),
            'room_id'=>$request->get('room_id'),
            'per_day_cost'=>$request->get('per_day_cost'),
            'total_cost'=>$total_cost,
            'user_id' => Auth::id()
//
        ]);
        if ($room_booking_list) {
            return redirect()->back()->with('success', 'booking Successfully');
        } else {
             return Redirect::back()->with('Error','User not able to booking');
        }
    }
    public function roomSearch(Request $request){
//        dd($request->all());
//        dd(request('arrive_date'));
        $roomGrid = Rooms::select('rooms.*')
            ->whereHas('bookings', function ($where) {
//                $where->whereNotBetween('arrive_date', [request('arrive_date'), request('depart_date')]);
//                $where->whereNotBetween('depart_date',[request('arrive_date'),request('depart_date')]);

                $where->where('arrive_date','>',request('arrive_date'));
                $where->where('depart_date','<=',request('arrive_date'));
                $where->where('arrive_date','>=',request('depart_date'));
            })
            ->doesntHave('bookings', 'or')
            ->with('bookings')->get();
//        dd($roomGrid);

        return view('frontend.room_grid_page',compact('roomGrid'));

        dd($rooms);
        return $rooms? 'yes':'no';

    }
}
