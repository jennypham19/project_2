<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $table = 'major';
    public $timestamps = false;
    protected $primaryKey = 'majorCode';
    public $incrementing = false;
    protected $keyType = 'string';
    
    public function getFullGradeAttribute(){
        return $this->nameClass.$this->courseCode;
    }
}
