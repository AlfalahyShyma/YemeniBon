<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutContent extends Model
{
    use HasFactory;
    protected $fillable =[
       
        'Trainees_ar',
        'Trainees',
        'Trainees_name_ar',
        'Trainees_name',
        'Trainees_job_ar',
        'Trainees_job',

    ];
}
