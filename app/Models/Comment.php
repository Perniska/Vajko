<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory ;

    protected $fillable = ['comment_body', 'email', 'post_id' ];

    protected $attributes = [
        'email' => null,
        'post_id' => null,
    ];

}
