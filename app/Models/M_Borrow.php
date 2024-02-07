<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class M_Borrow extends Model
{
    use softDeletes;

    protected $table = 'peminjaman';
    protected $fillable = [
        'tgl_pinjam',
        'tgl_kembali',
        'status',
        'email',
        'id_buku'
    ];

    protected $hidden;
}
