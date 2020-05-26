<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Linking extends Model
{
    protected $table = 'linking';

    protected $fillable = ['from', 'to'];
}
