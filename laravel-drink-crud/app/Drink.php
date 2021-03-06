<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $fillable = [
        'name',
        'alcoholContent',
        'price',
    ];

    public function bottle()
    {
        return $this->belongsTo(Bottle::class);
    }
}
