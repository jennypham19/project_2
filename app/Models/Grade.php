<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $table = 'grade';
    public $timestamps = false;
    public $primaryKey = 'classCode';

    public function getFullGradeAttribute(){
        return $this->nameClass.$this->nameCourse;
    }
}
