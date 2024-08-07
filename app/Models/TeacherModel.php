<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherModel extends Model
{
    use HasFactory;
    protected $table = 'teachers';
    protected $fillable = [
        'name', 'nik', 'gender', 'birth_place', 'birth_date', 'religion', 'address'
    ];
}