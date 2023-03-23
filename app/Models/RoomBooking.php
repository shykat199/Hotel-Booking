<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomBooking extends Model
{
    use HasFactory;
    protected  $fillable=['user_id','room_id','arrive_date','depart_date','guests','child','per_day_cost','total_cost'];
}
