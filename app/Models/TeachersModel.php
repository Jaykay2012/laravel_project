<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeachersModel extends Model
{
    use HasFactory;

    protected $table = 'teachers';
    protected $fillable = [
        'name',
        'subject',
        'classes',
        'created_at',
        'updated_at',
    ];
}
