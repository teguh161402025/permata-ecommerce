<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{ protected $fillable = [
    'id_user',
    'id_item',
    'tanggal',
    'catatan',
    'jam',
    'aproval',
    'alasan'
];
    use HasFactory;
}
