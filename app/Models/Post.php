<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps=false;

    protected $fillable=[
        'title','content','imgID','categoryID','author'
    ];

    protected $primaryKey='postID';

    
    protected $table='posts';
}
    