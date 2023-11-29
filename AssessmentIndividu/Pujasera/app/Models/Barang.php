<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    
    protected $table = 'barang'; // Sesuaikan dengan nama tabel yang digunakan

    protected $primaryKey = 'KodeBarang'; // Sesuaikan dengan primary key pada tabel
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'KodeBarang',
        'NamaBarang',
        'Satuan',
        'HargaSatuan',
        'Stok',
    ];
}
