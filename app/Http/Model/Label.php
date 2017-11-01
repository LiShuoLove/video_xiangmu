<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    protected $table = 'label';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;
    public function video()
    {
        return $this->belongsToMany('App\Http\Model\Video',"video_label","video_id","label_id");
        //return $this->belongsToMany('App\Http\Model\Video')->using('App\Http\Model\VideoLabel');

    }
}
