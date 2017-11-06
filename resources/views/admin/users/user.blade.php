            @extends('admin.public.parent')
                        @section('content')

        <!-- 内容区域 -->

            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">用户列表</div>


                            </div>
                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                    <div class="am-form-group tpl-table-list-select">
                                        <select data-am-selected="{btnSize: 'sm'}">
                                              <option value="option1">所有类别</option>
                                              <option value="option2">IT业界</option>
                                              <option value="option3">数码产品</option>
                                              <option value="option3">笔记本电脑</option>
                                              <option value="option3">平板电脑</option>
                                              <option value="option3">只能手机</option>
                                              <option value="option3">超极本</option>
                                            </select>
                                    </div>
                                </div>
                                <form action="{{ url('users') }}">
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                         <input type="text" class="am-form-field " name="username">
                                        <span class="am-input-group-btn">
                                     <input type="submit" class='am-btn am-btn-primary tpl-btn-bg-color-success ' value='搜索'>
                                  </span>
                                    </div>
                                </div>
                                </form>
                                         @if (session('msg'))
                                    <script>
                                        alert("{{ session('msg') }}");

                                    </script>
                                @endif
                             <form name='myform' action="" method='post' style='display:none'>
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                   
                                                 </form>
                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                    <div class="am-form-group tpl-table-list-select">
                                         状态<select data-am-selected="{btnSize: 'sm'}" name="user_status">
                                                 <option value="1">普通会员</option>
                                                 <option value="2">VIP会员</option>
                                            </select>
                                    </div>
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>用户iD</th>
                                                <th>用户名</th>
                                                <th>邮箱</th>
                                                <th>手机号</th>
                                                <th>状态</th>
                                                <th>生日</th>
                                                <th>时间</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        @foreach ( $users as $v)
                                            <tr class="gradeX">
                                                <td>{{ $v->id}}</td>
                                                <td>{{ $v->user_id}}</td>
                                                <td>{{ $v->username}}</td>
                                                <td>{{ $v->email}}</td>
                                                <td>{{ $v->tel}}</td>
                                                <td>{{ ($v->users_status == 1)?'普通会员':'VIP会员' }}</td>
                                                <td>{{ $v->birthday}}</td>
                                                <td>{{ $v->created_at}}</td>
                                                

                                              
                                                <td>
                                                    <div class="tpl-table-black-operation">
                                                        <a href="{{url('/users/create')}}">
                                                            <i class="am-icon-pencil"></i> 增加
                                                        </a>
                                                        
                                                        <a href="{{url('users/'.$v->id .'/edit')}}" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 修改
                                                        </a>
                                                        <a href="javascript:doDel({{ $v->id }})" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                        
                                                    </div>
                                                </td>
                                            </tr>

                                @endforeach
                                             



                                            <!-- more data -->
                                        </tbody>
                                    </table>
                                {!! $users->fragment('foo')->render() !!}
                                 
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
                        form.action = 'users/'+id;
                        form.submit();
                    }
                            
                }
     </script>

    @endsection
