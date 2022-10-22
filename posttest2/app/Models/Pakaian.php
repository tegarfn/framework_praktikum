<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pakaian extends Model
{
    public function Baju()
    {
        return $this->hasMany((Baju::class));
    }
    public function up()
    {
        Schema::create('prodis', function(Blueprint $table){
            $table->id();
            $table->string('model');
            $table->timestamps();
        });
    }
    use HasFactory;
}
