          <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="OrcasThemes">
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<title>Home</title>
<!-- Bootstrap core CSS -->
<link href = "{{ asset('homes/css/bootstrap.css')}}" rel="stylesheet">
<!-- Custom styles for this template -->
<link rel="stylesheet" href = "{{ asset('homes/css/screen.css')}}">
<link rel="stylesheet" href = "{{ asset('homes/css/animation.css')}}">
<!--[if IE 7]>

<![endif]-->
<link rel="stylesheet" href = "{{ asset('homes/css/font-awesome.css')}}">
<!--[if lt IE 8]>
<link rel="stylesheet" href = "{{ asset('homes/css/ie.css')}}" type="text/css')}}" media="screen, projection">
<![endif]-->
<link href = "{{ asset('homes/css/lity.css')}}" rel="stylesheet">

</head>
<script type="text/javascript">
var connectUs = function(){
layer.prompt(function(val, index){
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
  $.ajax({
    url: "{{ url('/connect') }}",
    dataType: 'json',
    type:'post',
    data: 'content='+val,
    success:function(res){
      alert('留言成功');
      layer.close(index);
    }
  })
});
}
</script>
<body>

                            @if (session('msg'))
                                <script>
                                    alert("{{ session('msg') }}")
                                </script>
                            @endif


         <!-- HEADER -->
              @if(session('user')['id'] !== null)
                <div class="right-box">
                  <a href="{{url('/personalcenter')}}"><button type="button" class="access-btn">个人中心</button></a>
                  <a href="{{url('/out')}}"><button type="button" class="access-btn">退出</button></a>

               </div>
              @endif

              @if(session('user')['id'] == null)
               <div class="right-box">
                  <a href="{{ url('/login') }}"><button type="button" class="access-btn">登录</button></a>
               </div>
               <div class="right-box">
                  <a href="{{ url('/register') }}"><button type="button" class="access-btn">注册</button></a>
               </div>
               @endif
<!-- HOME 1 -->
<div id="home1" class="container-fluid standard-bg">
 <!-- HEADER -->
 <div class="row header-top">
   <div class="col-lg-3 col-md-6 col-sm-5 col-xs-8">
      <a class="main-logo" href="#"><img src = "{{ asset ('homes/img/main-logo.png')}}" class="main-logo img-responsive" alt="Muvee Reviews" title="Muvee Reviews"></a>
   </div>
   <div class="col-lg-6 hidden-md text-center hidden-sm hidden-xs">
     @foreach($list as $v)
      <?php 
          if ($v->state != 1){
        ?>
            <a href="#" class="banner-l hidden-sm hidden-xs">
              <img src = "{{ asset ('homes/img/banners/banner-sm.jpg') }}" class="img-responsive" alt="Muvee Reviews Video Magazine HTML5 Bootstrap" title="可购买" style="height:100px;width:700px;">
              </a>
        <?php
          } else {
        ?>
            <a href="{{ 'http://'.$v->address }}" class="banner-l hidden-sm hidden-xs">
              <img src = "{{ asset ('upload/'.$v->picture) }}" class="img-responsive" alt="Muvee Reviews Video Magazine HTML5 Bootstrap" title="{{ $v->title }}" style="height:100px;width:700px;">
              </a>
        <?php
          }
        ?>
      @endforeach
   </div>
   <div class="col-lg-3 col-md-6 col-sm-7 hidden-xs">
     
   </div>
 </div>
 <!-- MENU -->
 <div class="row home-mega-menu ">
   <div class="col-md-12">
      <nav class="navbar navbar-default">
        <div class="navbar-header">

          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">


          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>

        </div>
        <div class="collapse navbar-collapse js-navbar-collapse megabg dropshd " style="height:100%;">
          <ul class="nav navbar-nav">
                  <li><a href="{{ url('/home') }}">首页</a></li>
                 
                  
                  @foreach($sect as $c)
                    <li><a href="{{url('/dz')}}">{{ $c->typename }}</a></li>
                  @endforeach
                  @foreach($secttwo as $t)
                    <li><a href="{{url('/aq')}}">{{ $t->typename }}</a></li>
                  @endforeach
                  @foreach($sectsan as $s)
                    <li><a href="{{url('/js')}}">{{ $s->typename }}</a></li>
                  @endforeach
                  @foreach($sectfour as $d)
                    <li><a href="{{url('/xj')}}">{{ $d->typename }}</a></li>
                  @endforeach
                  
                
                  <li><a onclick="connectUs()" href="javascript:void(0)">联系我们</a></li>
       
                   <!-- <li><a href="personalcenter">个人中心</a></li> -->
                     </ul>
          
          <div>
          
            </div>
          
          <div class="search-block">
           
          </div>
        </div>
        <!-- /.nav-collapse -->
      </nav>
   </div>
 </div>
 <!-- CORE -->
 <div class="row">
   <!-- SIDEBAR -->
   <div class="col-lg-2 col-md-4 hidden-sm hidden-xs">
      <aside class="dark-bg">
        <article>
          <h2 class="icon"><i class="fa fa-flash" aria-hidden="true"></i>观看排行</h2>
          <ul class="sidebar-links">
            <li class="fa fa-chevron-right"><a href="#">两只黄鹂鸣翠柳</a><span>4.000</span></li>
            <li class="fa fa-chevron-right"><a href="#">一行白鹭上青天</a><span>2.000</span></li>
            <li class="fa fa-chevron-right"><a href="#">遥知不是雪</a><span>650</span></li>
            <li class="fa fa-chevron-right"><a href="#">为有暗香来</a><span>4.000</span></li>
            <li class="fa fa-chevron-right"><a href="#">采菊东篱下</a><span>7.800</span></li>
            <li class="fa fa-chevron-right"><a href="#">明月几时有</a><span>200</span></li>
            <li class="fa fa-chevron-right"><a href="#">把酒问青天</a><span>15</span></li>
          </ul>
        </article>
        <div class="clearfix spacer"></div>
        <article>
          <h2 class="icon"><i class="fa fa-gears" aria-hidden="true"></i>视频评论排行</h2>
          <ul class="sidebar-links">
            <li class="fa fa-chevron-right"><a href="#">床前明月光</a><span>4.000</span></li>
            <li class="fa fa-chevron-right"><a href="#">疑是地上霜</a><span>2.000</span></li>
            <li class="fa fa-chevron-right"><a href="#">举头望明月</a><span>650</span></li>
            <li class="fa fa-chevron-right"><a href="#">低头思故乡</a><span>4.000</span></li>
            <li class="fa fa-chevron-right"><a href="#">桃花潭水深千尺</a><span>7.800</span></li>
            <li class="fa fa-chevron-right"><a href="#">不及汪伦送我情</a><span>200</span></li>
          </ul>
        </article>
        <div class="clearfix spacer"></div>
      </aside>
   </div>

   <div id="main" class="container-fluid">
   <div>
            @yield('content')
        </div>
 
 
