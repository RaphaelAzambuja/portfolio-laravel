<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['answer', 'question'])]
class Faq extends Model
{
    public $timestamps = false;
}
