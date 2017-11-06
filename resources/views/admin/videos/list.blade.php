
@extends('admin.public.parent')
@section('content')
<!-- 内容区域 -->
	
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                        	@if (session('msg'))
                                <script>
                                    alert("{{ session('msg') }}")
                                </script>
                            @endif
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">视频列表</div>
                            </div>
                            <div class="widget-body  am-fr">
                            	<form name="myform" action="" method="post" style="display:none">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form> 
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="tpl-table-black-operation">
                                                <a href="{{url('admin/lists/create')}}">
                                                    <i class="am-icon-pencil"></i> 新增视频
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-6">
                                	<form action="{{url('admin/lists')}}">
                                        <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                         
                                            <input type="text" name="video_info_name" class="am-form-field " placeholder="搜索视频名称">

                                            <span class="am-input-group-btn">
                                                <input class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="submit" value="搜索">
                                            </span>
                                        </div>
                                    </form>
                                </div>

                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>

                                            <tr>
                                                <th>ID</th>
                                                <th>视频状态</th>
                                                <th>视频类</th>
                                                <th>视频名称</th>
                                                <th>视频海报</th>
                                                <th>视频文件</th>
                                                <th>主演</th>
                                                <th>情节</th>
                                               
                                                <th>上传时间</th>
                                                <th>修改时间</th>
                                              
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        	 @foreach ($info as $v)

                                            <tr class="gradeX">
                                                <td class="am-text-middle">{{ $v->id }}</td>
                                                <td class="am-text-middle">{{ ($v->video_status ==1)?'普通视频':'VIP视频' }}</td>
                                                <td class="am-text-middle">{{ $v->typename }}</td>
                                                <td class="am-text-middle">{{ $v->video_info_name }}</td>
                                                
                                                <td>
                                                    <img src="<?php echo '/'.$v->video_original;  ?>" style="width:60px;" class="tpl-table-line-img" alt="">
                                                </td>
                                                <td>
                                                    <video src="<?php echo '/'.$v->video_movie;  ?>" class="tpl-table-line-img" alt="">
                                                </td>
                                                <td class="am-text-middle">{{ $v->video_info_starring }}</td>
                                                <td style="height:50px;  overflow:hidden;width:100px; " class="am-text-middle" >{{ $v->video_info_plot }}</td>
                                               
                                                <td class="am-text-middle">{{ $v->created_at }}</td>
                                                <td class="am-text-middle">{{ $v->updated_at }}</td>
                                             

                                                <td class="am-text-middle">
                                                    <div class="tpl-table-black-operation">
                                                        <a href="{{ url('admin/lists/'.$v->id.'/edit') }}">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="javascript:doDel({{ $v->id }})"class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                         @endforeach
                                            <!-- more data -->
                                        </tbody>
                                    </table>
                                </div>
                                <div class="am-u-lg-12 am-cf">

                                    <div class="am-fr">
                                        {!! $info->appends($where)->render() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <script>
            function doDel(id)
            {
                if(confirm('你确定要删除吗？')){
                    var form = document.myform;
                    form.action = 'lists/'+id;
                    form.submit();
                }
                
            }
        </script>


           
   

@endsection