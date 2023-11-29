<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;
    
    protected $table = 'nota'; // Sesuaikan dengan nama tabel yang digunakan

    protected $primaryKey = 'KodeNota'; // Sesuaikan dengan primary key pada tabel

    protected $fillable = [
        'KodeNota',
        'KodeTenan',
        'KodeKasir',
        'TglNota',
        'JamNota',
        'JumlahBelanja',
        'Diskon',
        'Total',
    ];

    // Definisikan relasi foreign key ke tabel Tenan
    public function tenan()
    {
        return $this->belongsTo(Tenan::class, 'KodeTenan', 'KodeTenan');
    }

    // Definisikan relasi foreign key ke tabel Kasir
    public function kasir()
    {
        return $this->belongsTo(Kasir::class, 'KodeKasir', 'KodeKasir');
    }
}
