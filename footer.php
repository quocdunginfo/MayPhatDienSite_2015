<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<!-- footer -->
<div class="container" id="qd_container_footer" style="background-color: #4d4d4d; color: white;">
    <!-- LINE RED -->
    <hr class="long-red-line">

    <div class="row clearfix"
         style="color: white; width: 960px; margin: auto;">
        <div class="col-xs-12 column">
            <!-- NAVIGATION -->
            <style>
                .qd-footer-nav {
                    padding-top: 100px;
                    padding-bottom: 90px;
                }

                .qd-footer-nav ul {
                    padding: 0;
                    margin: 0;
                }
                .qd-footer-nav li {
                    font-size: inherit;
                    font-weight: normal;
                    margin: 0;
                    padding: 0;
                    line-height: 2;
                    list-style: none;
                }
                .qd-footer-nav a {
                    color: inherit;
                }
                .qd-footer-nav h2,
                .qd-footer-nav h1,
                .qd-footer-nav h3,
                .qd-footer-nav h4 {
                    font-size: inherit;
                    font-weight: bold;
                    margin: 0;
                    padding: 0;
                    line-height: 2;
                }
                .qd-footer-nav p {
                    line-height: 2;
                }
            </style>
            <div class="row clearfix qd-footer-nav"
                 style="width: auto; position: relative; ">
                <div class="col-xs-3 column">
                    <?php get_sidebar('footer-menu-1'); ?>
                    <!--
                    <ul style="list-style: none">
                        <li><b>DANH MỤC SẢN PHẨM</b></li>
                        <li>Máy phát điện</li>
                        <li>Máy hàn</li>
                        <li>Máy cắt cỏ</li>
                        <li>Sản phẩm khác</li>
                    </ul>
                    -->

                </div>
                <div class="col-xs-3 column">
                    <?php get_sidebar('footer-menu-2'); ?>
                    <!--
                    <ul style="list-style: none">
                        <li>DANH MỤC SẢN PHẨM</li>
                        <li>Máy phát điện</li>
                        <li>Máy hàn</li>
                        <li>Máy cắt cỏ</li>
                        <li>Sản phẩm khác</li>
                    </ul>
                    -->

                </div>
                <div class="col-xs-3 column">
                    <?php get_sidebar('footer-menu-3'); ?>
                    <!--
                    <div>TƯ VẤN - HỖ TRỢ</div>
                    <div style="font-size: 20px">097 999 6 234</div>
                    <div>(Từ 7:00 - 20:00 mỗi ngày)</div> -->

                </div>
                <div class="col-xs-3 column" style="position: relative">
                    <div class="qd-social-icon" style="position: absolute">
                        <style>
                            .qd-social-icon img {
                                border-radius: 50% 50% 50% 50%;
                                width: 25px;
                                height: 25px;
                                float: left;
                            }
                            .qd-social-icon a {
                                display: inline-block;
                                margin-left: 20px;
                                width: 25px;
                                height: 25px;
                            }
                            .qd-social-icon a:first-of-type {
                                margin-left: 0px;
                            }

                            .qd-social-icon .social:hover {
                                opacity: 0.4;
                            }
                        </style>
                        <?php
                        $social_icon = array(
                            'facebook' => 'img/vn_facebook.png',
                            'google' => 'img/vn_google.png',
                            'twitter' => 'img/vn_twitter.png'
                        );
                        ?>
                        <script>
                            (function($) {
                                $(document).ready(function(){
                                    <?php
                                    foreach($social_icon as $key=>$value):
                                    ?>
                                    $('.qd-social-icon img.<?=$key?>').attr("src", "<?=$value?>");
                                    <?php
                                    endforeach;
                                    ?>
                                });
                            })(jQuery);
                        </script>
                        <?php get_sidebar('footer-menu-4'); ?>
                        <!--
                        <a href="#"/>
                        <img class="social" src="img/vn_twitter.png"/>
                        </a>
                        <a href="#"/>
                        <img class="social" src="img/vn_facebook.png"/>
                        </a> -->

                    </div>

                </div>
            </div>


        </div>
    </div>
    <!-- Part 6 Copyright Statement -->
    <div class="row clearfix" style="width: 960px; margin: 0 auto">
        <div class="col-xs-12 column">
            <hr class="style-six"/>
            <div class="qd-footer-nav" style="text-align: center; padding-top: 30px; padding-bottom: 30px">
                <?php get_sidebar('footer-bottom'); ?>
                <!--
                <b>CÔNG TY TNHH MÁY PHÁT ĐIỆN THẢO NGUYÊN</b>
                <br>
                Trụ sở: 123 Lê Văn Sỹ, P.14, Quận Phú Nhuận, TP.HCM
                <br>
                Điện thoại: 123456789 - 098 900 9333
                <br>
                website: www.mayphatdienthaonguyen.com -->
            </div>

        </div>
    </div>
</div>
<!-- end footer -->
<?php wp_footer(); ?>
</body>
</html>

