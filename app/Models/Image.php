<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre'
    ];

    public function events(){
        return $this->belongsTo(Event::class,'event_id','id');
    }

    public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
