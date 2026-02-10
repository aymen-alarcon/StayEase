<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = ['name','adresse', 'rating','image','statut'];

    public function images(){
    return $this->hasMany(Image::class);
    }

        public function User(){
        return $this->belongsTo(User::class);
    }




}

