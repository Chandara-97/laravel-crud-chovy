<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarshipMaster extends Model
{
    use HasFactory;
    protected $table = 'scholarship_masters';
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
