<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galleries extends Model
{
    protected $table = 'galleries';
    protected $guarded=[
        'id'
    ];
}
