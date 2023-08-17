<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $primaryKey = 'dno';

    public function employees(){
        return $this->hasMany(Employee::class,'dno'); // select * from employees where dno=10
    }
}
