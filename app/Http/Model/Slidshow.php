<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Slidshow extends Model
{
    public  $table = 'slideshow';
    protected $primaryKey = 'id';
    public $timestamps = 'ture';
    protected $guarded = [];
}
