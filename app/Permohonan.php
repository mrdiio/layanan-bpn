<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    public function pemohon (){
        return $this->belongsTo(Pemohon::class);
    }
}
