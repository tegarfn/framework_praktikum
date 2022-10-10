<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baju extends Model
{
    public function prodi()
    {
        return $this->belongsTo((Pakaian::class));
    }
    use HasFactory;

    protected $table = 'bajus';
    protected $fillable = ['id','tipe','ukuran','warna','jumlah'];
}
