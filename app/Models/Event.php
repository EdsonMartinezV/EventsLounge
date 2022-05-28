<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_date',
        'price',
        'image'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function packs(){
        return $this->belongsToMany(Pack::class);
    }

}