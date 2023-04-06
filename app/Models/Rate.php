<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    public function Restoran(){
        return $this->belongsTo(Restoran::class, 'rate_id');
    }

}
