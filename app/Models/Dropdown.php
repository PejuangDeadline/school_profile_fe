<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dropdown extends Model
{
    protected $table = 'dropdowns';
    protected $guarded=[
        'id'
    ];
}
