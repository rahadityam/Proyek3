<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenan extends Model
{
    use HasFactory;
    
    protected $table = 'tenans'; // Sesuaikan dengan nama tabel yang digunakan

    protected $primaryKey = 'KodeTenan'; // Sesuaikan dengan primary key pada tabel

    protected $fillable = [
        'KodeTenan',
        'NamaTenan',
        'HP',
    ];
}
