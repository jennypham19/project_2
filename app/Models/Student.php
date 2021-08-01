<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'student';
    public $timestamps = false;
    public $primaryKey = 'numberStudent';

    public function getFullGradeAttribute()
    {
        return $this->nameClass . $this->nameCourse;
    }

    public function getFullNameAttribute()
    {
        return $this->lastName. " ".$this->middleName." ".$this->firstName;
    }

    public function getNameGenderAttribute()
    {
        if ($this-> genDer ==1){
            return "Nam";
        }else{
            return "Nữ";
        }
    }


}
