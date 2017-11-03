                         @extends('admin.public.parent')
                        @section('content')

        <!-- 内容区域 -->


            <div class="row-content am-cf">


                <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">个人留言修改</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-border-form tpl-form-border-br" action="{{ url('admin/message_edit') }}" method='post'>
                                      {{ csrf_field() }}
                                      @foreach($list as $v)
                                

                                    <div class="am-form-group">
                                        <div class="am-form-group">
                                            <label for="user-name" class="am-u-sm-3 am-form-label">id <span class="tpl-form-line-small-title">id</span></label>
                                            <div class="am-u-sm-9">
                                                <input type="text" class="tpl-form-input" name="id" value="{{ $v->id }}" disabled>
                                            </div>
                                        </div>
                                    </div>






                                    <div class="am-form-group">
                                        <div class="am-form-group">
                                            <label for="user-name" class="am-u-sm-3 am-form-label">会员昵称 <span class="tpl-form-line-small-title">name</span></label>
                                            <div class="am-u-sm-9">
                                                <input type="text" class="tpl-form-input" name="user_name" value="{{ $v->user_name }}">
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <!-- <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">是否隐藏文章</label>
                                        <div class="am-u-sm-9">
                                            <div class="tpl-switch">
                                                <input type="checkbox" class="ios-switch bigswitch tpl-switch-btn" checked="">
                                                <div class="tpl-switch-btn-view">
                                                    <div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->



                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">留言信息</label>
                                        <div class="am-u-sm-9">
                                            
                                            <input type="text" name="content" rows="29" value="{{ $v->content }}">
                                        </div>
                                    </div>
                               

                                     <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">发布时间 <span class="tpl-form-line-small-title">Time</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="time" class="am-form-field tpl-form-no-bg" value="{{ $v->time }}" data-am-datepicker="" readonly="">
                                            <small>发布时间为必填</small>
                                        </div>
                                    </div>

                                   <!--  <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">状态 <span class="tpl-form-line-small-title">state</span></label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{searchBox: 1}" name="state" style="display: none;">
                                                <option value="0">0</option>
                                                <option value="1" selected>1</option>
                                            </select>
                                        </div>
                                    </div>  -->

                                        <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">摘要 <span class="tpl-form-line-small-title">Title</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="main" class="tpl-form-input" value="{{ $v->main }}">
                                            <small>请填写标题文字10-20字左右。</small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">添加分类 <span class="tpl-form-line-small-title">Type</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="type" id="user-weibo" value="{{ $v->type }}">
                                        </div>
                                    </div>
                                      @endforeach

                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <input type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success " value="提交">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

 @endsection
                