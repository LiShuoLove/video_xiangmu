
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
                                <div class="widget-title am-fl">修改视频</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form id="art_form" class="am-form tpl-form-line-form" action="{{ url('admin/lists/'.$data_video_info->id)}}" method='post' enctype="multipart/form-data">
                                	{{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                	<div class="am-form-group">
                                        <label for="user-phone"  class="am-u-sm-3 am-form-label">视频状态 </label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{searchBox: 1}" style="display: none;" name='video_status' value='{{$data_video_info->video_status}}'>
                                                <option value="1" <?php echo $data_video_info->video_status == 1 ? 'selected' : '';?>>普通视频</option>
                                                <option value="2" <?php echo $data_video_info->video_status == 2 ? 'selected' : '';?>>VIP视频</option>
                                           
                                            </select>

                                        </div>
                                    </div>



                                   <div class="am-form-group">
                                        <label for="user-phone"  class="am-u-sm-3 am-form-label">视频类 </label>
                                        <div class="am-u-sm-9">
                                            
									           <select data-am-selected="{searchBox: 1}" style="display: none;" name="category_id" value="{{$data_video_info->category_id}}">
                                                <option value="1" <?php echo $data_video_info->category_id == 1 ? 'selected' : '';?> >动作</option>
                                                <option value="2" <?php echo $data_video_info->category_id == 2 ? 'selected' : '';?> >爱情</option>
                                                <option value="3" <?php echo $data_video_info->category_id == 3 ? 'selected' : '';?> >惊悚</option>
                                                <option value="4" <?php echo $data_video_info->category_id == 4 ? 'selected' : '';?> >喜剧</option>
                                           
                                            </select>
									           
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-weibo"  class="am-u-sm-3 am-form-label">视频名称 </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" id="user-weibo" name="video_info_name" value="{{$data_video_info->video_info_name}}" placeholder="请添加视频名称">
                                            <div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="am-form-group">
                                        <label for="user-email"  class="am-u-sm-3 am-form-label">发布时间 </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="am-form-field tpl-form-no-bg" placeholder="发布时间" data-am-datepicker="" readonly="" name="created_at" value="{{$data_video_info->created_at}}">
                                            <small>发布时间为必填</small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">封面图 </label>
                                        <div class="am-u-sm-9">
                                            <div class="result_wrap">
										        <div class="am-form-group am-form-file">
                                                    <div class="tpl-form-file-img">
                                                        <input type="text"  name="video_original" value="{{$data_video_info->video_original}}" id="video_original" style="width:25%">
                                                        <img src="{{asset('./'.$data_video_info->video_original)}}" style="width:350px;" class="tpl-table-line-img" alt="">
                                                    </div>
                                                       
                                                        
                                                </div>
										    </div>

                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">视频文件 </label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">
                                                <div class="tpl-form-file-img">
                                                        <input type="text"  name="video_original" value="{{$data_video_info->video_original}}" id="video_original" style="width:25%">
                                                        <img src="{{asset('./'.$data_video_info->video_original)}}" style="width:350px;" class="tpl-table-line-img" alt="">
                                                    </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">演员介绍 </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" id="user-weibo" placeholder="请添加视频演员名单" name="video_info_starring" value="{{$data_video_info->video_info_starring}}">
                                            <div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">视频内容介绍</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" rows="10" id="user-intro"  name='video_info_plot' value="{{$data_video_info->video_info_plot}}"></input>
                                        </div>
                                    </div>
                                    
                                    

                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <input type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success " value="确认上传">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

               


            </div>

   

@endsection