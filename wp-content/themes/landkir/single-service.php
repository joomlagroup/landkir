<?php
$page_id  = $post->ID;
//$district = get_field('district', $page_id);

$args = array( 'post_type' => 'service');
$services = new WP_Query( $args );
?>

<?php include 'header.php' ?>
<div class="fullpage">
    <div class="wrap-single-service">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1 class="serviceNo">
                        <span class="number pull-left">
                            <?php
                            $i=1;
                            while ( $services->have_posts() ) : $services->the_post();
                                $id = get_the_ID();
                                if($id==$page_id):
                                ?>
                                <span>2.<?php echo $i; ?></span>
                                <?php
                                endif;
                                $i++;
                                endwhile;
                                ?>
                        </span>
                        <span class="title pull-left"><?php the_title() ?></span>
                        <div class="clearfix"></div>
                    </h1>
                    <div class="content">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="btn_cont">
                        <div class="btn">
                            <span>Start your project today</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 list_services">
                    <img src="http://landkir.co.za/assets/sectors-photos/retail.JPG">
                    <div>
                      <ul>
                          <?php
                          $args = array( 'post_type' => 'service');
                          $services = new WP_Query( $args );
                          $i=1;
                          while ( $services->have_posts() ) : $services->the_post();
                              $id = get_the_ID();
                              ?>
                              <li class="<?php  if($id==$page_id) echo 'active'; ?> ">
                                  <a href="<?php the_permalink(); ?>">
                                     <span class="serviceNo pull-left">
                                         <div class="pull-left small-no">2.</div>
                                         <div class="pull-left large-no"><?php echo $i; ?></div>
                                         <div class="clearfix"></div>
                                     </span>
                                      <span class="title pull-left">
                                          <?php the_title() ?>
                                      </span>
                                      <div class="clearfix"></div>
                                  </a>
                              </li>
                          <?php
                          $i++;
                          endwhile;
                          ?>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
