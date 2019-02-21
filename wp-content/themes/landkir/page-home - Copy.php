<?php /* Template Name: Home */
$page_id = $post->ID;



?>
<?php include 'header.php' ?>

<div class="wrap-homepage" id="fullpagex">

    <div id="fullpage">
        <div class="section" data-anchor="homePage" id="homePageSection">
            <div class="slider-wrap-home section">
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
                                <div class="btn">
                                    <span>Start your project today</span>
                                </div>
                            </div>
                            <span class="copyright_home">2017. All rights reserved Landkir</span>
                        </div>
                    </div>
                </div>
                <div class="black-overlay"></div>
                <div class="diagonalContainer"></div>
            </div>
        </div>
        <div class="section" data-anchor="aboutPage" id="aboutPageSection">
            <div class="sectionAbout section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 about-left">
                            <div class="content-container">
                                <?php echo $text_section_about = get_field('text_section_about',$page_id ); ?>
                                <div class="btn_cont">
                                    <div class="btn"><span>Start your project today</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="sliders_about">
                                <img src="http://landkir.co.za/themes/landkir/images/about/about_1.jpg">
                                <img src="http://landkir.co.za/themes/landkir/images/about/about_1.jpg">
                                <img src="http://landkir.co.za/themes/landkir/images/about/about_1.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="diagonalContainer"></div>
            </div>
        </div>
        <div class="section" >
            <div style="height: 900px;">b</div>
        </div>
    </div>

    <div class="slider-wrap-home section"  data-anchor="homePage" id="homePageSection">
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
                        <div class="btn">
                            <span>Start your project today</span>
                        </div>
                    </div>
                    <span class="copyright_home">2017. All rights reserved Landkir</span>
                </div>
            </div>
        </div>
        <div class="black-overlay"></div>
        <div class="diagonalContainer"></div>
    </div>
    <div class="sectionAbout section"  data-anchor="aboutPage" id="aboutPageSection">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 about-left">
                    <div class="content-container">
                        <?php echo $text_section_about = get_field('text_section_about',$page_id ); ?>
                        <div class="btn_cont">
                            <div class="btn"><span>Start your project today</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="sliders_about">
                        <img src="http://landkir.co.za/themes/landkir/images/about/about_1.jpg">
                        <img src="http://landkir.co.za/themes/landkir/images/about/about_1.jpg">
                        <img src="http://landkir.co.za/themes/landkir/images/about/about_1.jpg">
                    </div>
                </div>
            </div>
        </div>
        <div class="diagonalContainer"></div>
    </div>
    <div class="sectionServices section" data-anchor="servicePage" id="servicePageSection">
        <div class="content-container">
            <div class="sectionTitleContainer">
                <div class="sectionNo"><span class="small-no">0</span><span class="large-no">2</span></div>
                <div class="sectionTitle">SERVICES</div>
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
                        ?>
                           <a href="<?php the_permalink(); ?>">
                           <div class="wrap_item">
                               <img src="<?php echo $image_overview ?>">
                               <h4><?php the_title() ?></h4>
                               <div class="black-overlay"></div>
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
    <div class="wrapSectionJourney section" data-anchor="processesPage" id="processesPageSection">
        <div class="container">
            <div class="row">
                <div class="sectionJourney">

                    <div class="item item_1" style="background-image: url('http://landkir.co.za/themes/landkir/images/our_journey/landkir_1.jpg');">

                        <div class="left">
                            <h3 class="text-center animated">BRIEF</h3>
                        </div>

                        <div class="right animated">
                            <div class="wrap">
                                <ul>
                                    <li>We oversee</li>
                                    <li>We manage</li>
                                    <li>We do the red-tape</li>
                                </ul>
                                <p>After we have revised the concept design to your exact needs, we turn vision into
                                    reality. Understanding that budget, final look, timings and any manufacturing and
                                    construction is affected by this stage, our designers work hand-in-hand with our
                                    engineers and Computer Aided Design team to deliver perfection.
                                </p>
                            </div>
                        </div>
                        <div class="number-overlay" style="left: 0px;">
                            <div class="black-left"></div>
                            <div class="black-number"></div>
                            <div class="black-right"></div>
                        </div>

                    </div>

                    <div class="item item_2" style="background-image: url('http://landkir.co.za/themes/landkir/images/our_journey/landkir_2.jpg');">

                        <div class="left">
                            <h3 class="text-center animated">
                                FACT <br>
                                GATHERING
                            </h3>
                        </div>
                        <div class="right animated">
                            <div class="wrap">
                                <ul>
                                    <li>We oversee</li>
                                    <li>We manage</li>
                                    <li>We do the red-tape</li>
                                </ul>
                                <p>After we have revised the concept design to your exact needs, we turn vision into
                                    reality. Understanding that budget, final look, timings and any manufacturing and
                                    construction is affected by this stage, our designers work hand-in-hand with our
                                    engineers and Computer Aided Design team to deliver perfection.
                                </p>
                            </div>
                        </div>
                        <div class="number-overlay" style="left: 0px;">
                            <div class="black-left"></div>
                            <div class="black-number"></div>
                            <div class="black-right"></div>
                        </div>

                    </div>

                    <div class="item item_3" style="background-image: url('http://landkir.co.za/themes/landkir/images/our_journey/landkir_3.jpg');">
                        <div class="left">
                            <h3 class="text-center animated">
                                CONCEPT <br>
                                <span class="small">DESIGN</span>
                            </h3>
                        </div>
                        <div class="right animated">
                            <div class="wrap">
                                <ul>
                                    <li>We oversee</li>
                                    <li>We manage</li>
                                    <li>We do the red-tape</li>
                                </ul>
                                <p>After we have revised the concept design to your exact needs, we turn vision into
                                    reality. Understanding that budget, final look, timings and any manufacturing and
                                    construction is affected by this stage, our designers work hand-in-hand with our
                                    engineers and Computer Aided Design team to deliver perfection.
                                </p>
                            </div>
                        </div>
                        <div class="number-overlay" style="left: 0px;">
                            <div class="black-left"></div>
                            <div class="black-number"></div>
                            <div class="black-right"></div>
                        </div>

                    </div>

                    <div class="item item_4" style="background-image: url('http://landkir.co.za/themes/landkir/images/our_journey/landkir_4.jpg');">
                        <div class="left">
                            <h3 class="text-center animated">BRIEF 4</h3>
                        </div>
                        <div class="right animated">
                            <div class="wrap">
                                <ul>
                                    <li>We oversee</li>
                                    <li>We manage</li>
                                    <li>We do the red-tape</li>
                                </ul>
                                <p>After we have revised the concept design to your exact needs, we turn vision into
                                    reality. Understanding that budget, final look, timings and any manufacturing and
                                    construction is affected by this stage, our designers work hand-in-hand with our
                                    engineers and Computer Aided Design team to deliver perfection.
                                </p>
                            </div>
                        </div>
                        <div class="number-overlay" style="left: 0px;">
                            <div class="black-left"></div>
                            <div class="black-number"></div>
                            <div class="black-right"></div>
                        </div>

                    </div>

                    <div class="item item_5" style="background-image: url('http://landkir.co.za/themes/landkir/images/our_journey/landkir_5.jpg');">
                        <div class="left">
                            <h3 class="text-center animated">
                                <span class="small">Administering</span>
                            </h3>
                        </div>
                        <div class="right animated">
                            <div class="wrap">
                                <ul>
                                    <li>We oversee</li>
                                    <li>We manage</li>
                                    <li>We do the red-tape</li>
                                </ul>
                                <p>After we have revised the concept design to your exact needs, we turn vision into
                                    reality. Understanding that budget, final look, timings and any manufacturing and
                                    construction is affected by this stage, our designers work hand-in-hand with our
                                    engineers and Computer Aided Design team to deliver perfection.
                                </p>
                            </div>
                        </div>
                        <div class="number-overlay" style="left: 0px;">
                            <div class="black-left"></div>
                            <div class="black-number"></div>
                            <div class="black-right"></div>
                        </div>

                    </div>

                    <div class="item item_6" style="background-image: url('http://landkir.co.za/themes/landkir/images/our_journey/landkir_6.jpg');">
                        <div class="left">
                            <h3 class="text-center animated">Execution</h3>
                        </div>
                        <div class="right animated">
                            <div class="wrap">
                                <ul>
                                    <li>We oversee</li>
                                    <li>We manage</li>
                                    <li>We do the red-tape</li>
                                </ul>
                                <p>After we have revised the concept design to your exact needs, we turn vision into
                                    reality. Understanding that budget, final look, timings and any manufacturing and
                                    construction is affected by this stage, our designers work hand-in-hand with our
                                    engineers and Computer Aided Design team to deliver perfection.
                                </p>
                            </div>
                        </div>
                        <div class="number-overlay" style="left: 0px;">
                            <div class="black-left"></div>
                            <div class="black-number"></div>
                            <div class="black-right"></div>
                        </div>

                    </div>

                    <div class="item item_7" style="background-image: url('http://landkir.co.za/themes/landkir/images/our_journey/landkir_7.jpg');">
                        <div class="left">
                            <h3 class="text-center animated">Execution</h3>
                        </div>
                        <div class="right animated">
                            <div class="wrap">
                                <ul>
                                    <li>We oversee</li>
                                    <li>We manage</li>
                                    <li>We do the red-tape</li>
                                </ul>
                                <p>After we have revised the concept design to your exact needs, we turn vision into
                                    reality. Understanding that budget, final look, timings and any manufacturing and
                                    construction is affected by this stage, our designers work hand-in-hand with our
                                    engineers and Computer Aided Design team to deliver perfection.
                                </p>
                            </div>
                        </div>
                        <div class="number-overlay" style="left: 0px;">
                            <div class="black-left"></div>
                            <div class="black-number"></div>
                            <div class="black-right"></div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="diagonalContainer"></div>
    </div>
    <div class="sectionClients section" data-anchor="clientsPage" id="clientsPageSection">
        <div class="content-container">
            <div class="sectionTitleContainer">
                <div class="sectionNo"><span class="small-no">0</span><span class="large-no">3</span></div>
                <div class="sectionTitle">CLIENTS</div>
            </div>
        </div>
        <div class="container">
            <div class="col-12">
                <div class="col-sm-12 col-md-10 offset-md-1">
                    <div class="sectionContent">
                        <h3>Our client list speaks for itself</h3>
                        <p>We have worked with some of the most notable companies in South Africa, and we look
                            forward to working and partering with you.</p>
                    </div>
                    <div class="sliders">
                        <?php
                        for($i=0;$i<15;$i++):
                        ?>
                        <div>
                            <img src="http://landkir.co.za/themes/landkir/images/clients/Krunch Logo.png">
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="diagonalContainer"></div>
    </div>
    <div class="sectionProjects section" data-anchor="projectsPage" id="projectsPageSection">
        <div class="content-container">
            <div class="sectionTitleContainer">
                <div class="sectionNo"><span class="small-no">0</span><span class="large-no">4</span></div>
                <div class="sectionTitle">PROJECTS</div>
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

<?php include 'footer.php' ?>

