<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'is_active'
    ];

    public function events(){
        return $this->belongsToMany(Event::class);
    }

}