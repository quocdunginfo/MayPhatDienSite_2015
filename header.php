<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
$temp_p = get_template_directory_uri().'/';
$slider = Qdmvc_Helper::getSlider(71);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?=$temp_p?>">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="viewport" content="width=960px, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php wp_head(); ?>

    <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
    <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
    <!--script src="js/less-1.3.3.min.js"></script-->
    <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- USE WP instead -->
    <!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>

    <!-- CSS memu -->
    <link rel="stylesheet" href="plugin/cssmenu/styles.css">
    <script src="plugin/cssmenu/script.js"></script>
    <!-- end CSS memu -->

    <!-- hr tag -->
    <style>
        hr {
            height: 0;
            margin: 0 auto;
            width: 100%;
        }

        hr.long-grey-thin-line {
            border-top: 1px solid #dbdbdb;
        }

        hr.long-red-line {
            border-top: 5px solid #db243c;
        }
    </style>
    <!-- end hr tag -->

</head>

<body <?php body_class(); ?>>
<style>
    .container {
        width: 100%;
        padding: 0;
        margin: 0 auto;
    }

    #qd_container_content {
        width: 960px !important;
    }
</style>
<div class="container" id="qd_container_header">
    <style>
        #qd_container_header .row {
            margin: 0 auto;
        }
    </style>
    <!-- LINE RED -->
    <hr class="long-red-line">
    <!-- HEADER -->
    <div class="row clearfix" style="width: 960px;">
        <!-- LOGO -->
        <div class="col-xs-3 column" style="padding-top: 5px;">
            <img src="img/logo.jpg" style="max-width: 100%; height:70px">
        </div>
        <!-- END LOGO -->
        <div class="col-xs-9 column">
            <!-- Search -->
            <div id="qd_search" class="pull-right">
                <style>
                    #qd_search {
                        margin-top: 10px;
                    }

                    .qd-result-item {
                        padding: 15px;
                    }

                    .qd-result-item a {
                        text-decoration: none !important;
                        color: white;
                    }
                </style>
                <form action="#" method="get" style="position: relative">
                    <img src="img/search-icon-hi.png"
                         style="height: 20px; width: 20px; position: absolute; top: 7px; right: 10px; opacity: 0.6">
                    <input id="qd-search-box" class="form-control" type="text" style="width: 200px; padding-right: 40px"
                           placeholder="search...">

                    <div id="qd-result-wrapper">
                        <style>
                            #qd-result-wrapper {
                                z-index: 1000;
                                right: 0px;
                                position: absolute;
                                width: 300px;
                                height: auto;
                                background-color: #000000;
                                opacity: 0.8;
                                color: white;
                                border-radius: 20px;
                            }

                            #qd_search > form > #qd-result-wrapper {
                                display: none;
                            }

                            #qd_search > form:hover > #qd-result-wrapper {
                                display: block;
                            }
                        </style>
                        <div class="qd-result-item">
                            <a href="">Match 1 không</a>
                        </div>
                        <div class="qd-result-item">Result 1</div>
                        <div class="qd-result-item">Result 1</div>
                        <div class="qd-result-item">Result 1</div>
                    </div>
                    <input type="submit" value="submit" style="display: none">
                </form>
            </div>
            <div style="clear: both"></div>
            <!-- End search -->
            <!-- MENU -->
            <div class="row clearfix">
                <div class="col-xs-12 column">
                    <div id='cssmenu222'>
                        <!-- CSS memu : FIX layout padding conflict with bootstrap -->
                        <style>
                            #cssmenu *,
                            #cssmenu *:before,
                            #cssmenu *:after {
                                -webkit-box-sizing: content-box;
                                -moz-box-sizing: content-box;
                                box-sizing: content-box;
                            }
                        </style>
                        <!-- end CSS memu : FIX layout conflict with bootstrap -->
                        <style>
                            #cssmenu {
                                height: 30px;
                                right: -35px;
                            }

                            #cssmenu ul li span {
                                font-weight: bold;
                            }
                            #cssmenu .current-menu-item a {
                                font-weight: bold;
                            }
                        </style>
                        <?php get_sidebar('main-menu'); ?>
                        <!--
                        <ul>
                            <li><a href='index.html'><span>TRANG CHỦ</span></a></li>
                            <li class='active'><a href='products2.html'><span>DANH MỤC SẢN PHẨM</span></a>
                                <ul>
                                    <li><a href='#'><span>Sản phẩm số 1 - độ dài quá chừng</span></a></li>
                                    <li><a href='#'><span>SP2</span></a></li>
                                </ul>
                            </li>
                            <li><a href='introduction_layout.html'><span>DỊCH VỤ</span></a></li>
                            <li><a href='introduction_layout.html'><span>TUYỂN DỤNG</span></a></li>
                            <li><a href='introduction_layout.html'><span>GIỚI THIỆu</span></a></li>
                            <li><a href='contact.html'><span>LIÊN HỆ</span></a></li>
                        </ul>
                        -->
                    </div>

                    <div style="clear: both;"></div>
                </div>
            </div>
            <!-- END MENU -->

        </div>
    </div>
    <!-- end header -->
    <!-- BANNER -->
    <div class="row clearfix">
        <div class="col-xs-12 column" style="padding: 0">
            <style>
                .carousel-indicators li {
                    border-radius: 50%;
                    margin-right: 20px;
                    height: 17px;
                    width: 17px;
                    border-color: slategray;
                }

                .carousel-indicators li.active {
                    border-radius: 50%;
                    margin-right: 20px;
                    height: 17px;
                    width: 17px;
                    background-color: slategray;
                }
            </style>
            <hr class="long-grey-thin-line" style="margin-top: 4px; margin-bottom: 12px;"/>
            <!-- BANNER -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="min-width: 960px; <?=count($slider)==0?'display: none;':''?>">
                <!-- Indicators -->

                <ol class="carousel-indicators">
                    <?php
                    for($i=0;$i<count($slider);$i++):
                    ?>
                    <li data-target="#myCarousel" data-slide-to="<?=$i?>" class="<?=$i==0?'active':''?>"></li>
                    <?php
                    endfor;
                    ?>
                    <!--
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li> -->
                </ol>
                <style>
                    .carousel-inner > .item > img {
                        width: 100%;
                    }
                </style>
                <div class="carousel-inner">
                    <!--have 1 item has active class when begin or slider will cause error -->
                    <?php
                    $count =0;
                    foreach($slider as $item):
                    ?>
                    <div class="item <?=$count==0?'active':''?>"><img src="<?=$item->attr['src']?>" alt="First slide"></div>
                    <?php
                    $count++;
                    endforeach;
                    ?>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="visibility: hidden">
                <span
                    class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control"
                   href="#myCarousel"
                   data-slide="next" style="visibility: hidden"><span
                        class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
            <!-- END BANNER -->
        </div>
    </div>
    <!-- END BANNER -->

</div>
