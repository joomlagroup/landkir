<?php

global $wp_query;
$query_obj = $wp_query->get_queried_object();

$page_id  = $post->ID;
$page     = get_query_var('paged') ? get_query_var('paged') : 1;
$cat      = $query_obj->term_taxonomy_id;
$args = array( 'post_type' => 'post', 'posts_per_page' => 10,'taxonomy'=>'category','paged' => $page);
if($cat){
$args['cat'] = $cat;
}

$loop = new WP_Query( $args );

?>
<?php include 'header.php' ?>
<div class="wrap-listing-job">
    <section class="headerListingJob">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3><?php if($query_obj->name) { echo $query_obj->name; } ?> </h3>
                    <div class="breakcrum"><?php breadcrumbs(); ?></div>
                </div>
            </div>
        </div>
    </section>
    <section class="midleListingJob">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="listItems">
                        <?php
                        while ( $loop->have_posts() ) : $loop->the_post();
                            ?>
                            <div class="itemListing">
                                <a class="listingTitle" href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="thumb">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php
                                                if(has_post_thumbnail()) {
                                                    the_post_thumbnail('thumbnail');
                                                }
                                                else {
                                                    echo '<img src="'. home_url().'/wp-content/themes/sunwell/images/no-img.jpg">';

                                                }
                                                ?>
                                            </a></div>
                                        <div class="content pull-left">
                                            <div class="detailListing">
                                                <div class="innerContent">
                                                    <?php the_content(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        ?>
                    </div>
                    <div class="pagination">
                        <div class="pull-right">
                            <?php if (function_exists('devvn_wp_corenavi')) devvn_wp_corenavi($loop); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 right_sidebar">
                    <div>
                        <?php echo do_shortcode('[jobcategories][/jobcategories]'); ?>
                    </div>
                    <div>
                        <?php if ( is_active_sidebar( 'right_sidebar' ) ) : ?>
                            <?php dynamic_sidebar( 'right_sidebar' ); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
<?php include 'footer.php' ?>
