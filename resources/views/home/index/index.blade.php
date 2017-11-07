            @extends('home.public.parent')
                        @section('content')
   <!-- HOME MAIN POSTS -->   
   <div class="col-lg-10 col-md-8">
     <section id="home-main">
          @foreach($sect as $c)   
        <div class="row">
          <!-- ARTICLES -->
          <div class="col-lg-12 col-md-12 col-sm-12">
                  <h2 class="icon"><i class="fa fa-television" aria-hidden="true"></i>{{ $c->typename }}</h2>
            <div class="row auto-clear">
         
              <?php foreach( $firstMovies as $fmk => $fmy){ ?>
                 <article class="col-lg-3 col-md-6 col-sm-4">
                   <!-- POST L size -->
                   <div class="post post-medium" >
                     <div class="thumbr">
                       <a class="afterglow post-thumb" href="/home/comments?mid=<?php echo  $fmy->id; ?>" ><!-- data-lity -->
                          <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                          <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                          <img class="img-responsive" src = "/<?php echo $fmy->video_original ?>" alt="#">
                       </a>
                     </div>
                     <div class="infor">
                       <h4>
                          <a class="title"  href="/home/comments?mid=<?php echo  $fmy->id; ?>"><?php echo $fmy->video_info_name ?></a>
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
              <?php }?>
              @endforeach

            @foreach($secttwo as $t)   
              <div class="row">
                <!-- ARTICLES -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2 class="icon"><i class="fa fa-television" aria-hidden="true"></i>{{ $t->typename }}</h2>

                <div class="row auto-clear">
         
              <?php foreach( $twoMovies as $tmk => $tmy){ ?>
                 <article class="col-lg-3 col-md-6 col-sm-4">
                   <!-- POST L size -->
                   <div class="post post-medium" >
                     <div class="thumbr">
                       <a class="afterglow post-thumb" href="/home/comments?mid=<?php echo  $tmy->id; ?>" ><!-- data-lity -->
                          <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                          <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                          <img class="img-responsive" src = "/<?php echo $tmy->video_original ?>" alt="#">
                       </a>
                     </div>
                     <div class="infor">
                       <h4>
                          <a class="title"  href="/home/comments?mid=<?php echo  $tmy->id; ?>"><?php echo $tmy->video_info_name ?></a>
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
              <?php }?>

              @endforeach

              @foreach($sectsan as $s)   
              <div class="row">
                <!-- ARTICLES -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2 class="icon"><i class="fa fa-television" aria-hidden="true"></i>{{ $s->typename }}</h2>
                </div>

                <?php foreach( $threeMovies as $smk => $smy){ ?>
                 <article class="col-lg-3 col-md-6 col-sm-4">
                   <!-- POST L size -->
                   <div class="post post-medium" >
                     <div class="thumbr">
                       <a class="afterglow post-thumb" href="/home/comments?mid=<?php echo  $smy->id; ?>" ><!-- data-lity -->
                          <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                          <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                          <img class="img-responsive" src = "/<?php echo $smy->video_original ?>" alt="#">
                       </a>
                     </div>
                     <div class="infor">
                       <h4>
                          <a class="title"  href="/home/comments?mid=<?php echo  $smy->id; ?>"><?php echo $smy->video_info_name ?></a>
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
              <?php }?>
         
                </div>
              @endforeach

              @foreach($sectfour as $d)   
              <div class="row">
                <!-- ARTICLES -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2 class="icon"><i class="fa fa-television" aria-hidden="true"></i>{{ $d->typename }}</h2>
                </div>

                <?php foreach( $fourMovies as $dmk => $dmy){ ?>
                 <article class="col-lg-3 col-md-6 col-sm-4">
                   <!-- POST L size -->
                   <div class="post post-medium" >
                     <div class="thumbr">
                       <a class="afterglow post-thumb" href="/home/comments?mid=<?php echo  $dmy->id; ?>" ><!-- data-lity -->
                          <span class="play-btn-border" title="Play"><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                          <div class="cactus-note ct-time font-size-1"><span>02:02</span></div>
                          <img class="img-responsive" src = "/<?php echo $dmy->video_original ?>" alt="#">
                       </a>
                     </div>
                     <div class="infor">
                       <h4>
                          <a class="title"  href="/home/comments?mid=<?php echo  $dmy->id; ?>"><?php echo $dmy->video_info_name ?></a>
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
              <?php }?>
         
                </div>
              @endforeach

            </div>
            <div class="clearfix spacer"></div>
          </div>
          <!-- RIGHT ASIDE -->
          <div class="col-lg-12 hidden-md col-sm-12 text-center top-sidebar">
            <!-- SUBSCRIBE BOX -->  
             <div class="subscribe-box">
        
            <!-- SIDEBAR ADVERTISE BOX -->
            @foreach($ad as $a)
            <?php 
              if ($a->state != 1){
            ?>
                <a href="#" class="banner-l hidden-sm hidden-xs">
                  <img src = "{{ asset ('homes/img/banners/banner-sm.jpg') }}" class="img-responsive" alt="Muvee Reviews Video Magazine HTML5 Bootstrap" title="可购买" style="height:150px;width:1010px;">
                  </a>
            <?php
              } else {
            ?>
                <a href="{{ 'http://'.$a->address }}" class="banner-l hidden-sm hidden-xs">
                  <img src = "{{ asset ('upload/'.$a->picture) }}" class="img-responsive" alt="Muvee Reviews Video Magazine HTML5 Bootstrap" title="{{ $a->title }}" style="height:150px;width:1010px;">
                  </a>
            <?php
              }
            ?>
            @endforeach
          </div>
            <!-- SIDEBAR ADVERTISE BOX -->
           
            
           
          </div>
        </div>
      </section>
   </div>
 </div>
