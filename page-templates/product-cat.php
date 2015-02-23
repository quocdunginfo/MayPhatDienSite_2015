<?php
/*
Template Name: Loại sản phẩm
*/
//data
$obj = QdProductCat::first($_GET['id']);

get_header();
?>
    <!-- CONTENT -->
    <div class="container" id="qd_container_content" style="margin-top: 10px">
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
                <?=$obj->name?>
            </h3>
        </div>
    </div>
    <!-- END BREADSCRUM & TITLE -->

    <div class="row clearfix">
        <!-- PRODUCTS -->
        <div class="col-xs-9 column" style="">
            <div class="row clearfix" id="qd_list_sanpham">
                <style>
                    .qd-image-box {
                        width: 330px;
                        height: 200px;
                        position: relative;
                        border: solid 1px #CACACA;
                        margin-bottom: 25px;
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
                        background: rgba(0, 0, 0, 0.6);
                        color: white;
                        font-size: 16px;
                    }

                    #qd_list_sanpham .qd_jscroll_next {
                        text-align: center;
                        padding-top: 15px;
                        padding-bottom: 20px;
                    }

                    #qd_list_sanpham .qd_jscroll_next a {

                    }
                </style>
                <script type="text/javascript" src="plugin/jquery.jscroll.js"></script>
                <script>
                    $(document).ready(function () {
                        $('#qd_list_sanpham').jscroll({
                            loadingHtml: '<img style="width: 25px; height: 25px" src="img/loading.gif" alt="Loading" /> Đang tải...',
                            padding: 0,
                            autoTrigger: false,
                            nextSelector: '.qd_jscroll_next a:last',
                            callback: function () {
                            }
                        });
                    });

                </script>
                <?php
                //loop all Product per Cat
                foreach(QdProductCat::first($_GET['id'])->getProducts() as $item):

                ?>
                <div class="col-xs-6 column">
                    <div class="qd-image-box" style="background: url(<?=$item->avatar?>); background-repeat: no-repeat;
                        background-size: contain;
                        background-position: center;">
                        <div class="qd-image-box-caption">
                            <?=$item->name?>
                        </div>
                        <div class="qd_xemchitiet">
                            <a href="<?=$item->getPermalink()?>" type="button" class="btn btn-default">XEM CHI TIẾT</a>
                        </div>
                    </div>
                </div>
                <?php
                endforeach;
                ?>

                <div class="qd_jscroll_next">
                    <a href="next-6-items.html">Xem thêm</a>
                </div>

            </div>
        </div>
        <!-- END PRODUCTS -->
        <!-- PRODUCT CATEGORIES -->
        <div id="qd_nav_danhmuc" class="col-xs-3 column" style="padding-left: 0px">
            <style>
                #qd_nav_danhmuc ul {
                    padding-left: 15px;
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

                #qd_nav_danhmuc ul li.active {
                    font-weight: bold;
                }
            </style>
            <div style="border: solid 1px #ffffff; border-left: solid 1px #d8d8d8;"><!-- css of border-top very important -->
                <ul style="margin-top: -10px">
                    <!-- Alway active for 1st element -->
                    <li class="active">DANH MỤC SẢN PHẨM</li>
                    <li class="active"><a href="#">Máy phát điện</a></li>
                    <li>Máy hàn</li>
                    <li>Máy công cụ</li>
                    <li>Sản phẩm khác</li>
                </ul>
            </div>


        </div>
        <!-- END PRODUCT CATEGORIES -->
    </div>
    </div>
    <!-- END CONTENT-->
<?php
get_footer();