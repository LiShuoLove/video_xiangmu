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
<body>
<!-- HOME 1 -->
<div id="home1" class="container-fluid standard-bg">
 <!-- HEADER -->
 <div class="row header-top">
   <div class="col-lg-3 col-md-6 col-sm-5 col-xs-8">
      <a class="main-logo" href="#"><img src = "{{ asset ('homes/img/main-logo.png')}}" class="main-logo img-responsive" alt="Muvee Reviews" title="Muvee Reviews"></a>
   </div>
   <div class="col-lg-6 hidden-md text-center hidden-sm hidden-xs">
      <img src = "{{ asset ('homes/img/banners/banner-sm.jpg')}}" class="img-responsive" alt="Muvee Reviews Video Magazine HTML5 Bootstrap">
   </div>
   <div class="col-lg-3 col-md-6 col-sm-7 hidden-xs">
      <div class="right-box">
        <button type="button" class="access-btn" data-toggle="modal" data-target="#enquirypopup">欢迎登录</button>
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
                  <li><a href="{{url('/orders')}}">会员购买</a></li>
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
   <!-- HOME MAIN POSTS -->   
   <div class="col-lg-10 col-md-8">
      <section id="home-main">
        <h2 class="icon"><i class="fa fa-television" aria-hidden="true"></i>比较激情的电影</h2>
        <div class="row">
          <!-- ARTICLES -->
          <div class="col-lg-9 col-md-12 col-sm-12">
            <div class="row auto-clear">
               <article class="col-lg-3 col-md-6 col-sm-4">
                 <!-- POST L size -->
                 <div class="post post-medium">
                   <div class="thumbr">
                     <a class="afterglow post-thumb" href="" data-lity>
                        <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                        <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                        <img class="img-responsive" src = "{{ asset ('homes/img/thumbs/thumb-s.jpg')}}" alt="#">
                     </a>
                   </div>
                   <div class="infor">
                     <h4>
                        <a class="title" href="#">Video Lightbox Test</a>
                     </h4>
                     <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
                     <div class="ratings">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-half"></i>
                     </div>
                   </div>
                 </div>
               </article>
               
            </div>
            <div class="clearfix spacer"></div>
          </div>
          <!-- RIGHT ASIDE -->
          <div class="col-lg-3 hidden-md col-sm-12 text-center top-sidebar">
            <!-- SUBSCRIBE BOX -->  
            <div class="subscribe-box">
               <h2 class="icon"><i class="fa fa-plug" aria-hidden="true"></i>subscribe</h2>
               <!-- SUBSCRIBE FIELD -->
               <form name="search-submit" method="post" action="#" id="subscribe-submit">
                 <fieldset class="search-fieldset">
                   <input id="subscribe" type="text" name="search" size="12" class="search-field" placeholder="Your email address" value="">
                   <button class="subscribe-btn" type="submit" title="Subscribe">Subscribe</button>
                 </fieldset>
               </form>
            </div>
            <!-- SIDEBAR ADVERTISE BOX -->
            <a href="" class="banner-l hidden-sm hidden-xs">
            <img src = "{{ asset ('homes/img/banners/banner-l.jpg')}}" class="img-responsive" alt="Buy Now Muvee Reviews Bootstrap HTML5 Template" title="Buy Now Muvee Reviews Bootstrap HTML5 Template">
            </a>
          </div>
        </div>
      </section>
   </div>
 </div>
