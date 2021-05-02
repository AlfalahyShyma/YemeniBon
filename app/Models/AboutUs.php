<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    protected $fillable =[
       
        'multi_image',
        'initiative_ar_desc',
        'initiative_desc',
      
        'Training_desc',
        'Training_ar_desc',
      
        'objectives_ar_desc',
        'objectives_desc',
        

    ];
}
