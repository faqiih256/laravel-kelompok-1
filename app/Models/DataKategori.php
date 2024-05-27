<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKategori extends Model
{
    use HasFactory;

    protected $table = 'tbl_kategori_supplier';
    protected $guarded = [];
}
