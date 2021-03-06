<?php global $tp_options; ?>
<footer>
    <div class="desktop" id="footerFooter">

        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-9">
                            <p>
                                <?php echo $description_footer = get_field('description_footer','option'); ?>
                            </p>
                        </div>
                        <div class="col-sm-3">
                            <?php wp_nav_menu(array('theme_location' => 'main-nav')); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-6">
                            1<?php echo $description_footer = get_field('address_footer','option'); ?>
                        </div>
                        <div class="col-sm-6">
                            <?php echo $contact_footer = get_field('contact_footer','option'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <img class="footer-logo" src="<?php echo $tp_options['black-logo']['url'] ?>" alt="logo">
                </div>
            </div>
        </div>

        <div id="copyRight"></div>
    </div>
</footer>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/css/bootstrap-4.3.1/js/bootstrap.min.js"></script>

<?php wp_footer(); ?>
</body>
</html>

