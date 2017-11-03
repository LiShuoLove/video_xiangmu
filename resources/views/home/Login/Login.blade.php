<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="OrcasThemes">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
      <title>波波视频网</title>
      <!-- Bootstrap core CSS -->
      <link href = "{{ asset('homes/css/bootstrap.css')}}" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link rel="stylesheet" href ="{{ asset('homes/css/screen.css')}}">
      <link rel="stylesheet" href ="{{ asset('homes/css/animation.css')}}">
      <!--[if IE 7]>
      
      <![endif]-->
      <link rel="stylesheet" href ="{{ asset('homes/css/font-awesome.css')}}">
      <!--[if lt IE 8]>
      <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection">
      <![endif]-->
      <link href ="{{ asset('homes/css/lity.css')}}" rel="stylesheet">
   </head>
   <body>
      <!-- LOGIN -->
      <div id="login" class="container-fluid standard-bg">
         <!-- HEADER -->
         <div class="row header-top">
            <div class="col-lg-3 col-md-6 col-sm-5">
               <a class="main-logo" href="#"><img src="{{ asset('homes/img/main-logo.png')}}" class="main-logo" alt="Muvee Reviews" title="Muvee Reviews"></a>
            </div>
            <div class="col-lg-6 hidden-md text-center hidden-sm hidden-xs">
               <img src="{{ asset('homes/img/banners/banner-sm.jpg')}}" class="img-responsive" alt="Buy Now">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-7 hidden-xs">
               
               <div class="right-box">
                  <a href="{{ url('/login') }}"><button type="button" class="access-btn">登录</button></a>
               </div>
               <div class="right-box">
                  <a href="{{ url('/register') }}"><button type="button" class="access-btn">注册</button></a>
               </div>
               
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
                  <div class="collapse navbar-collapse js-navbar-collapse megabg dropshd ">
                     <ul class="nav navbar-nav">
                        <li><a href="{{ url('/home') }}">首页</a></li>
                  <li><a href="single-video.html">视频贴</a></li>
                  <li><a href="single-page.html">视频页</a></li>
                  <li><a href="single-page-with-img.html">视频内容</a></li>
                  <li><a href="{{ url('/login') }}">登录</a></li>
                  <li><a href="gallery-video-boxed.html">视频简介</a></li>
                  <li><a href="contact.html">联系我们</a></li>
                     </ul>
                     <ul class="social">
                        <li class="social-facebook"><a href="#" class="fa fa-facebook social-icons"></a></li>
                        <li class="social-google-plus"><a href="#" class="fa fa-google-plus social-icons"></a></li>
                        <li class="social-twitter"><a href="#" class="fa fa-twitter social-icons"></a></li>
                        <li class="social-youtube"><a href="#" class="fa fa-youtube social-icons"></a></li>
                        <li class="social-rss"><a href="#" class="fa fa-rss social-icons"></a></li>
                     </ul>
                     <div class="search-block">
                        <form>
                           <input type="search" placeholder="Search">
                        </form>
                     </div>
                  </div>
                  <!-- /.nav-collapse -->
               </nav>
            </div>
         </div>
         <!-- LOGIN -->
         <div class="row">
            <div class="container">
               <section class="registration col-lg-12 col-md-12">
                  <div class="row secBg">
                     <div class="large-12 columns">
                        <div class="login-register-content">
                           <div class="row" data-equalizer data-equalize-on="medium" id="test-eq">
                              <div class="col-md-12 text-center login-header">
                                 <h2 class="title main-head-title">User Login - Get Premium</h2>
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                              </div>
                              <div class="clearfix spacer"></div>
                              <div class="col-md-5 social-login">
                                 <div class="social-login" data-equalizer-watch>
                                    <h2 class="title main-head-title">Login via Social Profile</h2>
                                    <div class="social-login-btn social-facebook">
                                       <a href="#"><i class="fa fa-facebook"></i>login via facebook</a>
                                    </div>
                                    <div class="social-login-btn social-twitter">
                                       <a href="#"><i class="fa fa-twitter"></i>login via twitter</a>
                                    </div>
                                    <div class="social-login-btn social-google-plus">
                                       <a href="#"><i class="fa fa-google-plus"></i>login via google plus</a>
                                    </div>
                                    <div class="social-login-btn social-youtube">
                                       <a href="#"><i class="fa fa-youtube"></i>login via YouTube</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-2">
                                 <div class="middle-sep">
                                    <i class="fa fa-arrow-left arrow-left"></i>
                                    <span>OR</span>
                                    <i class="fa fa-arrow-right arrow-right"></i>
                                 </div>
                              </div>
                              <div class="col-md-5">
                                 <div class="register-form">
                                    <h2 class="title main-head-title">请登录</h2>

                                               @if (session('msg'))
                                    <script>
                                        alert("{{ session('msg') }}");

                                    </script>
                                       @endif
                                    <form method="post" data-abide  action="/login">
                                       {{ csrf_field() }}

                                       <div class="input-group">
                                          <span class="fa fa-user login-inputicon"></span>
                                          <input type="text" name="tel" placeholder="输入账号" >
                                       </div>
                                       <div class="input-group">
                                          <span class="fa fa-lock login-inputicon"></span>
                                          <input type="password" id="password" name="password" placeholder="输入密码" required> 
                                       </div>
                                       <div class="checkbox">
                                          <input id="remember" type="checkbox" name="check" value="remember">
                                          <label class="customLabel" for="remember">记住密码</label>
                                       </div>
                                       <div class="login-btn-box">
                                          <button class="access-btn" type="submit" name="submit">登录</button>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <!-- BOTTOM BANNER -->
            <div id="bottom-banner" class="container text-center">
               <!-- BOTTOM ADVERTISE BOX -->
               <a href="" class="banner-xl">
               <img src="{{ asset('homes/img/banners/banner-xl.jpg')}}" class="img-responsive" alt="Buy Now Muvee Reviews Bootstrap HTML5 Template" title="Buy Now Muvee Reviews Bootstrap HTML5 Template">
               </a>     
            </div>
         </div>
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
                                 <img class="img-responsive" src="{{ asset('homes/img/thumbs/thumb-s.jpg')}}" alt="#">
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
               <div class="row copyright-bottom text-center">
                  <div class="col-md-12 text-center">
                     <a href="" class="footer-logo" title="Video Magazine Bootstrap HTML5 template">
                     <img src="{{ asset('homes/img/footer-logo.png')}}" class="img-responsive text-center" alt="Video Magazine Bootstrap HTML5 template">
                     </a>  
                     <p>Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
                     
                  </div>
               </div>
            </footer>
         </div>
      </div>
      <!-- JAVA SCRIPT -->
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="{{ asset('/homes/js/jquery-1.12.1.min.js')}}"></script>
      <script src="{{ asset('/homes/js/bootstrap.min.js')}}"></script>
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
