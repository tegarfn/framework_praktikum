<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baju extends Model
{
    public function pakaian()
    {
        return $this->belongsTo(Pakaian::class, 'tipe');
    }

    use HasFactory;

    protected $table = 'bajus';
    protected $fillable = [
        'id',
        'tipe',
        'ukuran',
        'warna',
        'jumlah'];
}
