<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    use HasFactory;

    protected $table = 'class';
    protected $fillable = [
        'name',
        'description',
        'form_teacher_id',
        'created_at',
        'updated_at',
    ];
    public function teacher_detail()
    {
        return $this->hasOne(TeachersModel::class, 'id',  'form_teacher_id');
    }
}
