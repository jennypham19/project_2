<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarkResit extends Model
{
    use HasFactory;
    protected $table = 'mark_resit';
    public $timestamps = false;
    public $primaryKey = 'number';

    public function getFullNameAttribute()
    {
        return $this->lastName. " ".$this->middleName." ".$this->firstName;
    }
}
