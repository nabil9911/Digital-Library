<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Books extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'ISBN',
        'user_id',
        'email',
        'nama_buku',
        'image_name',
        'cover_buku',
        'e-book',
        'pages',
        'pengarang',
        'penerbit',
        'tahun_terbit'
    ];
}
