
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
                                <div class="widget-title am-fl">视频上传管理</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form id="art_form" class="am-form tpl-form-line-form" action="{{ url('admin/lists') }}" method='post' enctype="multipart/form-data"">
                                	{{ csrf_field() }}
                                	<div class="am-form-group">
                                        <label for="user-phone"  class="am-u-sm-3 am-form-label">视频状态 </label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{searchBox: 1}" style="display: none;" name="video_status">
                                                <option value="1">普通视频</option>
                                                <option value="2">VIP视频</option>
                                           
                                            </select>

                                        </div>
                                    </div>



                                   <div class="am-form-group">
                                        <label for="user-phone"  class="am-u-sm-3 am-form-label">视频类 </label>
                                        <div class="am-u-sm-9" >
									            <select data-am-selected="{searchBox: 1}" style="display: none;" name="category_id">
                                                <option value="1">动作</option>
                                                <option value="2">爱情</option>
                                                <option value="3">惊悚</option>
                                                <option value="4">喜剧</option>
                                           
                                            </select>

                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-weibo"  class="am-u-sm-3 am-form-label">视频名称 </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" id="user-weibo" placeholder="请填写视频名称" name='video_info_name'>
                                            <div>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="am-form-group">
                                        <label for="user-email"  class="am-u-sm-3 am-form-label">发布时间 </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="am-form-field tpl-form-no-bg" placeholder="发布时间" data-am-datepicker="" readonly="" name='created_at'>
                                            <small>发布时间为必填</small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">封面图 </label>
                                        <div class="am-u-sm-9">
                                             <div class="result_wrap">
                                                <div class="am-form-group am-form-file">
                                                    <input type="text" size="50" name="video_original" id="video_original">
                                                    <input id="file_upload" name="file_upload" type="file" multiple="true">
                                                    <p><img id="img1" alt="上传后显示图片"  style="max-width:350px;max-height:100px;" /></p>
                                                </div>
										    </div>

                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">视频文件</label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">

                                                <div id="upload">

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">演员介绍 </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" id="user-weibo" placeholder="请添加视频演员名单" name='video_info_starring'>
                                            <div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">视频内容介绍</label>
                                        <div class="am-u-sm-9">
                                            <textarea class="" rows="10" id="user-intro" placeholder="请输入视频内容介绍" name='video_info_plot'></textarea>
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
<script type="text/javascript">
    $(function () {
        $("#file_upload").change(function () {
            uploadImage();
        })
    })
    function uploadImage() {
//  判断是否有选择上传文件
        var imgPath = $("#file_upload").val();
        if (imgPath == "") {
            alert("请选择上传图片！");
            return;
        }
        //判断上传文件的后缀名
        var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);
        if (strExtension != 'jpg' && strExtension != 'gif'
            && strExtension != 'png' && strExtension != 'bmp') {
            alert("请选择图片文件");
            return;
        }
        var formData = new FormData($('#art_form')[0]);
        $.ajax({
            type: "POST",
            url: "/admin/upload",
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                $('#img1').attr('src','/'+data);
                $('#video_original').val(data);
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert("上传失败，请检查网络后重试");
            }
        });
    }
</script>
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/Huploadify.css')}}"/>
<script type="text/javascript" src="{{ asset('admin/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/js/jquery.Huploadify.js')}}"></script>
<style type="text/css">
</style>

<script type="text/javascript">
    $(function () {
        $("#file_upload").change(function () {
            uploadImage();
        })
    })
    function uploadImage() {
    //  判断是否有选择上传文件
        var imgPath = $("#file_upload").val();
        if (imgPath == "") {
            alert("请选择上传图片！");
            return;
        }
        //判断上传文件的后缀名
        var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);
        if (strExtension != 'jpg' && strExtension != 'gif'
            && strExtension != 'png' && strExtension != 'bmp') {
            alert("请选择图片文件");
            return;
        }
        var formData = new FormData($('#art_form')[0]);
        $.ajax({
            type: "POST",
            url: "/admin/upload",
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                $('#img1').attr('src','/'+data);
                $('#art_thumb').val(data);
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert("上传失败，请检查网络后重试");
            }
        });
    }
</script>



@endsection
