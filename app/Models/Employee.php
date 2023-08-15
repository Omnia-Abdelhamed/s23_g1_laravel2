<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    // protected $table="employees";
    protected $primaryKey = 'SSN';
    // protected $hidden=['created_at','updated_at'];
    protected $fillable=['SSN','fname','lname','gender','email','dno'];
}
