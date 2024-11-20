<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
}
