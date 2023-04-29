<?php

namespace App\Models;

use App\Models\Menus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cake extends Model
{
    use HasFactory;

    public function menu()
    {
        return $this->belongsTo(Menus::class);
    }
}
