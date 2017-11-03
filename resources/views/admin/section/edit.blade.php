@extends('admin.public.parent')

@section('content')
<!-- 菜单 -->
                     
            <div class="row-content am-cf">
                <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">修改链接</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-border-form tpl-form-border-br" action="{{ url('/partition_edit') }}" method="post">
                                {{ csrf_field() }}
                                @foreach($list as $v)
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">id <span class="tpl-form-line-small-title">id</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="fid" class="tpl-form-input" id="user-name" value="{{ $v->id }}" disabled>
                                            <input type="hidden" name="id" class="tpl-form-input" id="user-name" value="{{ $v->id }}">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">分区名 <span class="tpl-form-line-small-title">partname</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="partname" class="tpl-form-input" id="user-name" value="{{ $v->partname }}">
                                        </div>
                                    </div>

                                    @endforeach
                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <input type="submit" value="提交" class="am-btn am-btn-primary tpl-btn-bg-color-success ">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                
@endsection