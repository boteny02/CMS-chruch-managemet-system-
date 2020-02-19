<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable=['user_id','firstname','middle','lastname','address','zone_id','city','phonenumber','email','dateofbirth','gender','maritalstatus','department_id',];
}
