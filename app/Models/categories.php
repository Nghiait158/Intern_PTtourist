<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    public $timestamps=false;

    protected $fillable=[
        'name','description'
    ];

    protected $primaryKey='categoryID';
    protected $table='categories';
}
