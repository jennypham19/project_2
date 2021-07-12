<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $table = 'major';
    public $timestamps = false;
    protected $primaryKey = 'majorCode';
    protected $fillable = ['majorCode'];
}
