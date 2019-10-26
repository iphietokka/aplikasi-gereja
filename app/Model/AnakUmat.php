<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AnakUmat extends Model
{
    protected $fillable = [
        'umat_id', 'nama', 'ttl', 'nik', 'pekerjaan'
    ];

    public function umat()
    {
        return $this->belongsTo('App\Model\Umat', 'umat_id', 'id');
    }
}
