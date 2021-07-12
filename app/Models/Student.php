<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'student';
    public $timestamps = false;
    public $primaryKey = 'studentCode';

    public function getFullGradeAttribute()
    {
        return $this->nameClass . $this->nameCourse;
    }

    public function getFullNameAttribute()
    {
        return $this->lastName. " ".$this->middleName." ".$this->firstName;
    }

    public function getGenderAttribute()
    {
        if ($this->genDer==1) {
            return "Nam";
        } else {
            return "Nữ";
        }
        
    }

    public function getStatusAttribute()
    {
        if ($this->status==1) {
            return "Hoạt động";
        } else {
            return "Không hoạt động";
        }
        
    }
}
