<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UmatAlmarhum extends Model
{
    protected $fillable = [
        'umat_id', 'tgl_wafat', 'tgl_makam'
    ];

    public function umat()
    {
        return $this->belongsTo('App\Model\Umat', 'umat_id', 'id');
    }
}
