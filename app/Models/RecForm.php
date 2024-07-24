<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'yearOfBirth',
        'place',
        'email',
        'sex',
        'placeOfBirth',
        'phone',
        'facebookLink',
        'CVpath',
        'longDayWork',
        'overtime',
        'placeWorkedBefore',
        'personalExperience',
        'academicLevel',
    ];

    protected $primaryKey='	recFormID';
    protected $table='rec_forms';
}
