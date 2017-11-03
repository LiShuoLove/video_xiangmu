@extends('admin.public.parent')

@section('content')
<!-- 菜单 -->
                            
                    
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">链接列表</div>


                            </div>
                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-9">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <a href="admin/link_add">
                                                    <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                                </a>                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                    
                                </div>
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <input type="text" class="am-form-field ">
                                        <span class="am-input-group-btn">
            <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="button"></button>
          </span>
                                    </div>
                                </div>

                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                    
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>uid</th>
                                                <th>用户名</th>
                                                <th>链接标题</th>
                                                <th>链接内容</th>
                                                <th>链接地址</th>
                                                <th>状态</th>
                                                <th>链接期限</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @if (session('msg'))
                                             <script>
                                                 alert("{{ session('msg') }}");

                                           </script>
                                         @endif
                                         
                                        @foreach($list as $c)
                                            <tr class="gradeX">
                                                <td class="am-text-middle">
                                                    {{ $c->id }}
                                                </td>
                                                <td class="am-text-middle">{{ $c->uid }}</td>
                                                <td class="am-text-middle">
                                                    {{ $c->username }}
                                                </td>
                                                <td class="am-text-middle">{{ $c->title }}</td>
                                                 <td class="am-text-middle">{{ $c->content }}</td>
                                                 <td class="am-text-middle">{{ $c->address }}</td>
                                                 <td class="am-text-middle">{{ $c->state }}</td>
                                                  <td class="am-text-middle">{{ $c->ontime }}—{{ $c->offtime }}</td>
                                                <td class="am-text-middle">
                                                    <div class="tpl-table-black-operation">
                                                        <a href="link_edit?id={{$c->id}}">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="link_del?id={{$c->id}}" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                           <!-- more data -->
                                        </tbody>
                                    </table>
                                </div>
                                <div class="am-u-lg-12 am-cf">

                                    <div class="am-fr">
                                        <ul class="am-pagination tpl-pagination">
                                            <li class="am-disabled"><a href="#">«</a></li>
                                            <li class="am-active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
       
@endsection