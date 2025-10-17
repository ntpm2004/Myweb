<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Notifications\Notifiable;

class StudentModel extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'students';

    protected $fillable = ['name', 'age', 'class'];
}
