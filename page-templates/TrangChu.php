<?php

/*
Template Name: TrangChu
*/
QdT_Library::loadLayout('root');
class QdT_PageT_TrangChu extends QdT_Layout_Root
{
    function __construct()
    {

    }
    protected function getContentTitle()
    {
        return '';
    }
    protected function getContent()
    {
        ?>
        <!-- CONTENT -->
        <div class="container" id="qd_container_content" style="margin-top: 55px">
            <!-- WIDGET -->
            <div class="row clearfix">
                <style>
                    .qd-image-box {
                        width: 449px;
                        height: 280px;
                        position: relative;
                        border: solid 1px #CACACA;
                        margin-bottom: 65px;
                    }

                    .qd-left {
                        float: right;
                    }

                    .qd-image-box-right {
                        float: left;
                    }

                    .qd-image-box-caption {
                        line-height: 60px;
                        text-align: center;
                        vertical-align: middle;
                        width: 100%;
                        height: 55px;
                        position: absolute;
                        bottom: 0px;
                        left: 0px;
                        background: rgba(0, 0, 0, 0.7);
                        color: white;
                        font-size: 18px;
                    }
                </style>
                <?php
                $count = 0;
                foreach (QdProductCat::all(array('order' => '`order` asc')) as $item):
                    ?>
                    <div class="col-xs-6 column">
                        <a href="<?= $item->getPermalink() ?>">
                            <div class="qd-image-box <?= $count % 2 == 0 ? 'qd-left' : 'qd-right' ?>"
                                 style="background: url(<?= $item->avatar ?>); background-repeat: no-repeat;
                                     background-size: contain;
                                     background-position: center;">
                                <div class="qd-image-box-caption">
                                    <?= $item->name ?>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
            <!-- END WIDGET -->

        </div>
        <!-- END CONTENT-->
    <?php
    }
}
(new QdT_PageT_TrangChu())->render();