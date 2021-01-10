<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarshipPhd extends Model
{
    use HasFactory;
    protected $table = 'scholarship_phds';
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
