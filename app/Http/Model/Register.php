<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    //前台用户模型
    protected $table = 'user_register';
    protected  $primaryKey = 'id';
    public $timestamps = 'false';

    protected $guarded = [];
}
   