<!-- FOOTER -->
<div id="footer" class="container-fluid footer-background">
 <div class="container">
   <footer>
      <!-- SECTION FOOTER -->
      <div class="row">
        <!-- SOCIAL -->
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="row auto-clear">
            <div class="col-md-12">
            </div>
            <div class="col-md-12">
               <ul class="social">
                 <li class="social-facebook"><a href="#" class="fa fa-facebook social-icons"></a></li>
                 <li class="social-google-plus"><a href="#" class="fa fa-google-plus social-icons"></a></li>
                 <li class="social-twitter"><a href="#" class="fa fa-twitter social-icons"></a></li>
                 <li class="social-youtube"><a href="#" class="fa fa-youtube social-icons"></a></li>
                 <li class="social-rss"><a href="#" class="fa fa-rss social-icons"></a></li>
               </ul>
            </div>
            <div class="col-md-12">
               <p>Aliquam feugiat turpis quis felis adipiscing, non pulvinar odio lacinia. Aliquam elementum pharetra fringilla. Duis blandit, sapien in semper vehicula, tellus elit gravida odio, ac tincidunt nisl mi at ante. Vivamus tincidunt nunc nibh. Duis blandit, sapien in semper vehicula</p>
            </div>
          </div>
        </div>
        <!-- TAGS -->
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <h2 class="title">友情链接</h2>
          <ul class="footer-tags">
          @foreach($connect as $l)
            <li><a href="{{ 'http://'.$l->address }}">{{ $l->title }}</a></li>
          @endforeach
          </ul>
        </div>
        <!-- POST -->
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <h2 class="title">PREMIUM inside?</h2>
          <div class="row auto-clear">
            <div class="col-lg-6 col-md-6 col-sm-6 post post-medium">
               <div class="thumbr">
                 <a class="post-thumb" href="" data-lity title="Video Title Goes Here">
                   <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                   <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                   <img class="img-responsive" src = "{{ asset ('homes/img/thumbs/thumb-s.jpg')}}" alt="#">
                 </a>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 post post-medium">
               <div class="thumbr">
                 <a class="post-thumb" href="" data-lity title="Video Title Goes Here">
                   <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                   <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                   <img class="img-responsive" src = "{{ asset ('homes/img/thumbs/thumb-s2.jpg')}}" alt="#">
                 </a>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 post post-medium">
               <div class="thumbr">
                 <a class="post-thumb" href="" data-lity title="Video Title Goes Here">
                   <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                   <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                   <img class="img-responsive" src = "{{ asset ('homes/img/thumbs/thumb-s4.jpg')}}" alt="#">
                 </a>
               </div>
            </div>
            <script src = "{{ asset('homes/js/jquery-1.12.1.min.js')}}"></script>
