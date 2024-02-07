<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class M_Book extends Model
{
    use softDeletes;

    protected $table = 'book';
    protected $fillable = [
        'judul',
        'penulis',
        'tahun_terbit'
    ];

    protected $hidden;
}
