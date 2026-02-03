<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $fillable = [
        'path'
    ];
    public function Hotel (){
        $this->belongsToMany(Hotel::class);
    }
}
