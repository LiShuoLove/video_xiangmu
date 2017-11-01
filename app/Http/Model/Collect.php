<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Collect extends Model
{
    protected $table = 'user_collect';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;
}
