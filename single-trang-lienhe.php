<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
QdT_Library::loadLayout('root');
class QdCPT_TrangLienHe extends QdT_Layout_Root {
    private $obj = null;
    function __construct(){
        if(have_posts())
        {
            the_post();
            $this->obj = get_post(get_the_ID());
        }
    }
    protected  function getBreadcrumbs()
    {
        $t = parent::getBreadcrumbs();
        array_push($t, array('url' => get_permalink($this->obj->ID), 'name' => 'Liên hệ'));
        return $t;
    }

    protected function getContentTitle()
    {
        return $this->obj->post_title;
    }

    protected function getContent()
    {
        // Start the Loop.
            ?>
            <div class="container" id="qd_container_content" style="margin-top: 15px;">
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
                                    <?=rwmb_meta( Qdmvc_Metabox_TrangLienHe::getFieldName('email'), null, get_the_ID() )?>
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
