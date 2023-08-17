<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;
    // protected $table="employees";
    protected $primaryKey = 'SSN';
    // protected $hidden=['created_at','updated_at'];
    protected $fillable=['SSN','fname','lname','gender','email','dno','image'];

    public function department(){
        return $this->belongsTo(Department::class,'dno'); // select * from departments where dno = 10
    }

    public function projects(){ //
        return $this->belongsToMany(Project::class,'employee_project','employee_id','project_id','SSN','pno');
    }

    public function skills(){
        return $this->hasMany(Skill::class,'ssn');
    }
}
