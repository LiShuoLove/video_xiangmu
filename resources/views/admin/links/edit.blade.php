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

                                <form class="am-form tpl-form-border-form tpl-form-border-br" action="{{ url('/link_edit') }}" method="post">
                                {{ csrf_field() }}
                                @foreach($list as $v)
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">id <span class="tpl-form-line-small-title">id</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="lid" class="tpl-form-input" id="user-name" value="{{ $v->id }}" disabled>
                                            <input type="hidden" name="id" class="tpl-form-input" id="user-name" value="{{ $v->id }}">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">uid <span class="tpl-form-line-small-title">uid</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="uid" class="tpl-form-input" id="user-name" value="{{ $v->uid }}">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">用户名 <span class="tpl-form-line-small-title">username</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="username" class="tpl-form-input" id="user-name" value="{{ $v->username }}">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">标题 <span class="tpl-form-line-small-title">Title</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="title" class="tpl-form-input" id="user-name" value="{{ $v->title }}">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">内容 <span class="tpl-form-line-small-title">content</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="content" class="tpl-form-input" id="user-name" value="{{ $v->content }}">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">地址 <span class="tpl-form-line-small-title">address</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="address" id="user-weibo" value="{{ $v->address }}">
                                            <div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">状态 <span class="tpl-form-line-small-title">state</span></label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{searchBox: 1}" name="state" style="display: none;">
                                                <option value="0" @if($v->state == 0) selected @endif>0</option>
                                                <option value="1" @if($v->state == 1) selected @endif>1</option>
                                            </select>
                                        </div>
                                    </div>      
                                    
                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">发布时间 <span class="tpl-form-line-small-title">onTime</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="ontime" class="am-form-field tpl-form-no-bg" value="{{ $v->ontime }}" data-am-datepicker="" readonly="">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">结束时间 <span class="tpl-form-line-small-title">offTime</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="offtime" class="am-form-field tpl-form-no-bg" value="{{ $v->offtime }}" data-am-datepicker="" readonly="">
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