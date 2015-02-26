<?php
/**
 * Created by PhpStorm.
 * User: quocd_000
 * Date: 23/02/2015
 * Time: 10:19 AM
 */
class QdT_TrangDichVu{
    private $obj =null;
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
        return array(
            0=>array('url' => get_home_url(), 'name' => 'Trang chủ'),
            1=>array('url' => QdT_Library::getNoneLink(), 'name' => 'Dịch vụ'),
            2=>array('url' => get_permalink($this->obj->ID), 'name' => $this->obj->post_title)
        );
    }
    public function placeHolder1()
    {
        get_sidebar('right-menu-dichvu');
    }
}
QdT_Library::loadLayout('introduction');
$QdT_TrangDichVu = new QdCPT_IntroductionLayout(new QdT_TrangDichVu());
$QdT_TrangDichVu->render();