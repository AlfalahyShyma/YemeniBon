<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutTrainee extends Model
{
    use HasFactory;
    protected $fillable =[
        'Trainers_ar',
        'Trainers',
        'Trainers_name_ar',
        'Trainers_name',
        'Trainers_job_ar',
        'Trainers_job',
    ];
}
