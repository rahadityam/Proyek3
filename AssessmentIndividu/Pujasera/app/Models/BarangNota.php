<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangNota extends Model
{
    use HasFactory;
    
    protected $table = 'barang_notas'; // Sesuaikan dengan nama tabel yang digunakan

    protected $fillable = [
        'KodeNota',
        'KodeBarang',
        'JumlahBarang',
        'HargaSatuan',
        'Jumlah',
    ];

    // Definisikan relasi foreign key ke tabel Nota
    public function nota()
    {
        return $this->belongsTo(Nota::class, 'KodeNota', 'KodeNota');
    }

    // Definisikan relasi foreign key ke tabel Barang
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'KodeBarang', 'KodeBarang');
    }
}
