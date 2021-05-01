<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;

class Contactinfo extends Model
{
    use HasFactory;
    use Loggable;

    protected $fillable =[
        'address',
        'address_ar',
        'phone',
        'email',
      
    ];
}
