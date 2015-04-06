<?php

/*
Template Name: Chi tiết Sản phẩm
*/
QdT_Library::loadLayout('root');

class QdT_PageT_ProductDetail extends QdT_Layout_Root
{
    private $obj = null;
    private $cached_customer = '{}';

    private $product_setup_obj = null;

    protected function getPageTitle()
    {
        return parent::getPageTitle() . ' | Product Detail';
    }

    function __construct()
    {
        $this->obj = QdProduct::GET($_GET['id']);
        $this->product_setup_obj = QdProductSetup::GET();
        $this->loadScript();

        if (isset($_COOKIE['customer_json'])) {
            $this->cached_customer = $_COOKIE['customer_json'];
        }
    }

    protected function loadScript()
    {
        QdJqwidgets::loadJS("form2js.js");
        QdJqwidgets::loadJS("ajax-loader.js");
    }

    protected function getBreadcrumbs()
    {
        return array_merge(parent::getBreadcrumbs(), $this->obj->getBreadcrumbs()); // TODO: Change the autogenerated stub
    }

    protected function getContentTitle()
    {
        return $this->obj->name;
    }

    private function dialog()
    {
        ?>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" id="qd-modal-content">
                    <div style="background-color: #4d4d4d; color: white" class="modal-header">
                        <button style="font-size: 32px; margin-top: -5px !important; color: inherit; opacity: 0.5"
                                type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 style="display: inline-block; opacity: 0.5" class="modal-title" id="myModalLabel">THÔNG TIN
                            ĐẶT HÀNG</h4>
                    </div>
                    <div class="modal-body" onsubmit="return false;">
                        <form id="orderForm">
                            <input type="hidden" id="product_id" name="product_id" value="<?= $this->obj->id ?>">

                            <div class="form-group">
                                <table style="width: 100%">
                                    <style>
                                        #qd-1st-form-row td {
                                            padding: 0px;
                                        }

