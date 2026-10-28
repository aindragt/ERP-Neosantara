<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
#[Fillable([
    'name',
    'company',
    'phone',
    'email',
    'source',
    'status',
    'notes'
])]
class Prospect extends Model
{
    //
}
