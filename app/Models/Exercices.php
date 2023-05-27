<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercices extends Model
{
    use HasFactory;
    protected $connection = 'mysql2';
    protected $table = 'exercices';

    protected $fillable = [
        'images',
        'description',
        
    ];
}