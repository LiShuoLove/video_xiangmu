<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;
    public function video()
    {
        return $this->hasMany('App\Http\Model\video','cate_id');
    }
    //给分类排序
    public function tree(){
        //$category =  $this->orderBy('path')->get();
        //dd($category);
        $category =\DB::select("select * from category order by concat(path,id)");
        return  $this->getTree($category,0);
    }
    //给分类名称添加缩进
    public function getTree($cate,$pid = 0){
        $arr = array();
        foreach($cate as $k=>$v){
            //        遍历一级分类

            if($v->pid == $pid){
                $arr[$k]['cate_name'] = $cate[$k]->cate_name;
                $arr[$k]['pid'] = $cate[$k]->pid;
                $arr[$k]['id'] = $cate[$k]->id;
                $arr[$k]['path'] = $cate[$k]->path;
                foreach ($cate as $m=>$n){
                    if($v->id == $n->pid){
                        $arr[$m]['cate_name'] = "&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;|--".$cate[$m]->cate_name;
                        $arr[$m]['pid'] = $cate[$m]->pid;
                        $arr[$m]['id'] = $cate[$m]->id;
                        $arr[$m]['path'] = $cate[$m]->path;
                    }
                }
            }
        }
        return $arr;
    }

}
