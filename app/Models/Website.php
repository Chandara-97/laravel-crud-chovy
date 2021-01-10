<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;
    protected $table = 'websites';
    public  $timestamps = true;

    protected $fillable = [
        'website_name',
        'author',
        'description',
        'image',
        'created_at',
        'author_id'
    ];
}
