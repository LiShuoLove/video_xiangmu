                         @extends('admin.public.parent')
                        @section('content')

        <!-- 内容区域 -->


            <div class="row-content am-cf">


                <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">信息完善</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-border-form tpl-form-border-br" action="{{ url('/user_perfect') }}" method='post'>
                                      {{ csrf_field() }}
                                      

                                    <div class="am-form-group">
                                        <div class="am-form-group">
                                            <label for="user-name" class="am-u-sm-3 am-form-label">id <span class="tpl-form-line-small-title">id</span></label>
                                            <div class="am-u-sm-9">
                                                <input type="text" class="tpl-form-input" name="id" value="{{ $list->id }}" disabled>
                                            </div>
                                        </div>
                                    </div>


                                <div class="am-form-group">
                                        <div class="am-form-group">
                                            <label for="user-name" class="am-u-sm-3 am-form-label">用户ID <span class="tpl-form-line-small-title">user_id</span></label>
                                            <div class="am-u-sm-9">
                                                <input type="text" class="tpl-form-input" name="id" value="{{ $list->user_id }}" disabled>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="am-form-group">
                                        <div class="am-form-group">
                                            <label for="user-name" class="am-u-sm-3 am-form-label">用户名 <span class="tpl-form-line-small-title">username</span></label>
                                            <div class="am-u-sm-9">
                                                <input type="text" class="tpl-form-input" name="username" value="{{ $list->username }}">
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <div class="am-form-group">
                                        <div class="am-form-group">
                                            <label for="user-name" class="am-u-sm-3 am-form-label">真实姓名 <span class="tpl-form-line-small-title">realname</span></label>
                                            <div class="am-u-sm-9">
                                                <input type="text" class="tpl-form-input" name="realname" value="{{ $list->realname }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <div class="am-form-group">
                                            <label for="user-name" class="am-u-sm-3 am-form-label">密码 <span class="tpl-form-line-small-title">password</span></label>
                                            <div class="am-u-sm-9">
                                                <input type="text" class="tpl-form-input" name="password" value="{{ $list->password }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <div class="am-form-group">
                                            <label for="user-name" class="am-u-sm-3 am-form-label">邮箱 <span class="tpl-form-line-small-title">email</span></label>
                                            <div class="am-u-sm-9">
                                                <input type="text" class="tpl-form-input" name="email" value="{{ $list->email }}">
                                            </div>
                                        </div>
                                    </div>



                                    <div class="am-form-group">
                                        <div class="am-form-group">
                                            <label for="user-name" class="am-u-sm-3 am-form-label">电话 <span class="tpl-form-line-small-title">tel</span></label>
                                            <div class="am-u-sm-9">
                                                <input type="text" class="tpl-form-input" name="tel" value="{{ $list->tel }}">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="am-form-group">
                                        <div class="am-form-group">
                                            <label for="user-name" class="am-u-sm-3 am-form-label">创建时间 <span class="tpl-form-line-small-title"></span></label>
                                            <div class="am-u-sm-9">
                                                <input type="text" class="tpl-form-input" name="created_at" value="{{ $list->created_at }}">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="am-form-group">
                                        <div class="am-form-group">
                                            <label for="user-name" class="am-u-sm-3 am-form-label">生日<span class="tpl-form-line-small-title">birthday</span></label>
                                            <div class="am-u-sm-9">
                                                <input type="text" class="tpl-form-input" name="email" value="{{ $list->birthday }}">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">状态</label>
                                        <div class="am-u-sm-9">
                                            <div class="tpl-switch">
                                                <input type="checkbox" class="ios-switch bigswitch tpl-switch-btn" checked="">
                                                <div class="tpl-switch-btn-view">
                                                    <div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                               

                                  
<!-- 
                                    <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">状态 <span class="tpl-form-line-small-title">state</span></label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{searchBox: 1}" name="state" style="display: none;">
                                                <option value="0">0</option>
                                                <option value="1" selected>1</option>
                                            </select>
                                        </div>
                                    </div>  -->

                                        
                                      

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
                