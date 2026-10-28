<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
#[Fillable([
    'name',
    'channel',
    'start_date',
    'end_date',
    'budget',
    'status',
    'description'
])]
class campaign extends Model
{
    use HasFactory;
}
