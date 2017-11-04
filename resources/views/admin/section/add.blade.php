@extends('admin.public.parent')

@section('content')
<!-- 菜单 -->
        
            <div class="row-content am-cf">
                <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">添加版块</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-border-form tpl-form-border-br" action="{{ url('/admin/section_add') }}" method="post">

                                {{ csrf_field() }}
                                    
                                    <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">分区 <span class="tpl-form-line-small-title">partition</span></label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{searchBox: 1}" name="partname" style="display: none;">
                                                <option value="0">请选择</option>
                                            @foreach($list as $c)
                                                <option value="{{ $c->partname }}">
                                                    {{ $c->partname }}
                                                </option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">版块名 <span class="tpl-form-line-small-title">sectname</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="sectname" class="tpl-form-input" id="user-name" placeholder="请输入版块名">
                                        </div>
                                    </div> 

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