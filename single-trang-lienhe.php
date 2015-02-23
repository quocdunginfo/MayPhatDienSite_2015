<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header();
// Start the Loop.
while ( have_posts() ) : the_post();
?>
<div class="container" id="qd_container_content" style="margin-top: 10px;">
    <!-- WIDGET -->
    <!-- BREADSCRUM & TITLE -->
    <div class="row clearfix">
        <div class="col-xs-12 column">
            <style>
                .breadcrumb li a {
                    color: inherit;
                    text-decoration: none;
                }

                .breadcrumb > li.active, li {
                    color: inherit;
                }
            </style>
            <ol class="breadcrumb" style="background: none !important; padding: 0px; margin: 0px !important;">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Sản phẩm</a></li>
                <li class="active">Máy phát điện</li>
            </ol>
        </div>
        <div class="col-xs-12 column">
            <h3 style="padding: 30px 0px 40px 0px; margin: 0px; font-weight: bold; font-size: 24px">
                <?=the_title(); ?>
            </h3>
        </div>
    </div>
    <!-- END BREADSCRUM & TITLE -->
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
                        <?=rwmb_meta( QdCPT_TrangLienHe::email(), null, get_the_ID() )?>
                    </td>
                    <td class="qd_contact_right">
                        <?=the_content()?>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
endwhile;
get_footer();