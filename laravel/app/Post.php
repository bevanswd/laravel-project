<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'fname', 'lname', 'bname','address', 'city', 'state','zip', 'cmail', 'message', 'created_at',
    ];
}

