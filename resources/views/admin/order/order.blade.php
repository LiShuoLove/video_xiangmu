@extends('admin.public.parent')
    @section('content')
            <div class="row">
    <div class="col-lg-12">
        <br>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row"> 
   <div class="col-lg-12"> 
    <div class="panel panel-default"> 
     <div class="panel-heading">
       订单列表
     </div> 
     <!-- /.panel-heading --> 
     <div class="panel-body"> 
      <div class="dataTable_wrapper"> 
       <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
      <form action="{{url('admin/admin/seller')}}" method="get">
        <div class="row">
         <div class="col-sm-6">

         </div>
         <div class="col-sm-6">
          <div id="dataTables-example_filter" class="dataTables_filter">
           <label>查询:<input type="search" name="keywords" value="" class="form-control input-sm" placeholder="" aria-controls="dataTables-example" /></label>
            <button class="btn">搜索</button>
          </div>
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
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                
                                        <tr>
                                            <th>订单ID</th>
                                            <th>订单号</th>
                                            <th>商品信息</th>
                                            <th>支付交易号</th>
                                            <th>支付方式</th>
                                            <th>支付状态</th>
                                            <th>总金额</th>
                                            <th>购买时间</th>
                                            <th>到期时间</th>
                                            <th>操作</th>
                                        </tr>

                                          @foreach ( $order as $v)
                                            <tr class="gradeX">
                                                <td>{{ $v->id}}</td>
                                                <td>{{ $v->user_id}}</td>
                                                <td>{{ $v->cargo_message}}</td>
                                                <td>{{ $v->pay_transaction}}</td>
                                                <td>{{ ($v->pay_type== 1)?'微信':'支付宝' }}</td>
                                                <td>{{ ($v->pay_status == 1)?'已支付':'未支付' }}</td>
                                                <td>{{ $v->total_amount}}</td>
                                                <td>{{ $v->created_at}}</td>
                                                <td>{{ $v->updated_at}}</td>
                                                
                                                

                                              
                                                <td>
                                                    <div class="tpl-table-black-operation">
                                                        
                                                        <a href="{{url('order/'.$v->id .'/edit')}}" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 修改
                                                        </a>
                                                        <a href="javascript:doDel({{ $v->id }})" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                        
                                                    </div>
                                                </td>
                                            </tr>

                                @endforeach
                             
                                      
                                  
                                </table>
                                {!! $order->render() !!}
                            </div>
                        </div>
                        </form>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
              <!-- 分页开始 -->
    <div class="row">
         <div class="col-sm-12">
          <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
       
          </div>
         </div>
        </div>

            <script>
                function doDel(id)
                {
                    
                    if(confirm('你确定要删除吗？')){
                        var form = document.myform;
                        form.action = 'admin/order/'+id;
                        form.submit();
                    }
                            
                }
           </script>

    <!-- 分页结束 -->

            </div>
            
    @endsection