<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diemthi extends Model
{
    protected $table = 'diemthi';
    protected $primaryKey = 'id';
    public $fillable = [
        'student_id',
        'subject',
        'score',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
