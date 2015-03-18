<?php
/*
Template Name: Loại sản phẩm
*/
if(isset($_GET['product-offset']))
{
    QdT_Library::loadPageT('product-cat-loadmore');
    exit(0);
}
QdT_Library::loadLayout('root');
class QdT_PageT_ProductCat extends QdT_Layout_Root {
    private $obj = null;
    function __construct()
    {
        $this->obj = QdProductCat::first($_GET['id']);
    }
    protected function getBreadcrumbs()
    {
        return array_merge(parent::getBreadcrumbs(), $this->obj->getBreadcrumbs());
    }
    protected function getContentTitle()
    {
        return $this->obj->name;
    }
    protected function getContent()
    {

        ?>
        <!-- CONTENT -->
        <div class="container" id="qd_container_content" style="margin-top: 10px">
            <div class="row clearfix">
                <!-- PRODUCTS -->
                <div class="col-xs-9 column" style="">
                    <div class="row clearfix" id="qd_list_sanpham">
                        <style>
                            .qd-image-box {
                                width: 315px;
                                height: 200px;
                                position: relative;
                                border: solid 1px #CACACA;
                                margin-bottom: 30px;
                                float: right;
                            }

                            .qd-image-box .qd_xemchitiet {
                                position: absolute;
                                visibility: hidden;
                                opacity: 0;
                                height: 80%;
                                width: 100%;
                                background-color: rgba(255, 255, 255, 0.6);
                                transition: visibility 0.3s linear, opacity 0.3s linear;
                            }

                            .qd-image-box:hover .qd_xemchitiet {
                                visibility: visible;
                                opacity: 1;
                            }

                            .qd_xemchitiet a, .qd_xemchitiet a:hover {
                                color: white;
                                background-color: #002a80;
                                border: none;
                                border-radius: 0px;
                                height: 40px;
                                line-height: 40px;
                                padding: 0px 15px 0px 15px;
                                top: 35%;
                                left: 103px;
                                position: absolute;

                            }

                            .qd-image-box-caption {
                                line-height: 40px;
                                text-align: center;
                                vertical-align: middle;
                                width: 100%;
                                height: 40px;
                                position: absolute;
                                bottom: 0px;
                                left: 0px;
                                background: rgba(0, 0, 0, 0.4);
                                color: white;
                                font-size: 16px;
                            }
                            .qd-image-box-caption a {
                                color: inherit;
                                text-decoration: none;
                            }

                            #qd_list_sanpham .qd_jscroll_next a {

                            }
                        </style>
                        <script type="text/javascript" src="plugin/jquery.jscroll.js"></script>
                        <script>
                            $(document).ready(function () {
                                $('#qd_list_sanpham').jscroll({
                                    loadingHtml: '<div style="text-align: center; width: 100%; padding-bottom: 17px"><img style="width: 25px; height: 25px" src="img/loading.gif" alt="Loading" /> Đang tải...</div>',
                                    padding: 0,
                                    autoTrigger: false,
                                    nextSelector: '.qd_jscroll_next a:last',
                                    callback: function () {
                                    }
                                });
                            });

                        </script>
                        <?php
                        require_once('product-cat-loadmore.php');

                        ?>

                    </div>
                </div>
                <!-- END PRODUCTS -->
                <!-- PRODUCT CATEGORIES -->
                <div id="qd_nav_danhmuc" class="col-xs-3 column" style="padding-left: 0px; margin-top: -11px">
                    <style>
                        #qd_nav_danhmuc ul {
                            padding-left: 15px;
                        }

                        #qd_nav_danhmuc a {
                            color: inherit;
                            text-decoration: none;
                        }
                        #qd_nav_danhmuc h1,
                        #qd_nav_danhmuc h2,
                        #qd_nav_danhmuc h3,
                        #qd_nav_danhmuc h4,
                        #qd_nav_danhmuc h5
                        {
                            font-size: inherit;
                            font-weight: bold;
                            padding-left: 15px;
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
                    <div style="/*border: solid 1px #ffffff;*/ border-left: solid 1px #d8d8d8;"><!-- css of border-top very important -->
                        <ul style="margin-top: -10px">
                            <!-- Alway active for 1st element -->
                            <?=get_sidebar('right-menu-productcat')?>
                            <!--
                            <li class="active">DANH MỤC SẢN PHẨM</li>
                            <li class="active"><a href="#">Máy phát điện</a></li>
                            <li>Máy hàn</li>
                            <li>Máy công cụ</li>
                            <li>Sản phẩm khác</li> -->
                        </ul>
                    </div>


                </div>
                <!-- END PRODUCT CATEGORIES -->
            </div>
        </div>
        <!-- END CONTENT-->
    <?php
    }
}
(new QdT_PageT_ProductCat())->render();