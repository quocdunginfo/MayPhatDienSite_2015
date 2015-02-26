<?php
/**
 * Created by PhpStorm.
 * User: quocd_000
 * Date: 23/02/2015
 * Time: 10:19 AM
 */
class QdT_TrangTuyenDung
{
    private $obj = null;
    function __construct()
    {
        if(have_posts())
        {
            the_post();
            $this->obj = get_post(get_the_ID());
        }
    }
    public function getObj()
    {
        return $this->obj;
    }
    public function getBreadcrumbs()
    {
        return array();
    }
    public function placeHolder1()
    {
        get_sidebar('right-menu-tuyendung');
    }
}
QdT_Library::loadLayout('introduction');
$QdCPT_TrangTuyenDung = new QdCPT_IntroductionLayout(new QdT_TrangTuyenDung());
$QdCPT_TrangTuyenDung->render();