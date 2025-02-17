<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $filllable = [
        'first_name',
        'last_name',
        'email',
        'password'
        
    ];
}
