<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'event';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;
   
}
