<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_supplier extends Model
{
    use HasFactory;
    protected $primaryKey = 'kode_supplier';
    
    protected $fillable = [
        'nama_supplier',
        'alamat',
        'kota',
        'provinsi',
        'kode_pos',
        'nomor_telepon',
        'email',
        'kategori_supplier',
        'batas_kredit',
    ];
}
