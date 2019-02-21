<?php
$page_id  = $post->ID;
//$district = get_field('district', $page_id);



?>
<?php include 'header.php' ?>
<div class="fullpage">
    <div class="wrap-single-project">
        <div class="main-container">
            <div class="project-header">
                <div class="project-img" style="background: url('<?php echo  the_post_thumbnail_url( 'full' );  ?>'); min-height: 400px; background-position: center; background-size: cover;"></div>
                <div class="dark-overlay"></div>
                <h1 class="title_project"><?php the_title() ?></h1>
                <div class="control-sliders">
                    <div class="container">
                        <div class="row wrap">
                            <div class="nexpost">
                                <?php
                                $next_post = get_next_post();
                                if (!empty( $next_post )): ?>
                                  <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>"></a>
                                <?php endif;  ?>
                            </div>

                            <div class="prevpost">
                                <?php
                                $prev_post = get_previous_post();
                                if (!empty( $prev_post )): ?>
                                    <a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>"></a>
                                <?php endif ?>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="project-content">
                <div class="diagonalContainer-project"></div>
                <div class="container">
                    <div class="content">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <a href="<?php echo home_url('/lien-he'); ?>">
                    <div class="btn_cont pull-right">
                        <div class="btn">
                            <span>Start your project today</span>
                        </div>
                    </div>
                    </a>
                    <div class="clearfix"></div>


                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
