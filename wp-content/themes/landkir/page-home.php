<?php /* Template Name: Home */
$page_id = $post->ID;



?>
<?php include 'header.php' ?>

<div class="wrap-homepage">

    <div id="fullpage">
        <div class="section"  id="homePageSection" data-anchor="homePage">
            <div class="slider-wrap-home">
                <div class="slick-banner-home">
                    <?php
                    $sliders1 = get_field('sliders1',$page_id );
                    if($sliders1):
                        foreach ($sliders1 as $banner):
                            $image_url = $banner['image'];
                            //get_template_directory_uri()
                            ?>
                            <div class="item_img_slider_home" style="background: url('<?php echo $image_url; ?>');"></div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

                <div class="content_sliders1">
                    <div class="container">
                        <div class="inner">
                            <?php echo $textSliders1 = get_field('text_sliders1',$page_id ); ?>
                            <div class="btn_cont">
                                <a href="<?php echo home_url('/lien-he'); ?>">
                                    <div class="btn">
                                        <span>Start your project today</span>
                                    </div>
                                </a>
                            </div>
                            <span class="copyright_home">2017. All rights reserved Landkir</span>
                        </div>
                    </div>
                </div>
                <div class="black-overlay"></div>
                <div class="diagonalContainer"></div>
            </div>
        </div>
        <div class="section " id="aboutPageSection" data-anchor="aboutPage">
            <div class="sectionAbout">
                <div class="content-container1">
                    <div class="sectionTitleContainer">
                        <div class="sectionNo"><span class="small-no">0</span><span class="large-no">1</span></div>
                        <div class="sectionTitle">giới thiệu</div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 about-left">
                            <div class="content-container">
                                <?php echo $text_section_about = get_field('text_section_about',$page_id ); ?>
                                <div class="btn_cont">
                                    <a href="<?php echo home_url('/lien-he'); ?>">
                                    <div class="btn"><span>Start your project today</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="sliders_about">
                                <?php
                                    $banners_about = get_field('banner_about',$page_id );
                                    if($banners_about):
                                    foreach ($banners_about as $banner):
                                    $image_url          = $banner['img'];
                                    ?>
                                    <img src="<?php echo $image_url ?>">
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="diagonalContainer"></div>
            </div>
        </div>
        <div class="section" id="servicePageSection" data-anchor="servicePage">
            <div class="sectionServices">
                <div class="content-container">
                    <div class="sectionTitleContainer">
                        <div class="sectionNo"><span class="small-no">0</span><span class="large-no">2</span></div>
                        <div class="sectionTitle">Dịch Vụ</div>
                    </div>
                </div>
                <div class="container">
                    <div class="col-12">
                        <div class="col-sm-12 col-md-10 offset-md-1">
                            <div class="sectionContent">
                                <div class="text_home_services">
                                    <?php echo $text_section_services = get_field('text_section_services',$page_id ); ?>
                                </div>
                            </div>
                        </div>

                        <div class="service_sliders">
                            <?php
                            $args = array( 'post_type' => 'service');
                            $services = new WP_Query( $args );
                            while ( $services->have_posts() ) : $services->the_post();
                                $id = get_the_ID();
                                $image_overview = get_field('image_overview', $id);
                                $text_find_more = get_field('find_more_service', $id);
                                $class_service = get_field('class_service', $id);
                                ?>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="wrap_item">
                                        <div class="top">
                                            <div class="icon <?php echo $class_service ?>"></div>
                                            <div class="img" style="background-image: url('<?php echo $image_overview ?>');"></div>
                                            <h4>
                                                <?php the_title() ?>
                                                <div class="sectorService-line"></div>
                                            </h4>

                                        </div>
                                        <div class="bottom">
                                            <div class="sectorService-body">
                                                <?php echo $text_find_more ?>
                                            </div>
                                            <div class="readmore">
                                                Xem Thêm
                                                <div class="arrow-container">
                                                    <div class="shaft"></div>
                                                    <i class="fa fa-arrow-right"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            <?php
                            endwhile;
                            ?>
                        </div>
                    </div>
                </div>
                <div class="diagonalContainer"></div>
            </div>
        </div>

        <div class="section" id="processesPageSection" data-anchor="processesPage">
            <div class="wrapSectionJourney ">
                <div class="container">
                    <div class="row">
                        <div class="sectionJourney">
                            <?php
                            $processes_sliders_home = get_field('processes_sliders_home',$page_id );
                            if($processes_sliders_home):
                                foreach ($processes_sliders_home as $key => $processes_sliders):
                                    $image_url          = $processes_sliders['img'];
                                    $title              = $processes_sliders['title'];
                                    $right_text         = $processes_sliders['right_text'];
                                    $ul_list            = $processes_sliders['ul_list'];
                                    ?>
                                    <div class="item item_<?php echo $key+1 ?>" style="background-image: url('<?php echo $image_url ?>');">

                                        <div class="numb_mobile">
                                            <div class="numb_mobile_left">
                                                <div class="numb"><?php echo $key+1 ?></div>
                                                <div class="step"><?php echo $title ?></div>
                                            </div>
                                            <div class="numb_mobile_right">
                                                <?php echo $ul_list ?>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="left">
                                            <h3 class="text-center animated"><?php echo $title ?></h3>
                                        </div>
                                        <div class="right animated">
                                            <div class="wrap">
                                                <?php echo $ul_list ?>
                                                <?php echo $right_text ?>
                                            </div>
                                        </div>
                                        <div class="number-overlay" style="left: 0px;">
                                            <div class="black-left"></div>
                                            <div class="black-number"></div>
                                            <div class="black-right"></div>
                                        </div>

                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="diagonalContainer"></div>
            </div>
        </div>

        <div class="section" id="clientsPageSection" data-anchor="clientsPage">
            <div class="sectionClients" >
                <div class="content-container">
                    <div class="sectionTitleContainer">
                        <div class="sectionNo"><span class="small-no">0</span><span class="large-no">3</span></div>
                        <div class="sectionTitle">Khách Hàng</div>
                    </div>
                </div>
                <div class="container">
                    <div class="col-12">
                        <div class="col-sm-12 col-md-10 offset-md-1">
                            <div class="sectionContent">
                                <?php echo $text_section_services = get_field('text_section_clients_home',$page_id ); ?>
                            </div>
                            <div class="sliders">
                                <?php
                                $clients_home = get_field('clients_slider_home',$page_id );
                                if($clients_home):
                                    foreach ($clients_home as $client):
                                        $image_url          = $client['img'];
                                        ?>
                                        <div>
                                            <img src="<?php echo $image_url ?>">
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="diagonalContainer"></div>
            </div>
        </div>

        <div class="section" id="projectsPageSection" data-anchor="projectsPage">
            <div class="sectionProjects">
                <div class="content-container">
                    <div class="sectionTitleContainer">
                        <div class="sectionNo"><span class="small-no">0</span><span class="large-no">4</span></div>
                        <div class="sectionTitle">Các Dự Án</div>
                    </div>
                </div>
                <div class="container">
                    <div class="col-12">
                        <div class="col-sm-12 col-md-10 offset-md-1">
                            <div class="sectionContent">
                                <p class="text-center">Recent Retail Projects</p>
                            </div>
                        </div>
                        <div class="listProject">
                            <div class="sliders">
                                <?php
                                $array = array('post_type'=>'project','posts_per_page' => 60);

                                $jobs = new WP_Query($array);
                                $columns = 10;
                                $count = $jobs->post_count;
                                $rows = ceil($count / $columns);
                                if ($jobs->have_posts()) {
                                    for ($row = 0; $row < $rows; $row++):
                                        $k = 0;
                                        echo '<ul class="row_project clearfix">';
                                        while($jobs->have_posts()) : $jobs->the_post();
                                            if ($k % $rows == $row):
                                                $id = get_the_ID();
                                                ?>
                                                <li class="">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <div class="project_item">
                                                            <img src="<?php echo  the_post_thumbnail_url( 'medium' );  ?>">
                                                            <h3 class="title text-tranform-upcase animated faster"><?php the_title(); ?></h3>
                                                            <div class="diagonalImg"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                            <?php
                                            endif;
                                            $k++;
                                        endwhile;
                                        echo '</ul>';
                                    endfor;
                                } else

                                {
                                    echo 'None Results';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include 'footer.php' ?>
