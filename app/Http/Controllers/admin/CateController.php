<?php

namespace App\Http\Controllers\Admin;


use App\Http\Model\Cate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = (new Cate)->tree();
        return view("admin.adminCate.index",compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate_one = Cate::where('pid',0)->get();
        return view("admin.adminCate.add",compact('cate_one'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = Input::except('_token');

        if(Input::get('pid')==0) {
            $input['path'] = Input::get('pid').',';
           // dd(Input::get('pid'));
        }else{
            $input['path'] = '0,'.Input::get('pid') .',';
            //dd(Input::get('pid'));
        }
        $re = Cate::create($input);

        if($re){
            return redirect('admin/cate');
        }else{
            return back()->with('msg','分类添加失败')->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cate = Cate::find($id);

        //dd($cate);
        return view("admin.adminCate.edit",compact('cate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = Input::except('_token');
        //拼接路径
        $input['path'] = '0,'.Input::get('pid') .',';

        $re = Cate::create($input);

        if($re){
            return redirect('admin/cate');
        }else{
            return back()->with('msg','分类添加失败')->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $re = Cate::where('id',$id)->delete();
        //找到这个分类下的二级类
//        Cate::where('cate_pid',$id)->update(['cate_pid',0]);

        if($re){
            $data =[
                'status'=>0,
                'msg'=>'删除成功'
            ];
        }else{
            $data =[
                'status'=>1,
                'msg'=>'删除失败'
            ];
        }
        return $data;
    }

}
