<?php
/**
 * Created by PhpStorm.
 * User: sonata
 * Date: 2018/8/26
 * Time: 下午10:21
 */?>

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
    <link type="text/css" rel="stylesheet" href="../../public/bootstrap/css/bootstrap.min.css">

    <!-- IonIcons -->
    <link rel="stylesheet" href="../../public/js/ionicons/css/ionicons.min.css">
    <!-- Custom style -->
    <link rel="stylesheet" href="../../public/css/style.css">

    <!-- Custom css -->
    <link type="text/css" rel="stylesheet" href="../../public/css/layout1.css">
    <link type="text/css" id="colors" rel="stylesheet" href="../../public/css/orange1.css">
    <script type="text/javascript" src="../../public/bootstrap/js/bootstrap.js"></script>
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
                            <a class="navbar-brand" href="index.php" style="font-size: 30px;font-weight: bold;">TV EPISODE LABLE</a>
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
                                    <a href="/index.php/UserController/toSearch" class="firstLevel hasSubMenu">查找剧集</a>
                                </li>
                                <li class="sep"></li>

                                <!--本月观看-->
                                <li class="primary">
                                    <a href="/index.php/News/detail" class="firstLevel active hasSubMenu">本月观看</a>
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
    </div>
</div>
<section class="category">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="page-title">26th July</h1>
                        <p class="page-subtitle">Showing all posts with category <i>Computer</i></p>
                    </div>
                    <div class="col-md-5 text-center" style="line-height: 100px;">
                        <a href="#" class="btn btn-default btn-rounded">上&nbsp;&nbsp;月</a>
                        <a href="#" class="btn btn-default btn-rounded">上一天</a>
                        <a href="#" class="btn btn-default btn-rounded">下一天</a>
                        <a href="#" class="btn btn-default btn-rounded">下&nbsp;&nbsp;月</a>
                    </div>
                </div>
                <div class="line"></div>
                <div class="row">
                    <article class="col-md-12 article-list">
                        <div class="inner">
                            <figure>
                                <a href="single.html">
                                    <img src="../../public/images/news/img01.jpg">
                                </a>
                            </figure>
                            <div class="details">
                                <div class="detail">
                                    <div class="category">
                                        <a href="category.html">Film</a>
                                    </div>
                                    <div class="time">December 26, 2016</div>
                                </div>
                                <h1><a href="single.html">Lorem Ipsum Dolor Sit Consectetur Adipisicing Elit</a></h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitat...
                                </p>
                                <footer>
                                    <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>237</div></a>
                                    <a class="btn btn-primary more" href="single.html">
                                        <div>More</div>
                                        <div><i class="ion-ios-arrow-thin-right"></i></div>
                                    </a>
                                </footer>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-12 article-list">
                        <div class="inner">
                            <figure>
                                <a href="single.html">
                                    <img src="../../public/images/news/img11.jpg">
                                </a>
                            </figure>
                            <div class="details">
                                <div class="detail">
                                    <div class="category">
                                        <a href="category.html">Film</a>
                                    </div>
                                    <div class="time">December 26, 2016</div>
                                </div>
                                <h1><a href="single.html">Lorem Ipsum Dolor Sit Consectetur Adipisicing Elit</a></h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitat...
                                </p>
                                <footer>
                                    <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>78</div></a>
                                    <a class="btn btn-primary more" href="single.html">
                                        <div>More</div>
                                        <div><i class="ion-ios-arrow-thin-right"></i></div>
                                    </a>
                                </footer>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-12 article-list">
                        <div class="inner">
                            <figure>
                                <a href="single.html">
                                    <img src="../../public/images/news/img08.jpg">
                                </a>
                            </figure>
                            <div class="details">
                                <div class="detail">
                                    <div class="category">
                                        <a href="category.html">Film</a>
                                    </div>
                                    <div class="time">December 26, 2016</div>
                                </div>
                                <h1><a href="single.html">Lorem Ipsum Dolor Sit Consectetur Adipisicing Elit</a></h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitat...
                                </p>
                                <footer>
                                    <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>10</div></a>
                                    <a class="btn btn-primary more" href="single.html">
                                        <div>More</div>
                                        <div><i class="ion-ios-arrow-thin-right"></i></div>
                                    </a>
                                </footer>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-12 article-list">
                        <div class="inner">
                            <figure>
                                <a href="single.html">
                                    <img src="../../public/images/news/img13.jpg">
                                </a>
                            </figure>
                            <div class="details">
                                <div class="detail">
                                    <div class="category">
                                        <a href="category.html">Film</a>
                                    </div>
                                    <div class="time">December 26, 2016</div>
                                </div>
                                <h1><a href="single.html">Lorem Ipsum Dolor Sit Consectetur Adipisicing Elit</a></h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitat...
                                </p>
                                <footer>
                                    <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>1820</div></a>
                                    <a class="btn btn-primary more" href="single.html">
                                        <div>More</div>
                                        <div><i class="ion-ios-arrow-thin-right"></i></div>
                                    </a>
                                </footer>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-12 article-list">
                        <div class="inner">
                            <figure>
                                <a href="single.html">
                                    <img src="../../public/images/news/img15.jpg">
                                </a>
                            </figure>
                            <div class="details">
                                <div class="detail">
                                    <div class="category">
                                        <a href="category.html">Film</a>
                                    </div>
                                    <div class="time">December 26, 2016</div>
                                </div>
                                <h1><a href="single.html">Lorem Ipsum Dolor Sit Consectetur Adipisicing Elit</a></h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitat...
                                </p>
                                <footer>
                                    <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>739</div></a>
                                    <a class="btn btn-primary more" href="single.html">
                                        <div>More</div>
                                        <div><i class="ion-ios-arrow-thin-right"></i></div>
                                    </a>
                                </footer>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-12 article-list">
                        <div class="inner">
                            <figure>
                                <a href="single.html">
                                    <img src="../../public/images/news/img03.jpg">
                                </a>
                            </figure>
                            <div class="details">
                                <div class="detail">
                                    <div class="category">
                                        <a href="category.html">Film</a>
                                    </div>
                                    <div class="time">December 26, 2016</div>
                                </div>
                                <h1><a href="single.html">Lorem Ipsum Dolor Sit Consectetur Adipisicing Elit</a></h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitat...
                                </p>
                                <footer>
                                    <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>902</div></a>
                                    <a class="btn btn-primary more" href="single.html">
                                        <div>More</div>
                                        <div><i class="ion-ios-arrow-thin-right"></i></div>
                                    </a>
                                </footer>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-12 article-list">
                        <div class="inner">
                            <figure>
                                <a href="single.html">
                                    <img src="../../public/images/news/img15.jpg">
                                </a>
                            </figure>
                            <div class="details">
                                <div class="detail">
                                    <div class="category">
                                        <a href="category.html">Film</a>
                                    </div>
                                    <div class="time">December 26, 2016</div>
                                </div>
                                <h1><a href="single.html">Lorem Ipsum Dolor Sit Consectetur Adipisicing Elit</a></h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitat...
                                </p>
                                <footer>
                                    <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>78</div></a>
                                    <a class="btn btn-primary more" href="single.html">
                                        <div>More</div>
                                        <div><i class="ion-ios-arrow-thin-right"></i></div>
                                    </a>
                                </footer>
                            </div>
                        </div>
                    </article>
                    <article class="col-md-12 article-list">
                        <div class="inner">
                            <figure>
                                <a href="single.html">
                                    <img src="../../public/images/news/img16.jpg">
                                </a>
                            </figure>
                            <div class="details">
                                <div class="detail">
                                    <div class="category">
                                        <a href="category.html">Film</a>
                                    </div>
                                    <div class="time">December 26, 2016</div>
                                </div>
                                <h1><a href="single.html">Lorem Ipsum Dolor Sit Consectetur Adipisicing Elit</a></h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitat...
                                </p>
                                <footer>
                                    <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>198</div></a>
                                    <a class="btn btn-primary more" href="single.html">
                                        <div>More</div>
                                        <div><i class="ion-ios-arrow-thin-right"></i></div>
                                    </a>
                                </footer>
                            </div>
                        </div>
                    </article>
                    <div class="col-md-12 text-center">
                        <ul class="pagination">
                            <li class="prev"><a href="#"><i class="ion-ios-arrow-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">97</a></li>
                            <li class="next"><a href="#"><i class="ion-ios-arrow-right"></i></a></li>
                        </ul>
                        <div class="pagination-help-text">
                            Showing 8 results of 776 &mdash; Page 1
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JS -->
<script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
<!-- <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script> -->
<script src="../../public/js/jquery.migrate.js"></script>
<script src="../../public/js/bootstrap/bootstrap.min.js"></script>
<script>var $target_end=$(".best-of-the-week");</script>
<script src="../../public/js/jquery-number/jquery.number.min.js"></script>
<script src="../../public/js/owlcarousel/dist/owl.carousel.min.js"></script>
<script src="../../public/js/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script src="../../public/js/easescroll/jquery.easeScroll.js"></script>
<script src="../../public/js/sweetalert/dist/sweetalert.min.js"></script>
<script src="../../public/js/toast/jquery.toast.min.js"></script>
<!-- <script src="js/demo.js"></script> -->
<script src="../../public/js/e-magz.js"></script>
</body>
</html>