</div>
<!-- TABS -->
<div id="tabs" class="container-fluid featured-bg">
 <div class="container-fluid">
   <div class="col-md-12">
      <!-- BOOTSTRAP TABS -->
      <div class="head-section">
        <ul class="nav nav-tabs text-center">
          <li class="active">
            <a data-toggle="tab" href="#tab1">
               <h2 class="title">TOP FIVE</h2>
            </a>
          </li>
          
        </ul>
      </div>
      <div class="row auto-clear">
        <!-- TAB CONTENTS -->
        <div class="tab-content">
          <div id="tab1" class="tab-pane fade in active">
            <!-- POST L size -->
            <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
               <div class="thumbr">
                 <a class="post-thumb" href="" data-lity>
                   <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                   <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                   <img class="img-responsive" src = "{{ asset ('homes/img/thumbs/thumb-tab.jpg')}}" alt="#">
                 </a>
               </div>
               <div class="infor">
                 <h4>
                   <a class="title" href="#">With You, I forget all my problems. With You, Time Stands Still.</a>
                 </h4>
                 <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
                 <div class="ratings">
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star-half-o" aria-hidden="true"></i>
                   <i class="fa fa-star-o"></i>
                   <i class="fa fa-star-half"></i>
                 </div>
               </div>
            </article>
            <!-- POST L size -->
     
              
          <div id="tab3" class="tab-pane fade">
            <!-- POST L size -->
            <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
               <div class="thumbr">
                 <a class="post-thumb" href="" data-lity>
                   <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                   <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                   <img class="img-responsive" src = "{{ asset ('homes/img/thumbs/thumb-tab.jpg')}}" alt="#">
                 </a>
               </div>
               <div class="infor">
                 <h4>
                   <a class="title" href="#">With You, I forget all my problems. With You, Time Stands Still.</a>
                 </h4>
                 <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
                 <div class="ratings">
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star-half-o" aria-hidden="true"></i>
                   <i class="fa fa-star-o"></i>
                   <i class="fa fa-star-half"></i>
                 </div>
               </div>
            </article>
            <!-- POST L size -->
            <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
               <div class="thumbr">
                 <a class="post-thumb" href="" data-lity>
                   <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                   <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                   <img class="img-responsive" src = "{{ asset ('homes/img/thumbs/thumb-tab2.jpg')}}" alt="#">
                 </a>
               </div>
               <div class="infor">
                 <h4>
                   <a class="title" href="#">I’m not perfect but I am Loyal</a>
                 </h4>
                 <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
                 <div class="ratings">
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star-half-o" aria-hidden="true"></i>
                   <i class="fa fa-star-o"></i>
                   <i class="fa fa-star-half"></i>
                 </div>
               </div>
            </article>
            <!-- POST L size -->
            <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
               <div class="thumbr">
                 <a class="post-thumb" href="" data-lity>
                   <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                   <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                   <img class="img-responsive" src = "{{ asset ('homes/img/thumbs/thumb-tab3.jpg')}}" alt="#">
                 </a>
               </div>
               <div class="infor">
                 <h4>
                   <a class="title" href="#">When I fell for you, I fell Hard</a>
                 </h4>
                 <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
                 <div class="ratings">
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star-half-o" aria-hidden="true"></i>
                   <i class="fa fa-star-o"></i>
                   <i class="fa fa-star-half"></i>
                 </div>
               </div>
            </article>
            <!-- POST L size -->
            <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
               <div class="thumbr">
                 <a class="post-thumb" href="" data-lity>
                   <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                   <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                   <img class="img-responsive" src = "{{ asset ('homes/img/thumbs/thumb-tab4.jpg')}}" alt="#">
                 </a>
               </div>
               <div class="infor">
                 <h4>
                   <a class="title" href="#">If you are Mine, You are Mine. I don’t like Sharing</a>
                 </h4>
                 <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
                 <div class="ratings">
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star-half-o" aria-hidden="true"></i>
                   <i class="fa fa-star-o"></i>
                   <i class="fa fa-star-half"></i>
                 </div>
               </div>
            </article>
            <!-- POST L size -->
            <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
               <div class="thumbr">
                 <a class="post-thumb" href="" data-lity>
                   <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                   <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                   <img class="img-responsive" src = "{{ asset ('homes/img/thumbs/thumb-tab5.jpg')}}" alt="#">
                 </a>
               </div>
               <div class="infor">
                 <h4>
                   <a class="title" href="#">I love you. That’s all I know</a>
                 </h4>
                 <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
                 <div class="ratings">
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star-half-o" aria-hidden="true"></i>
                   <i class="fa fa-star-o"></i>
                   <i class="fa fa-star-half"></i>
                 </div>
               </div>
            </article>
            <!-- POST L size -->
            <article class="col-lg-2 col-md-4 col-sm-4 post post-medium">
               <div class="thumbr">
                 <a class="post-thumb" href="" data-lity>
                   <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                   <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                   <img class="img-responsive" src = "{{ asset ('homes/img/thumbs/thumb-tab6.jpg')}}" alt="#">
                 </a>
               </div>
               <div class="infor">
                 <h4>
                   <a class="title" href="#">It will be Always YOU</a>
                 </h4>
                 <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
                 <div class="ratings">
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star-half-o" aria-hidden="true"></i>
                   <i class="fa fa-star-o"></i>
                   <i class="fa fa-star-half"></i>
                 </div>
               </div>
            </article>
          </div>
        </div>
      </div>
   </div>
 </div>
