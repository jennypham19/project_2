<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table = 'subject';
    public $timestamps = false;
    public $primaryKey = 'numberSubject';

    public function getNameFinalAttribute()
    {
        if ($this->final==1){
            return "Có";
        }else{
            return "Không";
        }
    }

    public function getNameSkillAttribute()
    {
        if ($this->skill==1){
            return "Có";
        }else{
            return "Không";
        }
    }

}
