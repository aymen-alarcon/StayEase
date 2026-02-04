<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Reservation extends Model
{
    protected $fillable = ["name", "date_fin"];

    // public function chambre():HasOne{
    //     return $this->hasOne(Chambre::class);
    // }

    public function user():HasOne{
        return $this->hasOne(User::class);
    }
}
