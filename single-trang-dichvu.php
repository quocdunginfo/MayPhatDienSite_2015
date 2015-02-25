<?php
/**
 * Created by PhpStorm.
 * User: quocd_000
 * Date: 23/02/2015
 * Time: 10:19 AM
 */
class QdT_TrangDichVu{
    function __construct()
    {

    }
    public function placeHolder2()
    {

    }
    public function placeHolder1()
    {
        get_sidebar('right-menu-dichvu');
    }
}
QdT_Library::loadLayout('introduction');
$QdT_TrangDichVu = new QdCPT_IntroductionLayout(new QdT_TrangDichVu());
$QdT_TrangDichVu->render();