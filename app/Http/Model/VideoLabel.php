<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class VideoLabel extends Model
{
    protected $table = 'video_label';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;
}
