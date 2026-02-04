<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $failable=['path','hotel_id)'];
    public function Hotel(){
        return $this->belongsTo(Hotel::class);
    }
}