</div>
<!-- MAIN -->
<div id="main" class="container-fluid">
 <div class="container-fluid">
   <!-- SIDEBAR -->
   <div class="col-lg-2 hidden-md hidden-sm hidden-xs">
      <aside class="dark-bg sidebar">
        <h2 class="icon"><i class="fa fa-flag" aria-hidden="true"></i>featured</h2>
        <article class="col-md-12 post post-medium">
          <div class="row">
            <div class="col-md-12 thumbr">
               <div class="flag flag1"><i class="fa fa-star"></i></div>
               <a class="post-thumb" href="" data-lity>
                 <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                 <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                 <img class="img-responsive" src = "{{ asset ('homes/img/thumbs/thumb-s.jpg')}}" alt="#">
               </a>
            </div>
            <div class="col-md-12 infor">
               <h4>
                 <a class="title" href="#">It always seems impossible until it’s done.</a>
               </h4>
               <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
               <div class="ratings">
                 <i class="fa fa-star" aria-hidden="true"></i>
                 <i class="fa fa-star" aria-hidden="true"></i>
                 <i class="fa fa-star-half-o" aria-hidden="true"></i>
                 <i class="fa fa-star-o"></i>
                 <i class="fa fa-star-half"></i>
               </div>
            </div>
          </div>
        </article>
        <div class="clearfix spacer"></div>
        <article>
          <h2 class="icon"><i class="fa fa-hashtag" aria-hidden="true"></i>rankings</h2>
          <ul class="sidebar-links">
            <li class="fa fa-chevron-right"><a href="#">best rated videos</a></li>
            <li class="fa fa-chevron-right"><a href="#">highly viewed</a></li>
            <li class="fa fa-chevron-right"><a href="#">most commented</a></li>
            <li class="fa fa-chevron-right"><a href="#">videos of month</a></li>
            <li class="fa fa-chevron-right"><a href="#">popular all time</a></li>
          </ul>
        </article>
        <div class="clearfix spacer"></div>
        <article>
          <h2 class="icon"><i class="fa fa-tag" aria-hidden="true"></i>tags</h2>
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
        </article>
        <div class="clearfix spacer"></div>
        <article class="reviews">
          <h2 class="icon"><i class="fa fa-star" aria-hidden="true"></i>top review</h2>
          <!-- POST L size -->
          <div class="post post-medium">
            <a class="thumbr post-thumb" href="#">
            <span class="review-number">4.8</span>
            <img src = "{{ asset ('homes/img/thumbs/thumb-review7.jpg')}}" class="review img-responsive" alt="Review">
            </a>
            <div class="infor">
               <h4>
                 <a class="title" href="#">Lazy Betty B*tch</a>
               </h4>
               <div class="ratings">
                 <i class="fa fa-star" aria-hidden="true"></i>
                 <i class="fa fa-star" aria-hidden="true"></i>
                 <i class="fa fa-star-half-o" aria-hidden="true"></i>
                 <i class="fa fa-star-o"></i>
                 <i class="fa fa-star-half"></i>
               </div>
            </div>
          </div>
        </article>
        <div class="clearfix spacer"></div>
        <!-- SIDEBAR ADVERTISE BOX -->
        <a href="" class="banner-l">
        <img src = "{{ asset ('homes/img/banners/banner-l.jpg')}}" class="img-responsive" alt="Buy Now Muvee Reviews Bootstrap HTML5 Template" title="Buy Now Muvee Reviews Bootstrap HTML5 Template">
        </a>
      </aside>
   </div>
   <!-- MAIN CONTENT -->
   <div class="col-lg-10 col-md-12">
      <!-- EDITORS CHOICE -->
      <section id="editor-choice">
        <h2 class="icon"><i class="fa fa-trophy" aria-hidden="true"></i>editor’s choice</h2>
        <div class="row auto-clear">
          <!-- MAIN POST -->
          <div class="col-lg-6 col-md-12 col-sm-12">
            <!-- POST L size -->
            <article class="post post-medium main-large-post">
               <div class="thumbr">
                 <div class="flag flag1"><i class="fa fa-star"></i></div>
                 <a class="post-thumb" href="" data-lity>
                 <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                 <img class="img-responsive" src = "{{ asset ('homes/img/thumbs/editors-large.jpg')}}" alt="#">
                 </a>
                 <div class="infor">
                   <h4>
                     <a class="title" href="#">Kiss me if I’m wrong but Dinosaurs still exist? Right?</a>
                   </h4>
                   <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
                   <div class="ratings">
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star-half-o" aria-hidden="true"></i>
                     <i class="fa fa-star-o"></i>
                     <i class="fa fa-star-half"></i>
                   </div>
                   <div class="vid-time-block">
                     <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                   </div>
                 </div>
               </div>
            </article>
          </div>
          <!-- SMALL POSTS -->
          <div class="col-lg-6 col-md-12 col-sm-12 editor-choice-small">
            <div class="row 3-right-posts">
               <article class="col-sm-6 post post-medium small-post">
                 <div class="thumbr">
                   <div class="flag flag1"><i class="fa fa-star"></i></div>
                   <a class="post-thumb" href="" data-lity>
                   <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                   <img class="img-responsive" src = "{{ asset ('homes/img/thumbs/thumb-s.jpg')}}" alt="#">
                   </a>
                   <div class="infor">
                     <h4>
                        <a class="title" href="#">Kiss me if I’m wrong but Dinosaurs still exist? Right?</a>
                     </h4>
                     <div class="vid-time-block home-small-posts">
                        <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
                        <div class="ratings">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-half-o" aria-hidden="true"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-half"></i>
                        </div>
                        <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                     </div>
                   </div>
                 </div>
               </article>
               <article class="col-sm-6 post post-medium small-post">
                 <div class="thumbr">
                   <div class="flag flag1"><i class="fa fa-star"></i></div>
                   <a class="post-thumb" href="" data-lity>
                   <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                   <img class="img-responsive" src = "{{ asset ('homes/img/thumbs/thumb-s2.jpg')}}" alt="#">
                   </a>
                   <div class="infor">
                     <h4>
                        <a class="title" href="#">Kiss me if I’m wrong but Dinosaurs still exist? Right?</a>
                     </h4>
                     <div class="vid-time-block home-small-posts">
                        <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
                        <div class="ratings">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-half-o" aria-hidden="true"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-half"></i>
                        </div>
                        <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                     </div>
                   </div>
                 </div>
               </article>
               <article class="col-sm-6 post post-medium small-post">
                 <div class="thumbr">
                   <div class="flag flag1"><i class="fa fa-star"></i></div>
                   <a class="post-thumb" href="" data-lity>
                   <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                   <img class="img-responsive" src = "{{ asset ('homes/img/thumbs/thumb-s3.jpg')}}" alt="#">
                   </a>
                   <div class="infor">
                     <h4>
                        <a class="title" href="#">Kiss me if I’m wrong but Dinosaurs still exist? Right?</a>
                     </h4>
                     <div class="vid-time-block home-small-posts">
                        <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
                        <div class="ratings">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-half-o" aria-hidden="true"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-half"></i>
                        </div>
                        <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                     </div>
                   </div>
                 </div>
               </article>
               <article class="col-sm-6 post post-medium small-post">
                 <div class="thumbr">
                   <div class="flag flag1"><i class="fa fa-star"></i></div>
                   <a class="post-thumb" href="" data-lity>
                   <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                   <img class="img-responsive" src = "{{ asset ('homes/img/thumbs/thumb-s4.jpg')}}" alt="#">
                   </a>
                   <div class="infor">
                     <h4>
                        <a class="title" href="#">Kiss me if I’m wrong but Dinosaurs still exist? Right?</a>
                     </h4>
                     <div class="vid-time-block home-small-posts">
                        <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
                        <div class="ratings">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-half-o" aria-hidden="true"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-half"></i>
                        </div>
                        <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                     </div>
                   </div>
                 </div>
               </article>
            </div>
          </div>
        </div>
      </section>
      <div class="clearfix"></div>
      <!-- MAIN ROLL ADVERTISE BOX -->
      <a href="" class="banner-md">
      <img src = "{{ asset ('homes/img/banners/banner-xl.jpg')}}" class="img-responsive" alt="Buy Now Muvee Reviews Bootstrap HTML5 Template" title="Buy Now Muvee Reviews Bootstrap HTML5 Template">
      </a>
      <!-- CURRENTLY VIEWING -->
      <section id="cur-view">
        <h2 class="icon"><i class="fa fa-eye" aria-hidden="true"></i>currently viewing</h2>
        <div class="row auto-clear">
          <!-- POST L size -->
          <article class="col-lg-2 col-md-4 col-sm-6 post post-medium">
            <div class="thumbr">
               <a class="post-thumb" href="" data-lity>
                 <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                 <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                 <img class="img-responsive" src = "{{ asset ('homes/img/thumbs/thumb-s3.jpg')}}" alt="#">
               </a>
            </div>
            <div class="infor">
               <h4>
                 <a class="title" href="#">You play Call of Duty? That’s cute</a>
               </h4>
               <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
               <div class="ratings">
                 <i class="fa fa-star" aria-hidden="true"></i>
                 <i class="fa fa-star" aria-hidden="true"></i>
                 <i class="fa fa-star-half-o" aria-hidden="true"></i>
                 <i class="fa fa-star-o"></i>
                 <i class="fa fa-star-half"></i>
               </div>
            </div>
          </article>
          <!-- POST L size -->
          <article class="col-lg-2 col-md-4 col-sm-6 post post-medium">
            <div class="thumbr">
               <a class="post-thumb" href="" data-lity>
                 <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                 <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                 <img class="img-responsive" src = "{{ asset ('homes/img/thumbs/thumb-s6.jpg')}}" alt="#">
               </a>
            </div>
            <div class="infor">
               <h4>
                 <a class="title" href="#">Stay strong, the weekend is coming</a>
               </h4>
               <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
               <div class="ratings">
                 <i class="fa fa-star" aria-hidden="true"></i>
                 <i class="fa fa-star" aria-hidden="true"></i>
                 <i class="fa fa-star-half-o" aria-hidden="true"></i>
                 <i class="fa fa-star-o"></i>
                 <i class="fa fa-star-half"></i>
               </div>
            </div>
          </article>
          <!-- POST L size -->
          <article class="col-lg-2 col-md-4 col-sm-6 post post-medium">
            <div class="thumbr">
               <a class="post-thumb" href="" data-lity>
                 <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                 <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                 <img class="img-responsive" src = "{{ asset ('homes/img/thumbs/thumb-s4.jpg')}}" alt="#">
               </a>
            </div>
            <div class="infor">
               <h4>
                 <a class="title" href="#">Be who and what you want, period</a>
               </h4>
               <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
               <div class="ratings">
                 <i class="fa fa-star" aria-hidden="true"></i>
                 <i class="fa fa-star" aria-hidden="true"></i>
                 <i class="fa fa-star-half-o" aria-hidden="true"></i>
                 <i class="fa fa-star-o"></i>
                 <i class="fa fa-star-half"></i>
               </div>
            </div>
          </article>
          <!-- POST L size -->
          <article class="col-lg-2 col-md-4 col-sm-6 post post-medium">
            <div class="thumbr">
               <a class="post-thumb" href="" data-lity>
                 <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                 <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                 <img class="img-responsive" src = "{{ asset ('homes/img/thumbs/thumb-s2.jpg')}}" alt="#">
               </a>
            </div>
            <div class="infor">
               <h4>
                 <a class="title" href="#">Don’t let anyone tell you that you’re not strong enough</a>
               </h4>
               <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
               <div class="ratings">
                 <i class="fa fa-star" aria-hidden="true"></i>
                 <i class="fa fa-star" aria-hidden="true"></i>
                 <i class="fa fa-star-half-o" aria-hidden="true"></i>
                 <i class="fa fa-star-o"></i>
                 <i class="fa fa-star-half"></i>
               </div>
            </div>
          </article>
          <!-- POST L size -->
          <article class="col-lg-2 col-md-4 col-sm-6 post post-medium">
            <div class="thumbr">
               <a class="post-thumb" href="" data-lity>
                 <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                 <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                 <img class="img-responsive" src = "{{ asset ('homes/img/thumbs/thumb-s5.jpg')}}" alt="#">
               </a>
            </div>
            <div class="infor">
               <h4>
                 <a class="title" href="#">Weekend, please don’t leave me</a>
               </h4>
               <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
               <div class="ratings">
                 <i class="fa fa-star" aria-hidden="true"></i>
                 <i class="fa fa-star" aria-hidden="true"></i>
                 <i class="fa fa-star-half-o" aria-hidden="true"></i>
                 <i class="fa fa-star-o"></i>
                 <i class="fa fa-star-half"></i>
               </div>
            </div>
          </article>
          <!-- POST L size -->
          <article class="col-lg-2 col-md-4 col-sm-6 post post-medium">
            <div class="thumbr">
               <a class="post-thumb" href="" data-lity>
                 <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                 <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                 <img class="img-responsive" src = "{{ asset ('homes/img/thumbs/thumb-s.jpg')}}" alt="#">
               </a>
            </div>
            <div class="infor">
               <h4>
                 <a class="title" href="#">You think this is a game?</a>
               </h4>
               <span class="posts-txt" title="Posts from Channel"><i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895</span>
               <div class="ratings">
                 <i class="fa fa-star" aria-hidden="true"></i>
                 <i class="fa fa-star" aria-hidden="true"></i>
                 <i class="fa fa-star-half-o" aria-hidden="true"></i>
                 <i class="fa fa-star-o"></i>
                 <i class="fa fa-star-half"></i>
               </div>
            </div>
          </article>
        </div>
      </section>
      <div class="clearfix spacer"></div>
      <!-- REVIEWS -->
      <section id="main-reviews">
        <div id="myCarousel2" class="carousel slide" data-ride="carousel">
          <h2 class="icon"><i class="fa fa-star" aria-hidden="true"></i>top reviews</h2>
          <div class="carousel-control-box">
            <a class="left carousel-control" href="#myCarousel2"  role="button" data-slide="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
            <a class="right carousel-control" href="#myCarousel2"  role="button" data-slide="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
          </div>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
               <div class="row auto-clear">
                 <article class="reviews col-lg-2 col-md-4 col-sm-4">
                   <!-- POST L size -->
                   <div class="post post-medium">
                     <a class="thumbr post-thumb" href="#">
                     <span class="review-number">4.5</span>
                     <img src = "{{ asset ('homes/img/thumbs/thumb-review.jpg')}}" class="review img-responsive" alt="Client">
                     </a>
                     <div class="infor">
                        <h4>
                          <a class="title" href="#">Little Miss Piggy</a>
                        </h4>
                        <div class="ratings">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-half-o" aria-hidden="true"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-half"></i>
                        </div>
                     </div>
                   </div>
                 </article>
                 <article class="reviews col-lg-2 col-md-4 col-sm-4">
                   <!-- POST L size -->
                   <div class="post post-medium">
                     <a class="thumbr post-thumb" href="#">
                     <span class="review-number">4.5</span>
                     <img src = "{{ asset ('homes/img/thumbs/thumb-review2.jpg')}}" class="review img-responsive" alt="Client">
                     </a>
                     <div class="infor">
                        <h4>
                          <a class="title" href="#">Dimples Little Miss Cupcake</a>
                        </h4>
                        <div class="ratings">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-half-o" aria-hidden="true"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-half"></i>
                        </div>
                     </div>
                   </div>
                 </article>
                 <article class="reviews col-lg-2 col-md-4 col-sm-4">
                   <!-- POST L size -->
                   <div class="post post-medium">
                     <a class="thumbr post-thumb" href="#">
                     <span class="review-number">4.5</span>
                     <img src = "{{ asset ('homes/img/thumbs/thumb-review3.jpg')}}" class="review img-responsive" alt="Client">
                     </a>
                     <div class="infor">
                        <h4>
                          <a class="title" href="#">Angel Snowflakes</a>
                        </h4>
                        <div class="ratings">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-half-o" aria-hidden="true"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-half"></i>
                        </div>
                     </div>
                   </div>
                 </article>
                 <article class="reviews col-lg-2 col-md-4 col-sm-4">
                   <!-- POST L size -->
                   <div class="post post-medium">
                     <a class="thumbr post-thumb" href="#">
                     <span class="review-number">4.5</span>
                     <img src = "{{ asset ('homes/img/thumbs/thumb-review4.jpg')}}" class="review img-responsive" alt="Client">
                     </a>
                     <div class="infor">
                        <h4>
                          <a class="title" href="#">Brutal Lovely Lights</a>
                        </h4>
                        <div class="ratings">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-half-o" aria-hidden="true"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-half"></i>
                        </div>
                     </div>
                   </div>
                 </article>
                 <article class="reviews col-lg-2 col-md-4 col-sm-4">
                   <!-- POST L size -->
                   <div class="post post-medium">
                     <a class="thumbr post-thumb" href="#">
                     <span class="review-number">4.5</span>
                     <img src = "{{ asset ('homes/img/thumbs/thumb-review5.jpg')}}" class="review img-responsive" alt="Client">
                     </a>
                     <div class="infor">
                        <h4>
                          <a class="title" href="#">Snerus Dear sweetie</a>
                        </h4>
                        <div class="ratings">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-half-o" aria-hidden="true"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-half"></i>
                        </div>
                     </div>
                   </div>
                 </article>
                 <article class="reviews col-lg-2 col-md-4 col-sm-4">
                   <!-- POST L size -->
                   <div class="post post-medium">
                     <a class="thumbr post-thumb" href="#">
                     <span class="review-number">4.5</span>
                     <img src = "{{ asset ('homes/img/thumbs/thumb-review6.jpg')}}" class="review img-responsive" alt="Client">
                     </a>
                     <div class="infor">
                        <h4>
                          <a class="title" href="#">Fruity Touch</a>
                        </h4>
                        <div class="ratings">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-half-o" aria-hidden="true"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-half"></i>
                        </div>
                     </div>
                   </div>
                 </article>
               </div>
            </div>
            <div class="item">
               <div class="row auto-clear">
                 <article class="reviews col-lg-2 col-md-4 col-sm-4">
                   <!-- POST L size -->
                   <div class="post post-medium">
                     <a class="thumbr post-thumb" href="#">
                     <span class="review-number">4.5</span>
                     <img src = "{{ asset ('homes/img/thumbs/thumb-review.jpg')}}" class="review img-responsive" alt="Client">
                     </a>
                     <div class="infor">
                        <h4>
                          <a class="title" href="#">Little Miss Piggy</a>
                        </h4>
                        <div class="ratings">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-half-o" aria-hidden="true"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-half"></i>
                        </div>
                     </div>
                   </div>
                 </article>
                 <article class="reviews col-lg-2 col-md-4 col-sm-4">
                   <!-- POST L size -->
                   <div class="post post-medium">
                     <a class="thumbr post-thumb" href="#">
                     <span class="review-number">4.5</span>
                     <img src = "{{ asset ('homes/img/thumbs/thumb-review2.jpg')}}" class="review img-responsive" alt="Client">
                     </a>
                     <div class="infor">
                        <h4>
                          <a class="title" href="#">Dimples Little Miss Cupcake</a>
                        </h4>
                        <div class="ratings">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-half-o" aria-hidden="true"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-half"></i>
                        </div>
                     </div>
                   </div>
                 </article>
                 <article class="reviews col-lg-2 col-md-4 col-sm-4">
                   <!-- POST L size -->
                   <div class="post post-medium">
                     <a class="thumbr post-thumb" href="#">
                     <span class="review-number">4.5</span>
                     <img src = "{{ asset ('homes/img/thumbs/thumb-review3.jpg')}}" class="review img-responsive" alt="Client">
                     </a>
                     <div class="infor">
                        <h4>
                          <a class="title" href="#">Angel Snowflakes</a>
                        </h4>
                        <div class="ratings">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-half-o" aria-hidden="true"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-half"></i>
                        </div>
                     </div>
                   </div>
                 </article>
                 <article class="reviews col-lg-2 col-md-4 col-sm-4">
                   <!-- POST L size -->
                   <div class="post post-medium">
                     <a class="thumbr post-thumb" href="#">
                     <span class="review-number">4.5</span>
                     <img src = "{{ asset ('homes/img/thumbs/thumb-review4.jpg')}}" class="review img-responsive" alt="Client">
                     </a>
                     <div class="infor">
                        <h4>
                          <a class="title" href="#">Brutal Lovely Lights</a>
                        </h4>
                        <div class="ratings">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-half-o" aria-hidden="true"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-half"></i>
                        </div>
                     </div>
                   </div>
                 </article>
                 <article class="reviews col-lg-2 col-md-4 col-sm-4">
                   <!-- POST L size -->
                   <div class="post post-medium">
                     <a class="thumbr post-thumb" href="#">
                     <span class="review-number">4.5</span>
                     <img src = "{{ asset ('homes/img/thumbs/thumb-review5.jpg')}}" class="review img-responsive" alt="Client">
                     </a>
                     <div class="infor">
                        <h4>
                          <a class="title" href="#">Snerus Dear sweetie</a>
                        </h4>
                        <div class="ratings">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-half-o" aria-hidden="true"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-half"></i>
                        </div>
                     </div>
                   </div>
                 </article>
                 <article class="reviews col-lg-2 col-md-4 col-sm-4">
                   <!-- POST L size -->
                   <div class="post post-medium">
                     <a class="thumbr post-thumb" href="#">
                     <span class="review-number">4.5</span>
                     <img src = "{{ asset ('homes/img/thumbs/thumb-review6.jpg')}}" class="review img-responsive" alt="Client">
                     </a>
                     <div class="infor">
                        <h4>
                          <a class="title" href="#">Fruity Touch</a>
                        </h4>
                        <div class="ratings">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-half-o" aria-hidden="true"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-half"></i>
                        </div>
                     </div>
                   </div>
                 </article>
               </div>
            </div>
          </div>
        </div>
      </section>
   </div>
 </div>
 <div class="clearfix"></div>
