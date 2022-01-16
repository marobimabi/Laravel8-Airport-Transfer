<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $appends =[
        "parent",
    ];
    public function rezervations(){
        return $this->hasMany(Rezervation::class);
    }

}
