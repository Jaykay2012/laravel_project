<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentDetail extends Model
{
    use HasFactory;

    protected $table = 'parents';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'created_at',
        'updated_at',
    ];
}
