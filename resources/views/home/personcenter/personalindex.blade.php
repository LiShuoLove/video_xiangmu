<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="OrcasThemes">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
      <title></title>
      <!-- Bootstrap core CSS -->
      <link href = "{{ asset('homes/css/bootstrap.css')}}" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link rel="stylesheet" href ="{{ asset('homes/css/screen.css')}}">
      <link rel="stylesheet" href ="{{ asset('homes/css/animation.css')}}">
      <!--[if IE 7]>
      
      <![endif]-->
      <link rel="stylesheet" href ="{{ asset('homes/css/font-awesome.css')}}">
      <!--[if lt IE 8]>
      <link rel="stylesheet" href ="{{ asset('homes/css/ie.css')}}" type="text/css')}}" media="screen, projection">
      <![endif]-->
      <link href ="{{ asset('homes/css/lity.css')}}" rel="stylesheet">
   </head>
   <body>
      <!-- GALLERY VIDEO GRID BOXED -->
      <div id="single-video-right-sidebar" class="container-fluid standard-bg">
         <!-- HEADER -->
        <div class="row header-top">
   <div class="col-lg-3 col-md-6 col-sm-5 col-xs-8">
      <a class="main-logo" href="{{url('/home')}}"><img src="{{ asset('homes/img/main-logo.png')}}" class="main-logo img-responsive" alt="Muvee Reviews" title="Muvee Reviews"></a>
   </div>
            <div class="col-lg-6 hidden-md text-center hidden-sm hidden-xs">
               <img src="{{ asset('homes/img/banners/banner-sm.jpg' ) }}" class="img-responsive" alt="Buy Now">
            </div>

                                @if (session('msg'))
                                    <script>
                                    alert("{{ session('msg') }}");
                                    </script>
                                @endif
            <div class="col-lg-3 col-md-6 col-sm-7 hidden-xs">
              
               
               <!-- <div class="right-box">
                  <a href="{{ url('/login') }}"><button type="button" class="access-btn">登录</button></a>
               </div> -->
               <div class="right-box">
                  <a href="{{ url('/register') }}">
                  <button type="button" class="access-btn">已登录</button>
                  </a>
               </div>
               <!-- <div class="right-box">
                  <button type="button" class="access-btn">个人中心</button>
               </div> -->
            </div>
         </div>
         
      </div>
      <!-- BOTTOM BANNER -->
      <div id="bottom-banner" class="container text-center">
         <!-- BOTTOM ADVERTISE BOX -->
         <a href="" class="banner-xl">
         <img src="{{ asset('homes/img/banners/banner-xl.jpg')}}" class="img-responsive" alt="Buy Now Muvee Reviews Bootstrap HTML5 Template" title="Buy Now Muvee Reviews Bootstrap HTML5 Template">
         </a> 
         <form action="{{ url('/personalcenter') }}" method="post">

             {{ csrf_field() }}


            用户名：<input type="text" name="username" value="{{ $row->username }}"><br>
            真实姓名：<input type="text" name="realname" value="{{ $row->realname }}"><br>
            邮箱：<input type="text" name="email" value="{{ $row->email }}"><br>
            电话：<input type="text" name="tel" value="{{ $row->tel }}"><br>
            生日：<input type="text" name="birthday" value="{{ $row->birthday }}"><br>
            QQ：<input type="text" name="QQ" value="{{ $row->QQ }}"><br>
            居住地：<input type="text" name="live" value="{{ $row->live }}"><br>

          <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
             <input type="submit" class='am-btn am-btn-primary tpl-btn-bg-color-success ' value='修改' style="background: white;" >
             </div>
                                
         </form>  
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
                     <h2 class="title">popular tags</h2>
                     <ul class="footer-tags">
                        <li><a href="#">videos</a></li>
                        <li><a href="#">premium</a></li>
                        <li><a href="#">hair</a></li>
                        <li><a href="#">beauty</a></li>
                        <li><a href="#">ranking</a></li>
                        <li><a href="#">lifestyle</a></li>
                        <li><a href="#">sport</a></li>
                        <li><a href="#">money</a></li>
                        <li><a href="#">comments</a></li>
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
                                 
                              </a>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 post post-medium">
                           <div class="thumbr">
                              <a class="post-thumb" href="" data-lity title="Video Title Goes Here">
                                 <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                 <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                 <img class="img-responsive" src="{{ asset('homes/img/thumbs/thumb-s2.jpg')}}" alt="#">
                              </a>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 post post-medium">
                           <div class="thumbr">
                              <a class="post-thumb" href="" data-lity title="Video Title Goes Here">
                                 <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                 <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                 <img class="img-responsive" src="{{ asset('homes/img/thumbs/thumb-s4.jpg')}}" alt="#">
                              </a>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 post post-medium">
                           <div class="thumbr">
                              <a class="post-thumb" href="" data-lity title="Video Title Goes Here">
                                 <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                 <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                 <img class="img-responsive" src="{{ asset('homes/img/thumbs/thumb-s3.jpg')}}" alt="#">
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
            </footer>
         </div>
      </div>
      <!-- JAVA SCRIPT -->
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="{{ asset('homes/js/jquery-1.12.1.min.js')}}"></script>
      <script src="{{ asset('homes/js/bootstrap.min.js')}}"></script>
      <script src="{{ asset('homes/js/lity.js')}}"></script>
      <script>
         $(".nav .dropdown").hover(function() {
           $(this).find(".dropdown-toggle").dropdown("toggle");
         });
         $(document).ready(function(){
             $(".filter-button").click(function(){
                 var value = $(this).attr('data-filter');
                 
                 if(value == "all")
                 {
                     //$('.filter').removeClass('hidden');
                     $('.filter').show('1000');
                 }
                 else
                 {
         //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
         //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                     $(".filter").not('.'+value).hide('3000');
                     $('.filter').filter('.'+value).show('3000');
                     
                 }
             });
         
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
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                     <div class="form-group col-sm-12">
                        <input type="text" class="form-control" name="name" id="name" placeholder="用户名/手机号/邮箱">
                     </div>
                     <div class="form-group col-sm-12">
                        <input type="password" class="form-control" name="password" id="password" placeholder="密码">
                     </div>
                     <div class="form-group col-sm-12">
                        <button class="subscribe-btn pull-right" type="submit" title="Subscribe">登录</button>
                     </div>
                  </form>
               </div>
               <div class="modal-body">
                  <form name="info_form" class="form-inline" action="#" method="post">
                     <div class="form-group col-sm-12">
                        <input type="text" class="form-control" name="name" id="name" placeholder="">
                     </div>
                     <div class="form-group col-sm-12">
                        <input type="text" class="form-control" name="password" id="password" placeholder="密码">
                     </div>
                     <div class="form-group col-sm-12">
                        <input type="text" class="form-control" name="tel" id="tel" placeholder="">
                     </div>
                     
                     <div class="form-group col-sm-12">
                        <button class="subscribe-btn pull-right" type="submit" title="Subscribe">登录</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>