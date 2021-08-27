<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;
    protected $table = 'mark';
    public $timestamps = false;
    public $primaryKey = 'number';

    public function getFullNameAttribute()
    {
        return $this->lastName. " ".$this->middleName." ".$this->firstName;
    }

    public function getNoteAttribute(){
        if($this->mark_final >=5 && $this->mark_skill <=5){
            return "Thi lại thực hành";
        }else if($this->mark_final <=5 && $this->mark_skill >=5){
            return "Thi lại lý thuyết";
        }else if($this->mark_final >=5 && $this->mark_skill >=5 ){
            return "Qua";
        }else{
            return "Thi lại";
        }
    }
}
