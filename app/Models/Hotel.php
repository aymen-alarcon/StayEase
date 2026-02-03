<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hotel extends Model
{
    protected $fillable = [
        'name','adress','rating'

    ];




public function  chambres (){
        $this->hasMany(Chambre::class);
}
public function Images (){
    // $this->hasMany(Image::class);
}



}
