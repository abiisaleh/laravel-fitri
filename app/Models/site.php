<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class site extends Model
{
    protected $casts = ['content' => 'array'];
}