</div>
<!-- CHANNELS -->
<div id="channels-block" class="container-fluid channels-bg">
 <div class="container-fluid ">
   <div class="col-md-12">
      <!-- CHANNELS -->
      <section id="channels">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <h2 class="icon"><i class="fa fa-television" aria-hidden="true"></i>channels</h2>
          <div class="carousel-control-box">
            <a class="left carousel-control" href="#myCarousel"  role="button" data-slide="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
            <a class="right carousel-control" href="#myCarousel"  role="button" data-slide="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
          </div>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
               <div class="row auto-clear">
                 <article class="col-lg-2 col-md-4 col-sm-4">
                   <div class="post post-medium">
                     <div class="thumbr">
                        <a class="post-thumb" href="#">
                        <img class="img-responsive" src = "{{ asset ('homes/img/channels/ch-1.jpg')}}" alt="#">
                        </a>
                     </div>
                     <div class="infor">
                        <h4>
                          <a class="title" href="#">Fancy Channel Name</a>
                        </h4>
                        <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera" aria-hidden="true"></i>4000</span>
                     </div>
                   </div>
                 </article>
                 <article class="col-lg-2 col-md-4 col-sm-4">
                   <div class="post post-medium">
                     <div class="thumbr">
                        <a class="post-thumb" href="#">
                        <img class="img-responsive" src = "{{ asset ('homes/img/channels/ch-1.jpg')}}" alt="#">
                        </a>
                     </div>
                     <div class="infor">
                        <h4>
                          <a class="title" href="#">Premium MakeUp Beauty Channel</a>
                        </h4>
                        <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera" aria-hidden="true"></i>4000</span>
                     </div>
                   </div>
                 </article>
                 <article class="col-lg-2 col-md-4 col-sm-4">
                   <div class="post post-medium">
                     <div class="thumbr">
                        <a class="post-thumb" href="#">
                        <img class="img-responsive" src = "{{ asset ('homes/img/channels/ch-1.jpg')}}" alt="#">
                        </a>
                     </div>
                     <div class="infor">
                        <h4>
                          <a class="title" href="#">Private Golden CH</a>
                        </h4>
                        <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera" aria-hidden="true"></i>4000</span>
                     </div>
                   </div>
                 </article>
                 <article class="col-lg-2 col-md-4 col-sm-4">
                   <div class="post post-medium">
                     <div class="thumbr">
                        <a class="post-thumb" href="#">
                        <img class="img-responsive" src = "{{ asset ('homes/img/channels/ch-1.jpg')}}" alt="#">
                        </a>
                     </div>
                     <div class="infor">
                        <h4>
                          <a class="title" href="#">4K Quality Videos</a>
                        </h4>
                        <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera" aria-hidden="true"></i>4000</span>
                     </div>
                   </div>
                 </article>
                 <article class="col-lg-2 col-md-4 col-sm-4">
                   <div class="post post-medium">
                     <div class="thumbr">
                        <a class="post-thumb" href="#">
                        <img class="img-responsive" src = "{{ asset ('homes/img/channels/ch-1.jpg')}}" alt="#">
                        </a>
                     </div>
                     <div class="infor">
                        <h4>
                          <a class="title" href="#">Japan Couture Video</a>
                        </h4>
                        <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera" aria-hidden="true"></i>4000</span>
                     </div>
                   </div>
                 </article>
                 <article class="col-lg-2 col-md-4 col-sm-4">
                   <div class="post post-medium">
                     <div class="thumbr">
                        <a class="post-thumb" href="#">
                        <img class="img-responsive" src = "{{ asset ('homes/img/channels/ch-1.jpg')}}" alt="#">
                        </a>
                     </div>
                     <div class="infor">
                        <h4>
                          <a class="title" href="#">Burlesque French Movies</a>
                        </h4>
                        <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera" aria-hidden="true"></i>4000</span>
                     </div>
                   </div>
                 </article>
               </div>
            </div>
            <div class="item">
               <div class="row auto-clear">
                 <article class="col-lg-2 col-md-4 col-sm-4">
                   <div class="post post-medium">
                     <div class="thumbr">
                        <a class="post-thumb" href="#">
                        <img class="img-responsive" src = "{{ asset ('homes/img/channels/ch-1.jpg')}}" alt="#">
                        </a>
                     </div>
                     <div class="infor">
                        <h4>
                          <a class="title" href="#">Fancy Channel Name</a>
                        </h4>
                        <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera" aria-hidden="true"></i>4000</span>
                     </div>
                   </div>
                 </article>
                 <article class="col-lg-2 col-md-4 col-sm-4">
                   <div class="post post-medium">
                     <div class="thumbr">
                        <a class="post-thumb" href="#">
                        <img class="img-responsive" src = "{{ asset ('homes/img/channels/ch-1.jpg')}}" alt="#">
                        </a>
                     </div>
                     <div class="infor">
                        <h4>
                          <a class="title" href="#">Premium MakeUp Beauty Channel</a>
                        </h4>
                        <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera" aria-hidden="true"></i>4000</span>
                     </div>
                   </div>
                 </article>
                 <article class="col-lg-2 col-md-4 col-sm-4">
                   <div class="post post-medium">
                     <div class="thumbr">
                        <a class="post-thumb" href="#">
                        <img class="img-responsive" src = "{{ asset ('homes/img/channels/ch-1.jpg')}}" alt="#">
                        </a>
                     </div>
                     <div class="infor">
                        <h4>
                          <a class="title" href="#">Private Golden CH</a>
                        </h4>
                        <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera" aria-hidden="true"></i>4000</span>
                     </div>
                   </div>
                 </article>
                 <article class="col-lg-2 col-md-4 col-sm-4">
                   <div class="post post-medium">
                     <div class="thumbr">
                        <a class="post-thumb" href="#">
                        <img class="img-responsive" src = "{{ asset ('homes/img/channels/ch-1.jpg')}}" alt="#">
                        </a>
                     </div>
                     <div class="infor">
                        <h4>
                          <a class="title" href="#">4K Quality Videos</a>
                        </h4>
                        <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera" aria-hidden="true"></i>4000</span>
                     </div>
                   </div>
                 </article>
                 <article class="col-lg-2 col-md-4 col-sm-4">
                   <div class="post post-medium">
                     <div class="thumbr">
                        <a class="post-thumb" href="#">
                        <img class="img-responsive" src = "{{ asset ('homes/img/channels/ch-1.jpg')}}" alt="#">
                        </a>
                     </div>
                     <div class="infor">
                        <h4>
                          <a class="title" href="#">Japan Couture Video</a>
                        </h4>
                        <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera" aria-hidden="true"></i>4000</span>
                     </div>
                   </div>
                 </article>
                 <article class="col-lg-2 col-md-4 col-sm-4">
                   <div class="post post-medium">
                     <div class="thumbr">
                        <a class="post-thumb" href="#">
                        <img class="img-responsive" src = "{{ asset ('homes/img/channels/ch-1.jpg')}}" alt="#">
                        </a>
                     </div>
                     <div class="infor">
                        <h4>
                          <a class="title" href="#">Burlesque French Movies</a>
                        </h4>
                        <span class="posts-channel" title="Posts from Channel"><i class="fa fa-video-camera" aria-hidden="true"></i>4000</span>
                     </div>
                   </div>
                 </article>
               </div>
            </div>
          </div>
        </div>
      </section>
      <div class="clearfix"></div>
   </div>
 </div>
</div>
<!-- BOTTOM BANNER -->
<div id="bottom-banner" class="container text-center">
 <!-- BOTTOM ADVERTISE BOX -->
 <a href="" class="banner-xl">
 <img src = "{{ asset ('homes/img/banners/banner-xl.jpg')}}" class="img-responsive" alt="Buy Now Muvee Reviews Bootstrap HTML5 Template" title="Buy Now Muvee Reviews Bootstrap HTML5 Template">
 </a>    
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
</div>
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

                        
