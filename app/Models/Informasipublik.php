<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasipublik extends Model
{
    use HasFactory;
    protected $fillable = ['tipe', 'deskripsi', 'link'];
}
