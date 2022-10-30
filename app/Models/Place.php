<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    public function block(){
        return $this->belongsTo(Block::class);
    }

    public function place_type(){
        return $this->belongsTo(PlaceType::class);
    }
    
}
