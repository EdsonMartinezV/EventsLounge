<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paid extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
    ];

    public function event(){
        return $this->belongsTo(Event::class);
    }
}
