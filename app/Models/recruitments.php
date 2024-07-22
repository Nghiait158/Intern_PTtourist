<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruitments extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $fillable=[
        'position','description','requirements','publishedDate','contactInfo','numsOfRecruits','workPlace','dateStartWork','benefits','age','academicLevel','request_Doc'
    ];

    protected $primaryKey='	recruitmentID';
    protected $table='recruitments';
}
