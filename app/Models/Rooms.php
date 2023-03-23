<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;
    protected $fillable=[
       'room_category_id', 'title','description','beds','baths','room_size','image'
    ];

    public function price(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Pricing::class,'room_id');
    }

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Categorie::class,'room_category_id');
    }

    public function features(): \Illuminate\Database\Eloquent\Relations\HasManyThrough
    {
        return $this->hasManyThrough(Features::class, RoomFeatures::class, 'room_id', 'id');
    }
    public function facilities(): \Illuminate\Database\Eloquent\Relations\HasManyThrough
    {
        return $this->hasManyThrough(Facilities::class, RoomFacilities::class,'room_id','id');
    }

    public function bookings(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(RoomBooking::class, 'room_id');
    }

}
