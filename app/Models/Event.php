<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'invite_type_id', 'association_id', 'date_time'];

    protected $dates = ['date_time'];

    public function association(){
        return $this->belongsTo(Association::class);
    }
}
