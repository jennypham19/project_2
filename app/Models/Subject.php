<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table = 'subject';
    public $timestamps = false;
    public $primaryKey = 'subjectCode';

    public function getFinalAttribute()
    {
        if ($this->isFinal==1){
            return "Yes";
        }else{
            return "No";
        }
    }

    public function getSkillAttribute()
    {
        if ($this->isSkill==1){
            return "Yes";
        }else{
            return "No";
        }
    }

    public function getFullSemesterAttribute()
    {
        return $this->nameSemester."/".$this->year1."-".$this->year2;
    }
}
