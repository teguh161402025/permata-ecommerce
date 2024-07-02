<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batu extends Model
{
     protected $fillable = [
       'nama_batu',
       'jenis',
       'harga',
       'rating',
       'infopedia',
       'gambar',
       'detail',
       'kategori',
       'tag'
    ];
    use HasFactory;
}
