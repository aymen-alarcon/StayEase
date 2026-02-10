<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Property extends Model
{
    protected $fillable =['nom','icon'];

    public function rooms() {
        return $this->belongsToMany(Room::class, 'rooms_properties');
     }

     
}
