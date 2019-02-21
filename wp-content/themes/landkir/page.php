
<?php
global $wp_query;
$query_obj = $wp_query->get_queried_object();
$page_id  = $post->ID;
?>
<?php include 'header.php' ?>
<div class="wrap-single">
    <section class="headerDeailSingle">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3><?php echo $query_obj->post_title; ?></h3>
                    <div class="breakcrum"><?php breadcrumbs(); ?></div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <?php
                    if ( have_posts() ) : ?>
                        <?php
                        // The Loop
                        while ( have_posts() ) : the_post();
                            ?>
                            <div class="">
                                <div class="media_entry">
                                    <?php the_content(); ?>
                                </div>

                            </div>
                        <?php endwhile; // End Loop

                    else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'footer.php' ?>
