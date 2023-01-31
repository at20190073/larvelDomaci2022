<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aircraftClass extends Model
{
    use HasFactory;
    public function planeTicket(){
        return $this->hasMany(planeTicket::class);
      }
}
