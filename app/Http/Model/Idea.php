<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    protected $table = 'user_idea';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
