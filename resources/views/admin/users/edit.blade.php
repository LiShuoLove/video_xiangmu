
                    @extends('admin.public.parent')
                        @section('content')


                    <div class="widget-body am-fr">
                                           
                                <form class="am-form tpl-form-border-form tpl-form-border-br" action="{{ url('admin/users/'.$user->id )}}" method='post'>
                                                  {{ csrf_field() }}
                                                    {{ method_field('PUT') }}
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">用户id <span class="tpl-form-line-small-title">user_id</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="" name='user_id' value="{{$user->user_id}}" placeholder="请输入用户id">
                                            
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">用户名<span class="tpl-form-line-small-title">username</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name='username' value="{{$user->username}}" placeholder="输入您的用户名" >
                                            <small>用户名5-10个字段</small>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">电子邮箱<span class="tpl-form-line-small-title">email</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name='email'  value="{{$user->email}}" placeholder="输入您的电子邮箱">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">手机号<span class="tpl-form-line-small-title">phone</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name='tel' value="{{$user->tel}}" placeholder="输入您的手机号">
                                        </div>
                                    </div>


                                    <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">会员 <span class="tpl-form-line-small-title">status</span></label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{searchBox: 1}" style="display: none;" name='users_status'>
                                                  <option value="1" @if($user->users_status == 1) selected @endif>普通会员</option>
                                                  <option value="2" @if($user->users_status == 2) selected @endif>VIP会员</option>
                                                </select>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">生日<span class="tpl-form-line-small-title">birthday</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="am-form-field tpl-form-no-bg" placeholder="生日时间"  value="{{$user->birthday}}" data-am-datepicker="" readonly="" name='birthday'>
                                            <small>生日时间必填</small>
                                        </div>
                                    </div>
                                    

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">注册时间<span class="tpl-form-line-small-title">created_at</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="am-form-field tpl-form-no-bg" placeholder="注册时间"  value="{{$user->created_at}}" data-am-datepicker="" readonly="" name='created_at'>
                                            <small>注册时间必填</small>
                                        </div>
                                    </div>

                                   

                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            
                                           
                                            <input type="submit" class='am-btn am-btn-primary tpl-btn-bg-color-success ' value='修改用户'>
                                           
                                        </div>
                                    </div>
                                </form>
                            </div>


                                @endsection
