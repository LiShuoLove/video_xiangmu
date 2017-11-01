<?php

namespace App\Http\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //关联表名
    protected $table = 'admin';
    //自动维护时间字段
    public $timestamps = true;
   //设置批量赋值字段白名单
    protected $fillable = [
        'username', 'pass', 'name','email','phone','role','status','sex','login_time'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    //设置批量赋值字段黑名单
   /* protected $hidden = [
        'password', 'remember_token',
    ];*/
}
