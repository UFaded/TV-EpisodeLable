<?php
/**
 * Created by PhpStorm.
 * User: sonata
 * Date: 2018/8/26
 * Time: 下午10:10
 */?>

<!DOCTYPE html>
<html>
<head>
    <title>剧简介</title>
    <meta charset="utf-8">

    <meta name="description" content="SEATTLE is a One Page Bootstrap 3 Premium website Template, using nice Paralax effect, HTML5, CSS3 and Twitter Bootstrap 3">
    <meta name="author" content="Little NEKO">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link type="text/css" rel="stylesheet" href="../../public/bootstrap/css/bootstrap.min.css">
    <script src="/public/js/jquery.min.js"></script>
    <link type="text/css" rel="stylesheet" href="../../public/css/layout.css">
    <link type="text/css" id="colors" rel="stylesheet" href="../../public/css/orange.css">
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link type="text/css" rel="stylesheet" href="../../public/css/custom-icons.css">
    <?php
    echo "<script type='text/javascript' src='../../public/js/function.js'></script>";
    ?>
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
                                <a href="/index.php/UserController/toCurrentHot" class="firstLevel hasSubMenu">当前热播</a>
                            </li>
                            <li class="sep"></li>

                            <!--查找剧集-->
                            <li class="primary">
                                <a href="/index.php/UserController/toSearch" class="firstLevel hasSubMenu active">查找剧集</a>
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
                        <h1>查找剧集</h1>
                        <p>根据剧集信息查找剧集</p>

                        <ul class="breadcrumb visible-md visible-lg">
                            <li><a href="">主页</a></li>
                            <li class="active">查找剧集</li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <section id="content" class="mt30 mb30">
            <div class="container">
                <form class="form-inline" role="form" action="/index.php/UserController/toEpisodeIntro" method="GET" onsubmit="return search()">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control lg" placeholder="Search…">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-sm">搜索</button>
						</span>
                    </div>
                </form>
            </div>
        </section>

    </section>

</div>

<script type="text/javascript" src="../../public/js/jquery/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="../../public/bootstrap/js/bootstrap.js"></script>
</body>
</html>