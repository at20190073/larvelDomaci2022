<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class planeTicket extends Model
{
    use HasFactory;
    public function aircraftClass(){
        return $this->belongsTo(aircraftClass::class);
      }
      public function user(){
        return $this->belongsTo(User::class);
      }
}
