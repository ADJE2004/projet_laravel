<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 
        'content',
        'post_id',
        'author_name',
    ];

    public  function comments(){
        return $this->belongsTo(comments::class, 'post_id');
    }
}
