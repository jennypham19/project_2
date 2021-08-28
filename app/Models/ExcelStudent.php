<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExcelStudent extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'studentCode','email','passWord','firstName','middleName','lastName','dateOfBirth','genDer','phone','address','dateEnrollment','classCode'
    ];
    protected $primaryKey = 'studentCode';
    protected $table = 'student';
    public $incrementing = 'false';
}
