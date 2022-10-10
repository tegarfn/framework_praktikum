<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pakaian extends Model
{
    public function Baju()
    {
        return $this->hasMany((Baju::class));
    }
    use HasFactory;
    protected $table = 'pakaians';
    protected $fillable = ['id', 'model'];
}
