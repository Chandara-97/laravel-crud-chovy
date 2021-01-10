<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarshipBachelor extends Model
{
    use HasFactory;
    protected $table = 'scholarship_bachelors';
    public  $timestamps = true;
    protected $fillable = [

        'country_name',
        'category',
        'image',
        'description',
        'author',
        'author_id',
        'created_at',
    ];
}
