<?php
/**
 * Created by PhpStorm.
 * User: quocd_000
 * Date: 23/02/2015
 * Time: 10:19 AM
 */
class QdT_TrangTuyenDung
{
    function __construct()
    {

    }
    public function placeHolder1()
    {
        get_sidebar('right-menu-tuyendung');
    }
}
QdT_Library::loadLayout('introduction');
$QdCPT_TrangTuyenDung = new QdCPT_IntroductionLayout(new QdT_TrangTuyenDung());
$QdCPT_TrangTuyenDung->render();