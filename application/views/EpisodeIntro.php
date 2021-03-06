<?php
/**
 * Created by PhpStorm.
 * User: sonata
 * Date: 2018/8/26
 * Time: 下午10:16
 */?>

<!DOCTYPE html>
<html>
<head>
    <title>剧简介</title>
    <meta charset="utf-8">

    <meta name="description" content="SEATTLE is a One Page Bootstrap 3 Premium website Template, using nice Paralax effect, HTML5, CSS3 and Twitter Bootstrap 3">
    <meta name="author" content="Little NEKO">
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Bootstrap  -->
    <link type="text/css" rel="stylesheet" href="../../public/bootstrap/css/bootstrap.min.css">
    <!-- Custom css -->
    <link type="text/css" rel="stylesheet" href="../../public/css/layout.css">
    <link type="text/css" id="colors" rel="stylesheet" href="../../public/css/orange.css">
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
    <!-- icon fonts -->
    <link type="text/css" rel="stylesheet" href="../../public/css/custom-icons.css">

</head>
<body class="activateAppearAnimation">
<div id="globalWrapper" >
    <header class="navbar-fixed-top">
        <!-- header -->
        <div id="mainHeader" role="banner">
            <div class="container">
                <nav class="navbar navbar-default scrollMenu" role="navigation">
                    <div class="navbar-header">
                        <!-- responsive navigation -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Logo -->
                        <a class="navbar-brand" href="index.php" style="font-size: 30px;font-weight: bolder;">TV EPISODE LABLE</a>
                    </div>
                    <div class="collapse navbar-collapse" id="mainMenu">
                        <!-- Main navigation -->

                        <ul class="nav navbar-nav pull-right">
                            <!--当前热播-->
                            <li class="primary">
                                <a href="/index.php/UserController/toCurrentHot" class="firstLevel active hasSubMenu">当前热播</a>
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
                                    <li><a href="/index.php/UserController/tologin">登出<span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
                                </ul>
                            </li>

                        </ul>
                        <!-- End main navigation -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ======================================= content ======================================= -->
    <section id="page">
        <header class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>当前热播</h1>
                        <p>最新热播剧的详细信息</p>

                        <ul class="breadcrumb visible-md visible-lg">
                            <li><a href="">主页</a></li>
                            <li><a href="">当前热播</a></li>
                            <li class="active">西部世界第二季</li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <section id="content" class="mt30 mb30">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <section class="widget">
                            <div class="row">
                                <div class="col-md-12 col-sm-4">
                                    <h4 style="font-weight: bold;">剧集总数</h4>
                                    <p>10</p>
                                </div>
                                <div class="col-md-12 col-sm-4">
                                    <h4 style="font-weight: bold;">播出时间</h4>
                                    <p>TIME</p>
                                </div>
                                <div class="col-md-12 col-sm-4">
                                    <h4 style="font-weight: bold;">收藏人数</h4>
                                    <p>31</p>
                                </div>
                            </div>
                        </section>

                        <section class="widget">
                            <div class="row">
                                <aside id="sidebar">
                                    <nav id="subnav">
                                        <ul>
                                            <li><a href="#">第一季<i class=" icon-right-open-mini"></i></a></li>
                                            <li><a class="active" href="#">第二季<i class=" icon-right-open-mini"></i></a></li>

                                        </ul>
                                    </nav>
                                </aside>
                            </div>
                        </section>
                    </div>

                    <div class="col-md-8" style="">
                        <article class="post clearfix">
                            <div class="row">
                                <div class="postMeta col-sm-3 col-xs-3" style="height: 200px;overflow: hidden;">
                                    <img src="/public/images/drama5.jpg" style="height: 220px;overflow: hidden">
                                </div>
                                <section class="col-sm-9 col-xs-9" style="height: 220px">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" style="font-size: 22px;margin-bottom: 20px"><a href="#">西部世界第二季</a>&nbsp;（<a href="">2017</a>)</div>
                                        <ul class="col-lg-4 col-md-4 col-sm-4 col-sm-4 entry-meta">
                                            <li class="entry-date"><a href="#"><i class="icon-heart-empty iconSmall"></i>&nbsp;加入收藏</a></li>
                                        </ul>

                                    </div>

                                    <div class="row" style="margin-bottom: 10px;">

                                        <div class="col-sm-3 col-xs-3">
                                            地区：<a href="">美国</a>
                                        </div>
                                        <div class="col-sm-3 col-xs-3">
                                            类型：<a href="">剧情片</a>
                                        </div>
                                        <div class="col-sm-6 col-xs-6">
                                            单片时长： <a href="">52</a>分
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-sm-12 col-xs-12">
                                            主演： 麦茜·威廉姆斯/艾米莉亚·克拉克/彼特·丁拉基/基特·哈
                                        </div>
                                    </div>

                                    <p class="list-limit" style="height: 45px;text-overflow: -o-ellipsis-lastline; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2;-webkit-box-orient: vertical;">该剧讲述的是四个宅男科学家和一个美女邻居发生的搞笑生活故事。2014年4月下旬《生活大爆炸》政策原因搜狐视频无法播放下架。2015年7月22日，《生活大爆炸》第八季拿到许可证上线搜狐视频。2009年8月，该剧赢得了电视评论协会（TCA）最佳喜剧系列奖。2017年9月18日，获得第69届艾美奖最佳喜剧多镜头剪辑奖。
                                    </p>
                                    <a href="#" class="readMore">查看详情</a>

                                </section>
                            </div>
                        </article>
                        <hr>

                        <section id="team2" class="mt15">
                            <div class="row mb30" style="height: 110px">
                                <div class="col-xs-3" style="height:110px;overflow: hidden;">
                                    <img src="/public/images/e1.jpg" class="img-responsive imgBorder" alt="SEATTLE website template" style="width: 100%">
                                </div>
                                <div class="col-xs-7" style="height: 110px;">
                                    <div class="row" style="height: 80px">
                                        <h4 style="font-weight: bold;margin-left: ">第一集</h4>
                                        <p>This did not seem to encourage the witness at all: he kept shifting from one foot to the other. It's my pleasure to meet you here.
                                        </p>
                                    </div>
                                    <div class="row" style="height: 30px;margin-top: 9px">
                                        <ul class="entry-meta" style="">
                                            <li class="entry-date"><a href="#"><i class="icon-upload"></i>&nbsp;更新时间: 2017年8月1日</a></li>
                                            <li class="entry-haveseen"><a href="#"><i class="icon-eye iconSmall"></i>我看过</a> </li>
                                        </ul>
                                    </div>
                                </div>