<script src = "{{ asset('homes/js/layer.js')}}"></script>
<script src = "{{ asset('homes/js/bootstrap.min.js')}}"></script>
<script src = "{{ asset('homes/js/lity.js')}}"></script>
<script>
 $(".nav .dropdown").hover(function() {
   $(this).find(".dropdown-toggle").dropdown("toggle");
 });
</script>
            <div class="col-lg-6 col-md-6 col-sm-6 post post-medium">
               <div class="thumbr">
                 <a class="post-thumb" href="" data-lity title="Video Title Goes Here">
                   <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                   <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                   <img class="img-responsive" src = "{{ asset ('homes/img/thumbs/thumb-s3.jpg')}}" alt="#">
                 </a>
               </div>
            </div>
          </div>
        </div>
        <!-- LINKS -->
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <h2 class="title">most viewed</h2>
          <ul class="footer-menu-links">
            <li class="fa fa-chevron-right"><a href="#">About Us</a></li>
            <li class="fa fa-chevron-right"><a href="#">Categories</a></li>
            <li class="fa fa-chevron-right"><a href="#">Features</a></li>
            <li class="fa fa-chevron-right"><a href="#">Pages</a></li>
            <li class="fa fa-chevron-right"><a href="#">Gallery</a></li>
          </ul>
        </div>
      </div>
      <div class="row copyright-bottom text-center">
        <div class="col-md-12 text-center">
          <a href="" class="footer-logo" title="Video Magazine Bootstrap HTML5 template">
          <img src = "{{ asset ('homes/img/footer-logo.png')}}" class="img-responsive text-center" alt="Video Magazine Bootstrap HTML5 template">
          </a> 
          <p>Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
        </div>
      </div>
   </footer>
 </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src = "{{ asset('homes/js/jquery-1.12.1.min.js')}}"></script>
<script src = "{{ asset('homes/js/layer.js')}}"></script>
<script src = "{{ asset('homes/js/bootstrap.min.js')}}"></script>
<script src = "{{ asset('homes/js/lity.js')}}"></script>
<script>
 $(".nav .dropdown").hover(function() {
   $(this).find(".dropdown-toggle").dropdown("toggle");
 });
</script>
<!-- MODAL -->
<div id="enquirypopup" class="modal fade in " role="dialog">
 <div class="modal-dialog">
   <!-- Modal content-->
   <div class="modal-content row">
      <div class="modal-header custom-modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h2 class="icon"><i class="fa fa-television" aria-hidden="true"></i>free access</h2>
      </div>
      <div class="modal-body">
        <form name="info_form" class="form-inline" action="#" method="post">
          <div class="form-group col-sm-12">
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
          </div>
          <div class="form-group col-sm-12">
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
          </div>
          <div class="form-group col-sm-12">
            <button class="subscribe-btn pull-right" type="submit" title="Subscribe">Subscribe</button>
          </div>
        </form>
      </div>
   </div>
 </div>
</div>
</body>
</html>
<!-- JAVA SCRIPT -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src = "{{ asset('homes/js/jquery-1.12.1.min.js')}}"></script>
<script src = "{{ asset('homes/js/bootstrap.min.js')}}"></script>
<script src = "{{ asset('homes/js/lity.js')}}"></script>
<script>
 $(".nav .dropdown").hover(function() {
   $(this).find(".dropdown-toggle").dropdown("toggle");
 });
</script>
<!-- MODAL -->
<div id="enquirypopup" class="modal fade in " role="dialog">
 <div class="modal-dialog">
   <!-- Modal content-->
   <div class="modal-content row">
      <div class="modal-header custom-modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h2 class="icon"><i class="fa fa-television" aria-hidden="true"></i>free access</h2>
      </div>
      <div class="modal-body">
        <form name="info_form" class="form-inline" action="#" method="post">
          <div class="form-group col-sm-12">
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
          </div>
          <div class="form-group col-sm-12">
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
          </div>
          <div class="form-group col-sm-12">
            <button class="subscribe-btn pull-right" type="submit" title="Subscribe">Subscribe</button>
          </div>
        </form>
      </div>
   </div>
 </div>
</div>
</body>
</html>
<script>
  function movieDetails(mid){
    window.location.href= '/home/comments?mid='+mid;
  }
</script>