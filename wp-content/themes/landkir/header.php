<?php global $tp_options;
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="<?php echo $tp_options['favicon-image']['url'] ?>"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700&amp;subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
            echo ' :';
        } ?><?php bloginfo('name'); ?></title>
    <script>
        var ajax_link = "<?php echo home_url()."/wp-admin/admin-ajax.php" ?>";
        var home = '<?php echo home_url() ?>';

    </script>
    <script src="<?php echo get_template_directory_uri() ?>/js/fullpage.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/pace.js"></script>

    <?php wp_head(); ?>
</head>
<body <?php echo body_class() ?>>



<div class="paceDiv" style="text-align: center;">
    <div class="innerpaceDiv">
        <img src="<?php echo $tp_options['white-logo']['url'] ?>">
    </div>
</div>

<header id="site-header">
    <div class="fixed">
        <div class="flex-row  row_header ">
            <div  id="logo" class="flex-col flex-left logo">
                <a href="<?php echo home_url(); ?>" class="logo">
                    <img class="logo-black" src="<?php echo $tp_options['black-logo']['url'] ?>" alt="logo">
                    <img class="logo-white" src="<?php echo $tp_options['white-logo']['url'] ?>" alt="logo">
                </a>
            </div>
            <div id="main-menu">
                <nav class="nav"> <?php wp_nav_menu(array('theme_location' => 'main-nav')); ?> </nav>
            </div>

            <div class="flex-col show-for-medium flex-right show-mobile">
                <div class="icon-round menu-mobi-view">
                    <div class="menuicon mobilemenuicon">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-->
    <div class="mobile-menu-block clearfix">
        <div class="mobile-menu-inner clearfix">
            <i class="fa fa-close close_menu" aria-hidden="true"></i>
            <nav class="mobile-nav">
                <?php wp_nav_menu(array('theme_location' => 'mobile-nav')); ?>
            </nav>
        </div>
    </div>
    <div class="menu-open-overlay">&nbsp;</div>
    <!-->

</header>
