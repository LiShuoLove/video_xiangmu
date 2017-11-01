<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'history';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $guarded = [];
}
