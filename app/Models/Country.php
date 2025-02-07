<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
        // Outras colunas que existirem...
    ];

    public function states()
    {
        return $this->hasMany(State::class);
    }
}
