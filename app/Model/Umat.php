<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Umat extends Model
{
    protected $fillable = [
        'nama', 'nik_kk', 'nik', 'ttl', 'usia', 'pekerjaan', 'status_kawin', 'alamat', 'sektor', 'unit'
    ];
}
