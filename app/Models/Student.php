<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
    'nis', 'name', 'birth_date', 'gender',
    'parent_name', 'phone', 'address',
    'photo', 'classroom_id'
];

public function classroom() {
    return $this->belongsTo(Classroom::class);
}

public function attendances() {
    return $this->hasMany(Attendance::class);
}
}
