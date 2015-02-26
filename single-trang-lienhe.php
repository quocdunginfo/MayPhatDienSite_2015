<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
QdT_Library::loadLayout('introduction');
class QdCPT_TrangLienHe extends QdCPT_IntroductionLayout {
    private $obj = null;
    function __construct(){
        if(have_posts())
        {
            the_post();
            $this->obj = get_post(get_the_ID());
        }
        //var_dump($this->obj);
    }
    protected  function getBreadcrumbs()
    {
        return array(
            0=>array('url' => get_home_url(), 'name' => 'Trang chủ'),
            1=>array('url' => get_permalink($this->obj->ID), 'name' => 'Liên hệ')
        );
    }
    protected function getContent()
    {
        // Start the Loop.
            ?>
            <div class="container" id="qd_container_content" style="margin-top: 10px;">
                <!-- WIDGET -->
                <div class="row clearfix">
                    <div class="col-xs-12 column" id="qd_contact_content">
                        <style>
                            #qd_contact_content table td {
                                border: solid 1px #d8d8d8;
                                width: 50%;
                                padding: 25px;
                            }

                            #qd_contact_content table td.qd_contact_left {
                                vertical-align: middle;
                                text-align: center;
                                font-size: 30px;
                            }

                            #qd_contact_content table td.qd_contact_right {
                                padding: 25px;
                            }
                        </style>
                        <table class="table">
                            <tbody>
                            <tr>
                                <td class="qd_contact_left">
                                    <?=rwmb_meta( QdP_TrangLienHe::email(), null, get_the_ID() )?>
                                </td>
                                <td class="qd_contact_right">
                                    <?=$this->obj->post_content?>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php
    }
}
(new QdCPT_TrangLienHe())->render();