<!--                                <div class="col-xs-2" style="padding-top: 35px;height: 110px;padding-left: 25px;opacity: 0.4">-->
<!--                                    <button style=""><i class="icon-eye iconMedium"></i></button>-->
<!--                                </div>-->
                            </div>
                            <div class="row mb30" style="height: 110px">
                                <div class="col-xs-3" style="height:110px;overflow: hidden;">
                                    <img src="/public/images/e2.jpg" class="img-responsive imgBorder" alt="SEATTLE website template" style="width: 100%">
                                </div>
                                <div class="col-xs-7" style="height: 110px;">
                                    <div class="row" style="height: 80px">
                                        <h4 style="font-weight: bold;margin-left: ">第二集</h4>
                                        <p>This did not seem to encourage the witness at all: he kept shifting from one foot to the other. It's my pleasure to meet you here.
                                        </p>
                                    </div>
                                    <div class="row" style="height: 30px;margin-top: 9px">
                                        <ul class="entry-meta" style="">
                                            <li class="entry-date"><a href="#"><i class="icon-upload"></i>&nbsp;更新时间: 2017年8月8日</a></li>
<!--                                            <li class="entry-category"><a href="#"><i class="icon-youtube-play iconSmall "></i>&nbsp;已看人数：524</a></li>-->
                                            <li class="entry-haveseen"><a href="#"><i class="icon-eye iconSmall"></i>我看过</a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--                                <div class="col-xs-2" style="padding-top: 35px;height: 110px;padding-left: 25px;opacity: 0.4">-->
                                <!--                                    <button style=""><i class="icon-eye iconMedium"></i></button>-->
                                <!--                                </div>-->
                            </div>
                            <div class="row mb30" style="height: 110px">
                                <div class="col-xs-3" style="height:110px;overflow: hidden;">
                                    <img src="/public/images/e3.jpg" class="img-responsive imgBorder" alt="SEATTLE website template" style="width: 100%">
                                </div>
                                <div class="col-xs-7" style="height: 110px;">
                                    <div class="row" style="height: 80px">
                                        <h4 style="font-weight: bold;margin-left: ">第三集</h4>
                                        <p>This did not seem to encourage the witness at all: he kept shifting from one foot to the other. It's my pleasure to meet you here.
                                        </p>
                                    </div>
                                    <div class="row" style="height: 30px;margin-top: 9px">
                                        <ul class="entry-meta" style="">
                                            <li class="entry-date"><a href="#"><i class="icon-upload"></i>&nbsp;更新时间: 2017年8月15日</a></li>
                                            <li class="entry-haveseen"><a href="#"><i class="icon-eye iconSmall"></i>我看过</a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--                                <div class="col-xs-2" style="padding-top: 35px;height: 110px;padding-left: 25px;opacity: 0.4">-->
                                <!--                                    <button style=""><i class="icon-eye iconMedium"></i></button>-->
                                <!--                                </div>-->
                            </div>
                            <div class="row mb30" style="height: 110px">
                                <div class="col-xs-3" style="height:110px;overflow: hidden;">
                                    <img src="/public/images/e4.jpg" class="img-responsive imgBorder" alt="SEATTLE website template" style="width: 100%">
                                </div>
                                <div class="col-xs-7" style="height: 110px;">
                                    <div class="row" style="height: 80px">
                                        <h4 style="font-weight: bold;margin-left: ">第四集</h4>
                                        <p>This did not seem to encourage the witness at all: he kept shifting from one foot to the other. It's my pleasure to meet you here.
                                        </p>
                                    </div>
                                    <div class="row" style="height: 30px;margin-top: 9px">
                                        <ul class="entry-meta" style="">
                                            <li class="entry-date"><a href="#"><i class="icon-upload"></i>&nbsp;更新时间: 2017年8月22日</a></li>
                                            <li class="entry-haveseen"><a href="#"><i class="icon-eye iconSmall"></i>我看过</a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--                                <div class="col-xs-2" style="padding-top: 35px;height: 110px;padding-left: 25px;opacity: 0.4">-->
                                <!--                                    <button style=""><i class="icon-eye iconMedium"></i></button>-->
                                <!--                                </div>-->
                            </div>

                        </section>
                    </div>

                    <div class="col-md-2">
                        <div class="row">
                            <div class="" style="width: 70%;overflow: hidden;margin-left: 30px">
                                <div class="" style="height: 180px;overflow: hidden;">
                                    <a href=""><img src="../../public/images/drama3.jpg" style="width: 100%"></a>
                                </div>
                                <div class="" style="height: 30px;font-size: 13px;font-weight: bold;padding-top: 2px;text-align: center">
                                    <p><a href="">纸牌屋</a></p>
                                </div>
                            </div>

                            <div class="" style="width: 70%;overflow: hidden;margin-left: 30px">
                                <div class="" style="height: 180px;overflow: hidden;">
                                    <a href=""><img src="../../public/images/drama4.jpg" style="width: 100%"></a>
                                </div>
                                <div class="" style="height: 30px;font-size: 13px;font-weight: bold;padding-top: 2px;text-align: center">
                                    <p><a href="">吸血鬼日记 第一季</a></p>
                                </div>
                            </div>

                            <div class="" style="width: 70%;overflow: hidden;margin-left: 30px">
                                <div class="" style="height: 180px;overflow: hidden;">
                                    <a href=""><img src="../../public/images/drama5.jpg" style="width: 100%"></a>
                                </div>
                                <div class="" style="height: 30px;font-size: 13px;font-weight: bold;padding-top: 2px;text-align: center">
                                    <p><a href="">西部世界 第二季</a></p>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </section>
    </section>

    </section>

</div>

<script type="text/javascript" src="../../public/js/jquery/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="../../public/bootstrap/js/bootstrap.js"></script>
</body>
</html>