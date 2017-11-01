<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    //
    protected $table = 'my_links';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $guarded = [];
}
