<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;
    
    protected $table = 'kasirs'; // Sesuaikan dengan nama tabel yang digunakan

    protected $primaryKey = 'KodeKasir'; // Sesuaikan dengan primary key pada tabel

    protected $fillable = [
        'KodeKasir',
        'Nama',
        'HP',
    ];
}
