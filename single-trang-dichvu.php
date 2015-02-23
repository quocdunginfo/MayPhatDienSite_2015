<?php
/**
 * Created by PhpStorm.
 * User: quocd_000
 * Date: 23/02/2015
 * Time: 10:19 AM
 */
get_header();
// Start the Loop.
while ( have_posts() ) : the_post();
?>
<div class="container" id="qd_container_content" style="margin-top: 10px;">
    <!-- WIDGET -->
    <!-- BREADSCRUM & TITLE -->
    <div class="row clearfix">
        <div class="col-xs-12 column">
            <style>
                .breadcrumb li a {
                    color: inherit;
                    text-decoration: none;
                }

                .breadcrumb > li.active, li {
                    color: inherit;
                }
            </style>
            <ol class="breadcrumb" style="background: none !important; padding: 0px; margin: 0px !important;">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Sản phẩm</a></li>
                <li class="active">Máy phát điện</li>
            </ol>
        </div>
        <div class="col-xs-12 column">
            <h3 style="padding: 30px 0px 40px 0px; margin: 0px; font-weight: bold; font-size: 24px">
                <?=the_title(); ?>
            </h3>
        </div>
    </div>
    <!-- END BREADSCRUM & TITLE -->
    <div class="row clearfix">
        <!-- CONTENT -->
        <div class="col-xs-9 column">
            <?=the_content()?>
        </div>
        <!-- END CONTENT -->
        <!-- PRODUCT CATEGORIES -->
        <div id="qd_nav_danhmuc" class="col-xs-3 column" style="border-left: solid 1px #d8d8d8;">
            <style>
                #qd_nav_danhmuc ul {
                    padding: 0;
                }

                #qd_nav_danhmuc a {
                    color: inherit;
                    text-decoration: none;
                }

                #qd_nav_danhmuc a:hover {
                    text-decoration: underline;
                }

                #qd_nav_danhmuc ul li {
                    list-style: none;
                    line-height: 30px;
                }

                #qd_nav_danhmuc ul li.current-menu-item {
                    font-weight: bold;
                }
            </style>
            <?php get_sidebar('right-menu-dichvu'); ?>
            <!--
            <ul style="margin-top: -8px">
                //Alway active for 1st element
                <li class="current-menu-item">GIỚI THIỆU</li>
                <li class="current-menu-item"><a href="#">Giới thiệu chung</a></li>
                <li>Định hướng phát triển</li>
                <li>Tầm nhìn giá trị</li>
                <li>Liên hệ</li>
            </ul>
            -->
        </div>
        <!-- END PRODUCT CATEGORIES -->
    </div>
</div>
<?php
endwhile;
get_footer();