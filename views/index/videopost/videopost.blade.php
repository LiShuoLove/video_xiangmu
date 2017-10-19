﻿<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="OrcasThemes">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
      <title></title>
      <!-- Bootstrap core CSS -->
      <link href="{{ ('index/css/bootstrap.css') }}" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link rel="stylesheet" href="{{ ('index/css/screen.css') }}">
      <link rel="stylesheet" href="{{ ('index/css/animation.css') }}">
      <!--[if IE 7]>
      
      <![endif]-->
      <link rel="stylesheet" href="{{ ('index/css/font-awesome.css') }}">
      <!--[if lt IE 8]>
      <link rel="stylesheet" href="{{ asset('index/css/ie') }}" type="text/css" media="screen, projection">
      <![endif]-->
      <link href="{{ ('index/css/lity.css') }}" rel="stylesheet">
   </head>
   <body>
      <!-- SINGLE VIDEO -->
      <div id="single-video" class="container-fluid standard-bg">
         <!-- HEADER -->
         <div class="row header-top">
            <div class="col-lg-3 col-md-6 col-sm-5">
               <a class="main-logo" href="#"><img src="{{ ('index/img/main-logo.png') }}" class="main-logo" alt="Muvee Reviews" title="Muvee Reviews"></a>
            </div>
            <div class="col-lg-6 hidden-md text-center hidden-sm hidden-xs">
               <img src="{{ ('index/img/banners/banner-sm.jpg') }}" class="img-responsive" alt="Buy Now">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-7 hidden-xs">
               <div class="right-box">
                  <button type="button" class="access-btn" data-toggle="modal" data-target="#enquirypopup">get free access</button>
               </div>
            </div>
         </div>
         <!-- MENU -->
         <div class="row home-mega-menu ">
            <div class="col-md-12">
               <nav class="navbar navbar-default">
                  <div class="navbar-header">
                     <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js') }}"-navbar-collapse">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                  </div>
                  <div class="collapse navbar-collapse js-navbar-collapse megabg dropshd ">
                     <ul class="nav navbar-nav">
                        <li><a href="index.html">首页</a></li>
						<li><a href="single-video.html">视频发布</a></li>
						<li><a href="single-page.html">单页-基本</a></li>
						<li><a href="single-page-with-img.html">单页-有图像</a></li>
						<li><a href="login.html">登录</a></li>
						<li><a href="gallery-video-boxed.html">画廊</a></li>
						<li><a href="contact.html">联系</a></li>
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
         <!-- SINGLE VIDEO -->
         <div class="row">
            <!-- SIDEBAR -->
            <div class="col-lg-2 col-md-4 hidden-sm hidden-xs">
               <aside class="dark-bg">
                  <article>
                     <h2 class="icon"><i class="fa fa-gears" aria-hidden="true"></i>categories</h2>
                     <ul class="sidebar-links">
                        <li class="fa fa-chevron-right"><a href="#">Lifestyle</a><span>4.000</span></li>
                        <li class="fa fa-chevron-right"><a href="#">World News</a><span>2.000</span></li>
                        <li class="fa fa-chevron-right"><a href="#">Funny videos</a><span>650</span></li>
                        <li class="fa fa-chevron-right"><a href="#">Hot Stories</a><span>4.000</span></li>
                        <li class="fa fa-chevron-right"><a href="#">Music Clips</a><span>7.800</span></li>
                        <li class="fa fa-chevron-right"><a href="#">Premier Trailers</a><span>200</span></li>
                     </ul>
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
                        <img src="{{ asset('index/img/thumbs/thumb-review7.jpg') }}" class="review img-responsive" alt="Review">
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
                  <article>
                     <h2 class="icon"><i class="fa fa-plug" aria-hidden="true"></i>subscribe</h2>
                     <!-- SUBSCRIBE FIELD -->
                     <form name="search-submit" method="post" action="#" id="subscribe-submit">
                        <fieldset class="search-fieldset">
                           <input id="subscribe" type="text" name="search" size="12" class="search-field" placeholder="Your email address" value="">
                           <button class="subscribe-btn" type="submit" title="Subscribe">Subscribe</button>
                        </fieldset>
                     </form>
                  </article>
               </aside>
            </div>
            <!-- SINGLE VIDEO -->	
            <div id="single-video-wrapper" class="col-lg-10 col-md-8">
               <div class="row">
                  <!-- VIDEO SINGLE POST -->
                  <div class="col-lg-8 col-md-12 col-sm-12">
                     <!-- POST L size -->
                     <article class="post-video">
                        <!-- VIDEO INFO -->
                        <div class="video-info">
                           <!-- 16:9 aspect ratio -->
                           <div class="embed-responsive embed-responsive-16by9 video-embed-box">
                              <iframe src=""  class="embed-responsive-item"></iframe>
                           </div>
                           <h2 class="title main-head-title">Kiss me if I’m wrong but Dinosaurs still exist? Right?s</h2>
                           <div class="metabox">
                              <span class="meta-i">
                              <i class="fa fa-thumbs-up" aria-hidden="true"></i>20.895
                              </span>
                              <span class="meta-i">
                              <i class="fa fa-thumbs-down" aria-hidden="true"></i>3.981
                              </span>
                              <span class="meta-i">
                              <i class="fa fa-user"></i><a href="#" class="author" title="John Doe">John Doe</a>
                              </span>
                              <span class="meta-i">
                              <i class="fa fa-clock-o"></i>March 16. 2017
                              </span>
                              <span class="meta-i">
                              <i class="fa fa-eye"></i>1,347,912 views
                              </span>
                              <div class="ratings">
                                 <i class="fa fa-star" aria-hidden="true"></i>
                                 <i class="fa fa-star" aria-hidden="true"></i>
                                 <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                 <i class="fa fa-star-o"></i>
                                 <i class="fa fa-star-half"></i>
                              </div>
                           </div>
                           <ul class="social">
                              <li class="social-facebook"><a href="#" class="fa fa-facebook social-icons"></a></li>
                              <li class="social-google-plus"><a href="#" class="fa fa-google-plus social-icons"></a></li>
                              <li class="social-twitter"><a href="#" class="fa fa-twitter social-icons"></a></li>
                              <li class="social-youtube"><a href="#" class="fa fa-youtube social-icons"></a></li>
                              <li class="social-rss"><a href="#" class="fa fa-rss social-icons"></a></li>
                           </ul>
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
                           <div class="share-input">
                              <input type="text" value="" name="share-input">
                              <span class="fa fa-chain sharelinkicon"></span>
                           </div>
                        </div>
                        <div class="clearfix spacer"></div>
                        <!-- DETAILS -->
                        <div class="video-content">
                           <h2 class="title main-head-title">Video Details</h2>
                           <p>
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                           </p>
                           <p>
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                           </p>
                        </div>
                        <div class="clearfix spacer"></div>
                        <!-- MAIN ROLL ADVERTISE BOX -->
                        <a href="" class="banner-md">
                        <img src="{{ ('index/img/banners/banner-xl.jpg') }}" class="img-responsive" alt="Buy Now Muvee Reviews Bootstrap HTML5 Template" title="Buy Now Muvee Reviews Bootstrap HTML5 Template">
                        </a>
                     </article>
                  
					<!-- COMMENTS -->
					<section id="comments">
						<h2 class="title">leave comment</h2>
						<div class="widget-area">
							<div class="status-upload">
								<form>
									<textarea placeholder="Your comment goes here" ></textarea>
									<div class="comment-box-control">
										<ul>
											<li><a title="" data-placement="bottom" data-original-title="Video"><i class="fa fa-video-camera"></i></a></li>
											<li><a title="" data-placement="bottom" data-original-title="Picture"><i class="fa fa-picture-o"></i></a></li>
											<li><a title="" data-placement="bottom" data-original-title="Smile"><i class="fa fa-smile-o"></i></a></li>
										</ul>
										<button type="submit" class="btn pull-right"><i class="fa fa-share"></i> post comment</button>
									</div>
								</form>
							</div><!-- Status Upload  -->
						</div><!-- Widget Area -->
						
						
						<div class="row comment-posts">
							<div class="col-sm-1">
								<div class="thumbnail">
									<img class="img-responsive user-photo" src="{{ asset('index/img/thumbs/thumb-review.jpg') }}" alt="Comment User Avatar">
								</div>
							</div>

							<div class="col-sm-11">
								<div class="panel panel-default">
									<div class="panel-heading">
										<strong>John Doe</strong> <span class="pull-right">commented 5 days ago</span>
									</div>
									<div class="panel-body">
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting
									</div>
								</div>
							</div>
						
							<div class="col-sm-1">
								<div class="thumbnail">
									<img class="img-responsive user-photo" src="{{ asset('index/img/thumbs/thumb-review.jpg') }}" alt="Comment User Avatar">
								</div>
							</div>

							<div class="col-sm-11">
								<div class="panel panel-default">
									<div class="panel-heading">
										<strong>John Doe</strong> <span class="pull-right">commented 5 days ago</span>
									</div>
									<div class="panel-body">
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting
									</div>
								</div>
							</div>
						</div>

					</section>
				  
				  </div>
				  
                  <!-- VIDEO SIDE BANNERS -->
                  <div class="col-lg-4 hidden-md hidden-sm">
                     <!-- MAIN ROLL ADVERTISE BOX -->
                     <a href="" class="video-right-banner">
                     <img src="{{ ('index/img/banners/banner-400x400.jpg') }}" class="img-responsive" alt="Buy Now Muvee Reviews Bootstrap HTML5 Template" title="Buy Now Muvee Reviews Bootstrap HTML5 Template">
                     </a>
                     <a href="" class="video-right-banner">
                     <img src="{{ ('index/img/banners/banner-400x400.jpg') }}" class="img-responsive" alt="Buy Now Muvee Reviews Bootstrap HTML5 Template" title="Buy Now Muvee Reviews Bootstrap HTML5 Template">
                     </a>
                  </div>
               </div>
               <div class="clearfix spacer"></div>
               <div class="row">
                  <!-- RELATED VIDEOS -->
                  <div class="col-lg-12 col-md-12 col-sm-12 related-videos">
                     <h2 class="icon"><i class="fa fa-trophy" aria-hidden="true"></i>related videos</h2>
                     <div class="row auto-clear">
                        <article class="col-lg-2 col-md-6 col-sm-4">
                           <!-- POST L size -->
                           <div class="post post-medium">
                              <div class="thumbr">
                                 <a class="post-thumb" href="" data-lity>
                                    <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                    <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                    <img class="img-responsive" src="{{ asset('index/img/thumbs/thumb-s.jpg') }}" alt="#">
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
                        <article class="col-lg-2 col-md-6 col-sm-4">
                           <!-- POST L size -->
                           <div class="post post-medium">
                              <div class="thumbr">
                                 <a class="post-thumb" href="" data-lity>
                                    <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                    <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                    <img class="img-responsive" src="{{ asset('index/img/thumbs/thumb-s2.jpg') }}" alt="#">
                                 </a>
                              </div>
                              <div class="infor">
                                 <h4>
                                    <a class="title" href="#">I graduated from the university of Selfies</a>
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
                        <article class="col-lg-2 col-md-6 col-sm-4">
                           <!-- POST L size -->
                           <div class="post post-medium">
                              <div class="thumbr">
                                 <a class="post-thumb" href="" data-lity>
                                    <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                    <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                    <img class="img-responsive" src="{{ asset('index/img/thumbs/thumb-s3.jpg') }}" alt="#">
                                 </a>
                              </div>
                              <div class="infor">
                                 <h4>
                                    <a class="title" href="#">I don’t always surf the internet, but when I do, Eyebrows</a>
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
                        <article class="col-lg-2 col-md-6 col-sm-4">
                           <!-- POST L size -->
                           <div class="post post-medium">
                              <div class="thumbr">
                                 <a class="post-thumb" href="" data-lity>
                                    <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                    <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                    <img class="img-responsive" src="{{ asset('index/img/thumbs/thumb-s4.jpg') }}" alt="#">
                                 </a>
                              </div>
                              <div class="infor">
                                 <h4>
                                    <a class="title" href="#">A selfie a day keeps the friends away</a>
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
                        <article class="col-lg-2 col-md-6 col-sm-4">
                           <!-- POST L size -->
                           <div class="post post-medium">
                              <div class="thumbr">
                                 <a class="post-thumb" href="" data-lity>
                                    <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                    <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                    <img class="img-responsive" src="{{ asset('index/img/thumbs/thumb-s5.jpg') }}" alt="#">
                                 </a>
                              </div>
                              <div class="infor">
                                 <h4>
                                    <a class="title" href="#">A selfie a day keeps the friends away</a>
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
                        <article class="col-lg-2 col-md-6 col-sm-4">
                           <!-- POST L size -->
                           <div class="post post-medium">
                              <div class="thumbr">
                                 <a class="post-thumb" href="" data-lity>
                                    <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                    <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                    <img class="img-responsive" src="{{ asset('index/img/thumbs/thumb-s6.jpg') }}" alt="#">
                                 </a>
                              </div>
                              <div class="infor">
                                 <h4>
                                    <a class="title" href="#">A selfie a day keeps the friends away</a>
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
               </div>
            </div>
         </div>
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
                                       <img class="img-responsive" src="{{ ('index/img/channels/ch-1.jpg') }}" alt="#">
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
                                       <img class="img-responsive" src="{{ ('index/img/channels/ch-1.jpg') }}" alt="#">
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
                                       <img class="img-responsive" src="{{ ('index/img/channels/ch-1.jpg') }}" alt="#">
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
                                       <img class="img-responsive" src="{{ ('index/img/channels/ch-1.jpg') }}" alt="#">
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
                                       <img class="img-responsive" src="{{ ('index/img/channels/ch-1.jpg') }}" alt="#">
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
                                       <img class="img-responsive" src="{{ ('index/img/channels/ch-1.jpg') }}" alt="#">
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
                                       <img class="img-responsive" src="{{ ('index/img/channels/ch-1.jpg') }}" alt="#">
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
                                       <img class="img-responsive" src="{{ ('index/img/channels/ch-1.jpg') }}" alt="#">
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
                                       <img class="img-responsive" src="{{ ('index/img/channels/ch-1.jpg') }}" alt="#">
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
                                       <img class="img-responsive" src="{{ ('index/img/channels/ch-1.jpg') }}" alt="#">
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
                                       <img class="img-responsive" src="{{ ('index/img/channels/ch-1.jpg') }}" alt="#">
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
                                       <img class="img-responsive" src="{{ ('index/img/channels/ch-1.jpg') }}" alt="#">
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
         <img src="{{ ('index/img/banners/banner-xl.jpg') }}" class="img-responsive" alt="Buy Now Muvee Reviews Bootstrap HTML5 Template" title="Buy Now Muvee Reviews Bootstrap HTML5 Template">
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
                                 <img class="img-responsive" src="{{ asset('index/img/thumbs/thumb-s.jpg') }}" alt="#">
                              </a>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 post post-medium">
                           <div class="thumbr">
                              <a class="post-thumb" href="" data-lity title="Video Title Goes Here">
                                 <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                 <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                 <img class="img-responsive" src="{{ asset('index/img/thumbs/thumb-s2.jpg') }}" alt="#">
                              </a>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 post post-medium">
                           <div class="thumbr">
                              <a class="post-thumb" href="" data-lity title="Video Title Goes Here">
                                 <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                 <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                 <img class="img-responsive" src="{{ asset('index/img/thumbs/thumb-s4.jpg') }}" alt="#">
                              </a>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 post post-medium">
                           <div class="thumbr">
                              <a class="post-thumb" href="" data-lity title="Video Title Goes Here">
                                 <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                                 <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                                 <img class="img-responsive" src="{{ asset('index/img/thumbs/thumb-s3.jpg') }}" alt="#">
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
                     <img src="{{ ('index/img/footer-logo.png') }}" class="img-responsive text-center" alt="Video Magazine Bootstrap HTML5 template">
                     </a>	
                     <p>Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
                     
                  </div>
               </div>
            </footer>
         </div>
      </div>
      <!-- JAVA SCRIPT -->
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="{{ asset('index/js/jquery-1.12.1.min.js') }}"') }}"></script>
      <script src="{{ asset('index/js/bootstrap.min.js') }}"') }}"></script>
      <script src="{{ asset('index/js/lity.js') }}"') }}"></script>
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
