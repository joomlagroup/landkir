<?php
/* Template Name: contact */

global $wp_query;
$query_obj = $wp_query->get_queried_object();

$page_id  = $post->ID;
//$district = get_field('district', $page_id);

?>
<?php include 'header.php' ?>
<div class="fullpage">
    <div class="wrap-single-contact" style="background: url('http://landkir.co.za/themes/landkir/images/home/home4.jpg');">

        <div class="container">
            <div class="sectionTitleContact">
                <div class="sectionNoContact">
                    <span class="small-no">0</span>
                    <span class="large-no">6</span>
                    <span class="title"><?php echo $query_obj->post_title; ?></span>
                </div>
            </div>

            <div class="container">
                <div class="row content-contact">
                    <div class="col-md-6 left">
                        <p><?php echo $description_contact = get_field('description_contact',$page_id); ?></p>
                        <?php echo $info_contact = get_field('info_contact',$page_id); ?>
                        <div class="address">
                            <?php echo $address_contact = get_field('address_contact',$page_id); ?>
                        </div>
                    </div>
                    <div class="col-md-6 right">
                        <p><?php echo $send_us_contact = get_field('send_us_contact',$page_id); ?></p>
                        <?php echo do_shortcode('[contact-form-7 id="157" title="Contact"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