                                        #qd-1st-form-row label {
                                            margin-top: 5px;
                                        }
                                    </style>
                                    <tr id="qd-1st-form-row">
                                        <td>
                                            <label class="control-label">Sản phẩm: <?= $this->obj->name ?></label>
                                        </td>
                                        <td style="align-content: center">
                                            <label class="control-label pull-left">Số lượng đặt:</label>

                                            <select name="count" class="pull-left form-control"
                                                    style="width: 70px; height: 30px; margin-left: 10px">
                                                <?php for ($i = 1; $i <= 20; $i++): ?>
                                                    <option value="<?= $i ?>"><?= $i ?></option>
                                                <?php endfor; ?>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Họ tên khách hàng:</label>
                                <input type="text" class="form-control" name="customer_name" id="customer_name">
                            </div>
                            <div class="form-group">
                                <table style="width: 100%">
                                    <tr>
                                        <td>
                                            <label class="control-label">Điện thoại:</label>
                                            <input type="text" class="form-control" name="customer_phone"
                                                   id="customer_phone">
                                        </td>
                                        <td>
                                            <label class="control-label">Email:</label>
                                            <input type="text" class="form-control" name="customer_email"
                                                   id="customer_email">
                                        </td>
                                    </tr>
                                </table>

                            </div>

                            <div class="form-group">
                                <label class="control-label">Địa chỉ:</label>
                                <input type="text" class="form-control" name="customer_address" id="customer_address">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Ghi chú:</label>
                                <input type="text" class="form-control" name="mota" id="mota">
                            </div>
                            <div style="display: none" class="alert alert-success" id="qdmsgbox">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                Đặt hàng thành công (tự đóng sau 3 giây)
                            </div>

                        </form>
                    </div>
                    <style>
                        .ajax_loader {
                            background: url(<?=Qdmvc_Helper::getImgURL("ajax-loader_blue.gif")?>) no-repeat center center transparent;
                            width: 100%;
                            height: 100%;
                        }
                    </style>
                    <script>
                        (function ($) {
                            $(document).ready(function () {
                                var data_port = '<?=Qdmvc_Helper::getDataPortPath('front/product_order_port')?>'; //'http://localhost/mpd_2015/?qd-api=front/product_order_port';

                                $('#myModal').on('shown.bs.modal', function () {
                                    $('#qdmsgbox').css("display", "none");
                                    $("#customer_name").focus();
                                });

                                $('#qdsend').click(function () {
                                    var json = form2js("orderForm", ".", false, null, true);

                                    console.log(json);
                                    var ajax_loader = new ajaxLoader("#qd-modal-content");

                                    //show progress bar
                                    //...
                                    $.post(data_port, {submit: "submit", action: "insert", data: json})
                                        .done(function (data) {
                                            //data JSON
                                            console.log(data);
                                            //var obj = data;//"ok";//jQuery.parseJSON( data );//may throw error if data aldreay JSON format
                                            for(i=0;i<data.msg.length;i++)
                                            {
                                                if(data.msg[i].type=='error')
                                                {
                                                    alert(data.msg[i].msg);
                                                    return;
                                                }
                                            }
                                            $('#qdmsgbox').css("display", "block");
                                            //auto close after 2 second
                                            setTimeout(function () {
                                                $('#myModal').modal('hide');
                                            }, 3000);
                                        })
                                        .fail(function (data) {
                                            console.log(data);
                                        })
                                        .always(function () {
                                            //release lock
                                            ajax_loader.remove();
                                        });
                                });
                            });
                        })(jQuery);
                    </script>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        <button id="qdsend" type="button" class="btn btn-primary">Hoàn tất</button>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }

    protected function getContentPart()
    {
        ?>
        <?= $this->dialog() ?>

        <!-- CONTENT -->
        <div class="container" id="qd_container_content" style="margin-top: 15px">
            <!-- WIDGET -->
            <div class="row clearfix">
                <!-- PRODUCTS -->
                <div class="col-xs-8 column" style="padding: 0">
                    <div class="row clearfix" id="qd_list_sanpham" style="margin-right: 5px">
                        <div class="col-xs-12 column">
                            <div class="qd-image-box" style="width: 100%; height: 384px; margin-bottom: 25px;">
                                <div class="qd-image-box-bg"></div>
                                <div class="qd-image-box-bg"
                                    style="background: url(<?= $this->obj->avatar ?>); background-repeat: no-repeat;
                                         background-size: contain;
                                         background-position: center;">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 column" style="padding-bottom: 20px">
                            <h4 style="font-size: 24px; margin: 0;">Mô tả sản phẩm</h4>
                            <hr class="long-grey-thin-line" style="margin-top: 10px; margin-bottom: 10px">
                            <div>
                                <?= $this->obj->mota1 ?>
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
                            line-height: 18px;
                            margin-top: 12px;
                            font-size: 14px;
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
                    <div style="/*border: solid 1px #ffffff;*/ border-left: solid 1px #d8d8d8;" id="qd_product_properties">
                        <style>
                            #qd_product_properties {
                                margin-top: -12px;
                            }
                            #qd_product_properties ul li {
                                position: relative;
                                top: -2px;
                            }
                        </style>
                        <ul style="padding-left: 20px; margin-bottom: 0px /*margin-top: -10px*/">
                            <?php
                            function render_obj_prop($obj, $prop_name, $caption)
                            {
                                if($obj->$prop_name!='') {
                                    ?>
                                    <li><?=$caption?>: <?= $obj->$prop_name ?></li>
                                    <?php
                                }
                            }
                            ?>
                            <!-- Alway active for 1st element -->
                            <?=render_obj_prop($this->obj, 'model', 'Model')?>
                            <?=render_obj_prop($this->obj, 'xuatxu', 'Xuất xứ')?>
                            <?=render_obj_prop($this->obj, 'congsuat', 'Công suất')?>
                            <?=render_obj_prop($this->obj, 'dongco', 'Động cơ')?>
                            <?=render_obj_prop($this->obj, 'trongluong', 'Trọng lượng')?>
                            <?=render_obj_prop($this->obj, 'baohanh', 'Bảo hành')?>
                            <?php /*render_obj_prop($this->obj, '_product_cat_name', 'Nhóm SP')*/?>
                            <li style="color: #404040; font-weight: bold; font-size: 16px">Giá: <?=number_format($this->obj->price, 0, '', '.');?> VND</li>
                        </ul>
                    </div>
                    <a class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-top: 23px">ĐẶT HÀNG</a>
                    <button class="btn btn-primary"
                            style="margin-top: 23px; color: #000000; border: solid 1px #000000; background-color: white; font-weight: normal">
                        <?=$this->product_setup_obj->advice_phone?>
                    </button>
                </div>
                <!-- END PRODUCT CATEGORIES -->
            </div>
        </div>
        <!-- END CONTENT-->
    <?php
    }
}

(new QdT_PageT_ProductDetail())->render();