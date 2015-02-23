<?php

/**
 * Created by PhpStorm.
 * User: quocd_000
 * Date: 23/02/2015
 * Time: 10:19 AM
 */
class QdCPT_TrangGioiThieu
{
    function __construct()
    {

    }
    public function placeHolder1()
    {
        get_sidebar('right-menu');
    }
}

$trang_gioithieu = new QdCPT_IntroductionLayout(new QdCPT_TrangGioiThieu());
$trang_gioithieu->render();