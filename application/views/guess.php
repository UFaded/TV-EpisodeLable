<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Magz is a HTML5 & CSS3 magazine template is based on Bootstrap 3.">
		
		<meta name="keyword" content="magz, html5, css3, template, magazine template">
		
		<title>Magz &mdash; Responsive HTML5 &amp; CSS3 Magazine Template</title>
		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css">

		<!-- IonIcons -->
		<link rel="stylesheet" href="/Public/js/ionicons/css/ionicons.min.css">
		<!-- Custom style -->
		<link rel="stylesheet" href="/Public/css/style.css">

  		<!-- Custom css -->
  		<link type="text/css" rel="stylesheet" href="/Public/css/layout1.css">
  		<link type="text/css" id="colors" rel="stylesheet" href="/Public/css/orange1.css">
  		<style>
  			a:link{text-decoration:none; }  /* 指正常的未被访问过的链接*/
			a:visited{text-decoration:none; }/*指已经访问过的链接*/
			a:hover{text-decoration:none;}/*指鼠标在链接*/}
			a:active{text-decoration:none;}/* 指正在点的链接*/ 
  		</style>
  		<script>
  			function show(x){
  				data = {
					'page':x
				};
  				$.ajax({
        			type: 'POST',
        			url: 'http://localhost:8888/index.php/News/collect',
        			data: data,
        			async:false,
        			contentType:'application/json;charset=utf-8',
					dataType:'json',
        			error: function(XMLHttpRequest, textStatus, errorThrown)
        			{
        				alert('Error loading XML document');
        			},
        			success: function(result)
        			{
        				alert(x);
        			},
      			});	
  			}
			function collect(a){
				data = {
					'a':a
				};
  				$.ajax({
        			type: 'POST',
        			url: '/index.php/News/setCollect',
        			data: data,
        			async:false,
        			error: function(XMLHttpRequest, textStatus, errorThrown)
        			{
        			},
        			success: function(result)
        			{
        			},
      			});
			}
			function cancelCollect(a){
				data = {
					'a':a
				};
  				$.ajax({
        			type: 'POST',
        			url: '/index.php/News/cancelCollect',
        			data: data,
        			async:false,
        			error: function(XMLHttpRequest, textStatus, errorThrown)
        			{
        			},
        			success: function(result)
        			{
        			},
      			});
			}
		</script>
	</head>

<body>
<div class="activateAppearAnimation" style="margin-bottom:100px;">
 	<div id="globalWrapper" >
    <header class="navbar-fixed-top">     
      <!-- header -->
      <div id="mainHeader" role="banner">
        <div class="container">
          <nav class="navbar navbar-default scrollMenu" role="navigation" style="margin-bottom: 0px; ">
            <div class="navbar-header">
              <!-- responsive navigation -->
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- Logo -->
              <a class="navbar-brand" href="index" style="font-size: 30px;font-weight: bold;">TV EPISODE LABLE</a>
            </div>
            <div class="collapse navbar-collapse" id="mainMenu">
              <!-- Main navigation -->
              <ul class="nav navbar-nav pull-right">
                <!--当前热播-->
                <li class="primary">
                  <a href="/index.php/UserController/toCurrentHot" class="firstLevel hasSubMenu active">当前热播</a>
                </li>
                <li class="sep"></li>

                <!--查找剧集-->
                <li class="primary"> 
                  <a href="/index.php/UserController/toSearch" class="firstLevel hasSubMenu">查找剧集</a>
                </li>
                <li class="sep"></li>

                <!--本月观看-->
                <li class="primary">
                  <a href="/index.php/News/detail" class="firstLevel hasSubMenu">本月观看</a>
                </li>
                <li class="sep"></li>

                <!--个人收藏-->
                <li class="primary">
                  <a href="/index.php/News/collect" class="firstLevel hasSubMenu">个人收藏</a>
                </li>
                <li class="sep"></li>


                <li class="primary dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">用户名&nbsp;<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">登出<span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
                      </ul>
                    </li>
                
              </ul>
              <!-- End main navigation -->
            </div>
          </nav>
        </div>
      </div>
    </header>
  </div>
</div>
		<section class="category">
		  <div class="container">
		    <div class="row">
		      <div class="col-md-12 text-left">
		        <div class="row">
		          <div class="col-md-7" id="day">        
		            <h1 id="da" value="26">猜我喜欢</h1>
		            <p class="page-subtitle">Showing all posts with category <i>Computer</i></p>
		          </div>
		        </div>
		        <div class="line"></div>
		        <div class="row">
		          <?php
		          foreach ($guessEpisodes as $item):?>
		          <article class="col-md-12 article-list">
		            <div class="inner">
		              <figure style="height:165px;">
			              <a href="single.html">
			                <img src="<?php echo $item['s_sibox_image'];?>">
		                </a>
		              </figure>
		              <div class="details">
		                <div class="detail">
		                  <div class="category">
		                   <a href="category.html">Film</a>
		                  </div>
		                  <!-- 日期需设定全局变量后显示 -->
		                  <div class="time">电视台：<?php echo $item['channel'];?></div>
		                  <div class="time">每<?php 
  							$trans_week = array('Monday' => '周一','Tuesday' => '周二','Wednesday' => '周三','Thursday' => '周四','Friday' => '周五','Saturday' => '周六','Sunday' => '周日' );
  							echo $trans_week[$item['update_time']];?></div>
		                </div>
		                <h1><a href="single.html"><?php echo $item['s_name'];?></a></h1>
		                <p style="height:30px;overflow:hidden; text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;">
		                	<?php echo $item['s_description'];?>
		                </p>
					
		                <footer>
		                	<?php if ($item['collect']==false){ ?>
		                		<a href="" class="love" onclick="collect(<?php echo $item['s_id']; ?>)"><i class="ion-android-favorite-outline"></i><text style="margin-left: 5px;line-height: 30px;text-align: center;">收藏</text></a>
		                	<?php 
		                		}else{ ?>
		                			<a href="" class="love active" onclick="cancelCollect(<?php echo $item['s_id']; ?>)"><i class="ion-android-favorite"></i><text style="margin-left:5px;line-height: 30px;text-align: center;">取消收藏</text></a>
		                	<?php } ?>
		                	<!-- more点击事件后跳转页面问题 -->
		                  <a class="btn btn-primary more" href="/index.php/UserController/toEpisodeIntro">
		                    <div>More</div>
		                    <div><i class="ion-ios-arrow-thin-right"></i></div>
		                  </a>
		                </footer>
		              </div>
		            </div>
		          </article>
		          <?php endforeach;?>
		          </div>
		        </div>
		      </div>
		    </div>
		  </div>
		</section>

		<!-- JS -->
		<!-- <script type="text/javascript" src="/Public/js/jquery-1.10.2.min.js"></script> -->
		<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
		<script src="/Public/js/jquery.migrate.js"></script>
		<script src="/Public/js/bootstrap/bootstrap.min.js"></script>
		<script>var $target_end=$(".best-of-the-week");</script>
		<script src="/Public/js/jquery-number/jquery.number.min.js"></script>
		<script src="/Public/js/owlcarousel/dist/owl.carousel.min.js"></script>
		<script src="/Public/js/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
		<script src="/Public/js/easescroll/jquery.easeScroll.js"></script>
		<script src="/Public/js/sweetalert/dist/sweetalert.min.js"></script>
		<script src="/Public/js/toast/jquery.toast.min.js"></script>
		<script src="/Public/js/e-magz.js"></script>
		<script type="text/javascript" src="/Public/bootstrap/js/bootstrap.js"></script>
	</body>
</html>