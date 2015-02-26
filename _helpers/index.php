<?php
/**
 * Created by PhpStorm.
 * User: quocd_000
 * Date: 25/02/2015
 * Time: 7:56 PM
 */
//THEME library provider

/**
 * Class QdT_Library
 * Included in functions.php
 */
class QdT_Library{
    function __construct()
    {

    }
    private static $layout_loc = '../_layouts/';
    private static $pageT_loc = '../page-templates/';
    public static function loadLayout($name)
    {
        require_once(__DIR__.'/'.self::$layout_loc.$name.'.php');
    }
    public static function loadPageT($name)
    {
        require_once(__DIR__.'/'.self::$pageT_loc.$name.'.php');
    }
    public static function  getNoneLink()
    {
        return 'javascript:void(0)';
    }
}