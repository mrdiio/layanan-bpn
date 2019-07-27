<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemohon extends Model
{
    public function permohonan (){
        return $this->hasMany(Permohonan::class);
    }
}
