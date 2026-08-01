<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $table = 'students';
    protected $fillable = [
        'first_name',
        'last_name',
        'parent_id',
        'class_id',
        'email',
        'phone_number',
        'created_at',
        'updated_at',
        'gender',
        'address',
        'age',

    ];

    public function parent_detail()
    {
        return $this->hasMany(ParentDetail::class, 'parent_id', 'id');
    }
}
