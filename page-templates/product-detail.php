<?php
/*
Template Name: Chi tiết Sản phẩm
*/
//data
$obj = QdProduct::first($_GET['id']);

get_header();
?>
    <!-- CONTENT -->
    <div class="container" id="qd_container_content" style="margin-top: 10px">
        <!-- WIDGET -->
        <!-- BREADSCRUM & TITLE -->
        <div class="row clearfix">
            <div class="col-xs-12 column">
                <style>
                    .breadcrumb {
                        font-size: 12px;/*14px fail!fuck*/
                    }
                    .breadcrumb li a {
                        color: inherit;
                        text-decoration: none;
                    }

                    .breadcrumb > li.active, li {
                        color: inherit;
                    }


                </style>
                <?php
                $bc = $obj->getBreadcrumbs();
                //var_dump($bc);
                ?>
                <ol class="breadcrumb" style="background: none !important; padding: 0px; margin: 0px !important;">
                    <?php

                    foreach ($bc as $item):
                    ?>
                        <li><a href="<?=$item['url']?>"><?=$item['name']?></a></li>
                    <?php
                    endforeach;
                    ?>
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
            <div class="col-xs-8 column" style="">
                <div class="row clearfix" id="qd_list_sanpham">
                    <style>
                        .qd-image-box {
                            width: 100%;
                            height: 300px;
                            position: relative;
                            border: solid 1px #CACACA;
                            margin-bottom: 25px;
                        }

                    </style>

                    <div class="col-xs-12 column">
                        <div class="qd-image-box" style="background: url(<?=$obj->avatar?>); background-repeat: no-repeat;
                    background-size: contain;
                    background-position: center;">
                        </div>
                    </div>
                    <div class="col-xs-12 column" style="padding-bottom: 20px">
                        <h4 style="font-size: 24px; margin: 0;">Mô tả sản phẩm</h4>
                        <hr class="long-grey-thin-line" style="margin-top: 10px; margin-bottom: 10px">
                        <div>
                            <?=$obj->mota1?>
                        </div>
                    </div>

                </div>
                <!--
                <div class="row clearfix">
                    <div class="col-xs-12 column" style="text-align: center">
                        <ul class="pagination">
                            <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>


            </div>
            -->
                <!-- END PRODUCTS -->
            </div>
            <!-- PRODUCT CATEGORIES -->
            <div id="qd_nav_danhmuc" class="col-xs-4 column" style="padding-left: 0px">
                <style>
                    #qd_nav_danhmuc ul {
                        padding: 0;
                    }

                    #qd_nav_danhmuc ul li {
                        list-style: none;
                        line-height: 30px;
                    }

                    #qd_nav_danhmuc ul li.active {
                        font-weight: bold;
                    }

                    #qd_nav_danhmuc .btn {
                        border-radius: 0px;
                        color: white;
                        font-size: 20px;
                        background-color: #003399;
                        width: 100%;
                        font-weight: bold;
                        height: 50px;
                        padding: 0;
                        line-height: 50px;
                        margin-top: 10px;
                    }
                </style>
                <!-- css of border-top very important -->
                <div style="border: solid 1px #ffffff; border-left: solid 1px #d8d8d8;" id="qd_product_properties">
                    <style>
                        #qd_product_properties li {

                        }
                    </style>
                    <ul style="padding-left: 15px; margin-top: -10px">
                        <!-- Alway active for 1st element -->
                        <li>Model: <?=$obj->code?></li>
                        <li>Xuất xứ: <?=$obj->xuatxu?></li>
                        <li>Công suất: <?=$obj->congsuat?></li>
                        <li>Động cơ: <?=$obj->dongco?></li>
                        <li>Trọng lượng: <?=$obj->trongluong?></li>
                        <li>Bảo hành: <?=$obj->baohanh?></li>
                    </ul>
                </div>
                <a class="btn btn-primary">ĐẶT HÀNG</a>
                <button class="btn btn-primary"
                        style="margin-top: 10px; color: #000000; border: solid 1px #000000; background-color: white; font-weight: normal">
                    TƯ VẤN 097 999 6 234
                </button>
            </div>
            <!-- END PRODUCT CATEGORIES -->
        </div>
    </div>
    <!-- END CONTENT-->
<?php
get_footer();