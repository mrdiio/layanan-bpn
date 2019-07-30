<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    public function pemohon(){
        return $this->belongsTo(Pemohon::class);
    }

    public function tanah(){
        return $this->belongsTo(Tanah::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }
}
