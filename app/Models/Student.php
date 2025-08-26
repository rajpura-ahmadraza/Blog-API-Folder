<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\StudentController;

class Student extends Model
{
    protected $fillable = ['name', 'email', 'phone','created_at','updated_at'];
}