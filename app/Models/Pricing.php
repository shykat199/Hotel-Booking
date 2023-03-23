<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;
    protected $fillable = [
      'room_id','nightly','weekend','weekly','monthly','security_deposit'
        ,'additional_guest_allow','additional_guest_cost','cleaning_fee','city_fee',
        'minimum_number_of_days','maximum_number_of_days'
    ];

    public function roomsfunc(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Rooms::class,'room_id');
    }
}
