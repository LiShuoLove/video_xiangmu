<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Idea;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idea = Idea::all();
        return view("admin.adminIdea.index",compact('idea'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $data = Idea::find($id);

        //dd($cate);
        return view("admin.adminIdea.edit",compact('data'));
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
        $data = Input::get('reply');
        $data['status'] = 1;
        $data['admin_id'] = session()->get('user')->id;
        $re = Idea::create($data);

        if($re){
            return redirect('admin/ideas');
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
        $re = Idea::where('id',$id)->delete();


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

    public function add(Request $request)
    {
        $input = $request->except('_token');
        Idea::create($input);

    }
}
