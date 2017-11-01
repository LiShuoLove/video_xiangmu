<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ConfigController extends Controller
{
    //图片上传
    public function upload()
    {
        $file = Input::file('file_upload');
        if($file->isValid()){
            $entension = $file->getClientOriginalExtension();//上传文件的后缀名
            $newName = date('YmdHis').mt_rand(1000,9999).'.'.$entension;
            $path = $file->move(public_path().'/uploads',$newName);
            $filepath = 'uploads/'.$newName;
            return  $filepath;
        }
    }

    public function putFile()
    {
        $array = [];
        $config = Config::first();
        $array['logo'] = $config->logo;
        $array['title'] = $config->title;
        $array['keyword'] = $config->keyword;
        $array['description'] = $config->description;
        $array['copyight'] = $config->copyight;
        $str = '<?php return '.var_export($array,true).';';
        $path = base_path().'\config\web.php';
        file_put_contents($path,$str);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Config::get();
        return view('admin.config.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.config.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except('_token','file_upload');
        $re = Config::create($input);
        if($re){
            return redirect('admin/config');
        }else{
            return back()->with('errors','友情链接添加失败');
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
        $config = Config::find($id);
        return view('admin.config.edit',compact('config'));
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
        $input = Input::except('_token','_method','file_upload');
        $config = Config::find($id);
        $re = $config->update($input);
        if($re){
            $this->putFile();
            return redirect('admin/config');
        }else{
            return back()->with('errors','友情链接修改失败');
        }
    }

    /**
     * Remove the specified resource from storage//登录.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $re = Config::where('id',$id)->delete();
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
