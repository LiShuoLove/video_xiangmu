<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'video_detail';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = true;
    public function label()
    {
        return $this->belongsToMany('App\Http\Model\label')->using('App\Http\Model\VideoLabel');
    }
}
