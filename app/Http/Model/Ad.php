<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    //广告管理模型
    protected $table = 'ad';
    protected $primaryKey = "id";
    public $timestamps = 'ture';
    public $guarded=[];
}
