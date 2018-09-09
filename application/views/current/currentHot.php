<?php
/**
 * Created by PhpStorm.
 * User: sonata
 * Date: 2018/8/26
 * Time: 下午10:14
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
    <link type="text/css" rel="stylesheet" href="../../../public/bootstrap/css/bootstrap.min.css">
    <!-- Custom css -->
    <link type="text/css" rel="stylesheet" href="../../../public/css/layout.css">
    <link type="text/css" id="colors" rel="stylesheet" href="../../../public/css/orange.css">
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
    <!-- icon fonts -->
    <link type="text/css" rel="stylesheet" href="../../../public/css/custom-icons.css">

    <link rel="apple-touch-icon" sizes="114x114" href="../../../public/images/apple-touch-icon-114x114.png">



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
                        <a class="navbar-brand" href="../index.php" style="font-size: 30px;font-weight: bolder;">TV EPISODE LABLE</a>
                    </div>
                    <div class="collapse navbar-collapse" id="mainMenu">
                        <!-- Main navigation -->
                        <ul class="nav navbar-nav pull-right">
                            <!--当前热播-->
                            <li class="primary">
                                <a href="currentHot.php" class="firstLevel active hasSubMenu">当前热播</a>
                            </li>
                            <li class="sep"></li>

                            <!--查找剧集-->
                            <li class="primary">
                                <a href="../search/search.php" class="firstLevel hasSubMenu">查找剧集</a>
                            </li>
                            <li class="sep"></li>

                            <!--本月观看-->
                            <li class="primary">
                                <a href="../months/monthWatched.php" class="firstLevel hasSubMenu">本月观看</a>
                            </li>
                            <li class="sep"></li>

                            <!--个人收藏-->
                            <li class="primary">
                                <a href="../userCenter/index.php" class="firstLevel hasSubMenu">个人收藏</a>
                            </li>
                            <li class="sep"></li>


                            <li class="primary dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $username?><span class="caret"></span></a>
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
                            <li class="active">当前热播</li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <section id="content" class="mt30 mb30">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <section class="widget">
                            <h3>猜你喜欢</h3>
                            <ul class="list-unstyled iconList">
                                <li><a href="#">初代吸血鬼5</a></li>
                                <li><a href="#">教父</a></li>
                                <li><a href="#">纸牌屋</a></li>
                                <li><a href="#">权利的游戏3</a></li>
                                <li><a href="#">生活大爆炸8</a></li>

                                <div class="more" style="margin-top: 30px;text-align: center">
                                    <a href=""><span class="">查看更多</span></a>
                                </div>
                            </ul>
                        </section>

                        <section class="widget">
                            <h3>更新时间</h3>
                            <ul class="list-unstyled iconList">
                                <li><a href="#">2018年4月</a></li>
                                <li><a href="#">2018年5月</a></li>
                                <li><a href="#">2018年6月</a></li>
                                <li><a href="#">2018年7月</a></li>

                                <div class="more" style="margin-top: 30px;text-align: center">
                                    <a href=""><span class="">查看更多</span></a>
                                </div>
                            </ul>
                        </section>

                    </div>

                    <div class="col-md-9">
                        <div class="row" style="margin-bottom: 20px">
                            <div class="col-md-3" style="height: 280px;overflow: hidden;width: 25%;float: left">
                                <div class="" style="height: 250px;overflow: hidden;">
                                    <a href="EpisodeIntro.php"><img src="../../../public/images/drama1.jpg" style="width: 100%"></a>
                                </div>
                                <div class="" style="height: 30px;font-size: 15px;font-weight: bold;padding-top: 8px;text-align: center">
                                    <p><a href="EpisodeIntro.php">生活大爆炸 第三季</a></p>
                                </div>
                            </div>

                            <div class="col-md-3" style="height: 280px;overflow: hidden;width: 25%;float: left">
                                <div class="" style="height: 250px;overflow: hidden;">
                                    <a href=""><img src="../../../public/images/drama2.jpg" style="width: 100%"></a>
                                </div>
                                <div class="" style="height: 30px;font-size: 15px;font-weight: bold;padding-top: 8px;text-align: center">
                                    <p><a href="">权利的游戏 第一季</a></p>
                                </div>
                            </div>

                            <div class="col-md-3" style="height: 280px;overflow: hidden;width: 25%;float: left">
                                <div class="" style="height: 250px;overflow: hidden;">
                                    <a href=""><img src="../../../public/images/drama3.jpg" style="width: 100%"></a>
                                </div>
                                <div class="" style="height: 30px;font-size: 15px;font-weight: bold;padding-top: 8px;text-align: center">
                                    <p><a href="">纸牌屋</a></p>
                                </div>
                            </div>


                            <div class="col-md-3" style="height: 280px;overflow: hidden;width: 25%;float: left">
                                <div class="" style="height: 250px;overflow: hidden;">
                                    <a href=""><img src="../../../public/images/drama4.jpg" style="width: 100%"></a>
                                </div>
                                <div class="" style="height: 30px;font-size: 15px;font-weight: bold;padding-top: 8px;text-align: center">
                                    <p><a href="">吸血鬼日记 第二季</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 20px">
                            <div class="col-md-3" style="height: 280px;overflow: hidden;width: 25%;float: left">
                                <div class="" style="height: 250px;overflow: hidden;">
                                    <a href=""><img src="../../../public/images/drama1.jpg" style="width: 100%"></a>
                                </div>
                                <div class="" style="height: 30px;font-size: 15px;font-weight: bold;padding-top: 8px;text-align: center">
                                    <p><a href="">生活大爆炸 第三季</a></p>
                                </div>
                            </div>

                            <div class="col-md-3" style="height: 280px;overflow: hidden;width: 25%;float: left">
                                <div class="" style="height: 250px;overflow: hidden;">
                                    <a href=""><img src="../../../public/images/drama2.jpg" style="width: 100%"></a>
                                </div>
                                <div class="" style="height: 30px;font-size: 15px;font-weight: bold;padding-top: 8px;text-align: center">
                                    <p><a href="">权利的游戏 第一季</a></p>
                                </div>
                            </div>

                            <div class="col-md-3" style="height: 280px;overflow: hidden;width: 25%;float: left">
                                <div class="" style="height: 250px;overflow: hidden;">
                                    <a href=""><img src="../../../public/images/drama3.jpg" style="width: 100%"></a>
                                </div>
                                <div class="" style="height: 30px;font-size: 15px;font-weight: bold;padding-top: 8px;text-align: center">
                                    <p><a href="">纸牌屋</a></p>
                                </div>
                            </div>


                            <div class="col-md-3" style="height: 280px;overflow: hidden;width: 25%;float: left">
                                <div class="" style="height: 250px;overflow: hidden;">
                                    <a href=""><img src="../../../public/images/drama4.jpg" style="width: 100%"></a>
                                </div>
                                <div class="" style="height: 30px;font-size: 15px;font-weight: bold;padding-top: 8px;text-align: center">
                                    <p><a href="">吸血鬼日记 第二季</a></p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>

    </section>

</div>

<script type="text/javascript" src="../../../public/js/jquery/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="../../../public/bootstrap/js/bootstrap.js"></script>
</body>
</html>
