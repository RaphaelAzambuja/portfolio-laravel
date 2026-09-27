<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected function casts()
    {
        return [
            'published_at' => 'datetime'
        ];
    }
}
