<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    use HasFactory;
    public $timestamps=true;

    protected $fillable=[
        'title',
        'file_path'
    ];

    protected $primaryKey='docID';

    
    protected $table='docs';
}
