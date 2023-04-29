<?php

namespace App\Models;

use App\Models\Cake;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menus extends Model
{
    use HasFactory;


    public function cakes()
    {
        return $this->hasMany(Cake::class);
    }

}
