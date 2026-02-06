<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = ['name','adresse', 'rating'];

    public function Images(){
    return $this->hasMany(Image::class);
    }

        public function User(){
        return $this->belongsTo(User::class);
    }
}

