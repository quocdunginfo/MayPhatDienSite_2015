<?php
/**
 * Created by PhpStorm.
 * User: quocd_000
 * Date: 23/02/2015
 * Time: 10:19 AM
 */
class QdCPT_TrangTuyenDung
{
    function __construct()
    {

    }
    public function placeHolder1()
    {
        get_sidebar('right-menu-tuyendung');
    }
}

$QdCPT_TrangTuyenDung = new QdCPT_IntroductionLayout(new QdCPT_TrangTuyenDung());
$QdCPT_TrangTuyenDung->render();