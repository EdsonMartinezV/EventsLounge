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
        'is_confirmed',
        'is_realized',
        'reason'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function packs(){
        return $this->belongsToMany(Pack::class);
    }

    public function images(){
        return $this->hasMany(Image::class, 'event_id','id');
    }

    public function paids(){
        return $this->hasMany(Paid::class);
    }

    public function bills(){
        return $this->hasMany(Bill::class);
    }
}