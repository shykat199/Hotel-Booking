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

    public function features(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Features::class);
    }
    public function facilities(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Facilities::class);
    }

}
