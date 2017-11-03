
                    @extends('admin.public.parent')
                        @section('content')


                    <div class="widget-body am-fr">
                                           
                                <form class="am-form tpl-form-border-form tpl-form-border-br" action="{{ url('admin/order/'.$order->id )}}" method='post'>
                                                  {{ csrf_field() }}
                                                    {{ method_field('PUT') }}
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">商品信息 <span class="tpl-form-line-small-title">cargo_message</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="" name='cargo_message' value="{{$order->cargo_message}}" placeholder="请输入商品信息">
                                            
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">支付交易号<span class="tpl-form-line-small-title"> pay_transaction</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name=' pay_transaction' value="{{$order-> pay_transaction}}" placeholder="输入您的交易号" >
                                            <small>交易号</small>
                                        </div>
                                    </div>

                                    

                                   


                                   

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">购买时间<span class="tpl-form-line-small-title">created_at</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="am-form-field tpl-form-no-bg" placeholder="购买时间"  value="{{$order->created_at}}" data-am-datepicker="" readonly="" name='created_at'>
                                            <small>购买时间</small>
                                        </div>
                                    </div>
                                    

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">到期时间<span class="tpl-form-line-small-title">updated_at</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="am-form-field tpl-form-no-bg" placeholder="到期时间"  value="{{$order->updated_at}}" data-am-datepicker="" readonly="" name='updated_at'>
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
