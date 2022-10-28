<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pakaian extends Model
{
    public function baju()
    {
        return $this->hasMany(Baju::class);
    }

    protected $table = "pakaians";

    protected $fillable = [
        "id",
        "model"
    ];
}
