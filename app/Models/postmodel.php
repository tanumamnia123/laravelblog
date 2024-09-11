<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    use HasFactory;
    // the table associate with model
    
    protected $table = "posts";

    // the table filed name assign 

   protected $fillable = [
        'author_name',
        'title',
        'content'
    ];
}
