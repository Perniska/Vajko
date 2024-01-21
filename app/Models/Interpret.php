<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interpret extends Model
{
    use HasFactory;

    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}