</div>
<!-- TABS -->

<!-- MAIN -->
<div id="main" class="container-fluid">
 <div class="container-fluid">
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
   <!-- MAIN CONTENT -->
   <div class="col-lg-10 col-md-12">
      <!-- EDITORS CHOICE -->
      <section id="editor-choice">
       
        <h2 class="icon"><i class="fa fa-trophy" aria-hidden="true"></i>经典视频</h2>
        <div class="row auto-clear">
          <!-- MAIN POST -->
          <div class="col-lg-6 col-md-12 col-sm-12">
            <!-- POST L size -->
             <?php foreach( $twoMovies as $fmk => $fmy){ ?>
            <article class="post post-medium main-large-post">
               <div class="thumbr">
                 <div class="flag flag1"><i class="fa fa-star"></i></div>
                 <a class="post-thumb"  href="/home/comments?mid=<?php echo  $fmy->id; ?>"><!-- data-lity -->

                 <span class="play-btn-border" title="Play"  ><i class="fa fa-play-circle headline-round" aria-hidden="true"></i></span>
                 <img class="img-responsive" src = "/<?php echo $fmy->video_original ?>" alt="#">
                 </a>
                  <div class="infor" onclick="movieDetails(<?php echo $fmy->id; ?>)">
                   <h4>
                     <a class="title" href="/home/comments?mid=<?php echo  $fmy->id; ?>"><?php echo $fmy->video_info_name ?></a>
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
            <?php }?>
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
     @foreach($ab as $b)
         <?php 
                  if ($b->state != 1){
                ?>
                    <a href="#" class="banner-l hidden-sm hidden-xs">
                      <img src = "{{ asset ('homes/img/banners/banner-sm.jpg') }}" class="img-responsive" alt="Muvee Reviews Video Magazine HTML5 Bootstrap" title="可购买" style="height:150px;width:1060px;">
                      </a>
                <?php
                  } else {
                ?>
                    <a href="{{ 'http://'.$b->address }}" class="banner-l hidden-sm hidden-xs">
                      <img src = "{{ asset ('upload/'.$b->picture) }}" class="img-responsive" alt="Muvee Reviews Video Magazine HTML5 Bootstrap" title="{{ $b->title }}" style="height:150px;width:1060px;">
                      </a>
               <?php
                  }
                ?>
      @endforeach
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
    @endsection
                        
