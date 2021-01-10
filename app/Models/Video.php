<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $table = 'videos';
    public  $timestamps = true;

    protected $fillable = [
        'video_name',
        'author',
        'description',
        'image',
        'created_at',
        'author_id'
    ];
}
