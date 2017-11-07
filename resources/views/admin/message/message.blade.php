                    @extends('admin.public.parent')
                        @section('content')
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">个人留言列表</div>


                            </div>
                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <a href="message_add">
                                                <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                                </a>
                                                <!-- <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-save"></span> 保存</button> -->
                                                <!-- <a href="examine">
                                                <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
                                                </a> -->
                                                <!-- <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                   <!--  <div class="am-form-group tpl-table-list-select">
                                        <select data-am-selected="{btnSize: 'sm'}">
              <option value="option1">个人浏览意见</option>
              <option value="option2">平台问题</option>
              <option value="option3"></option>
              <option value="option3">笔记本电脑</option>
              <option value="option3">平板电脑</option>
              <option value="option3">只能手机</option>
              <option value="option3">超极本</option>
            </select>
                                    </div> -->
                                </div>
                                <form action="{{ url('admin/message') }}">
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                         <input type="text" class="am-form-field " name="user_name">
                                        <span class="am-input-group-btn">
                                     <input type="submit" class='am-btn am-btn-primary tpl-btn-bg-color-success ' value='搜索'>
                                  </span>
                                    </div>
                                </div>
                                </form>
                                         
                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>会员昵称</th>
                                                <th>摘要</th>
                                                <th>留言信息</th>
                                                <th>时间</th>
                                                
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if (session('msg'))
                                             <script>
                                                 alert("{{ session('msg') }}");

                                           </script>
                                         @endif

                                            @foreach($list as $v)
                                            <tr class="gradeX">
                                                <td>{{ $v->id }}</td>
                                                <td>{{ $v->user_name }}</td>
                                                <td>{{ $v->main }}</td>
                                                <td>{{ $v->content }}</td>
                                                <td>{{ $v->time }}</td>
                                             
                                                <td>
                                                <div class="tpl-table-black-operation">
                                                        <a href="/message_edit?id={{$v->id}}">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="/message_del?id={{$v->id}}" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                        <!-- <a href="/message_examine?id={{$v->id}}">
                                                            <i class="am-icon-circle"></i> 审核
                                                        </a> -->
                                                    </div>
                                                </td>
                                            </tr>
                                          @endforeach  
                                        </tbody>
                                    </table>
                                </div>
                                <div class="am-u-lg-12 am-cf">

                                    <div class="am-fr">
                                        <ul class="am-pagination tpl-pagination">
                                            {!! $list->fragment('foo')->render() !!}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    @endsection