<!DOCTYPE html>
<html <?php language_attributes();?> class="no-js">
<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php bloginfo('name');?></title>
    <script src="<?php echo get_template_directory_uri();?>/js/modernizr-3.5.0.min.js"></script>
    <?php wp_head();?>
</head>
<body>
<div class="container-fluid fh5co_header_bg">
    <div class="container">
        <div class="row">
            <div class="col-12 fh5co_mediya_center"><a href="#" class="color_fff fh5co_mediya_setting"><i
                            class="fa fa-clock-o"></i>&nbsp;&nbsp;&nbsp;Friday, 5 January 2018</a>
                <div class="d-inline-block fh5co_trading_posotion_relative"><a href="#" class="treding_btn">Trending</a>
                    <div class="fh5co_treding_position_absolute"></div>
                </div>
                <a href="#" class="color_fff fh5co_mediya_setting">Instagram’s big redesign goes live with black-and-white app</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 fh5co_padding_menu">
                <?php
                    $logo_site = get_theme_mod('header_logo_settings');
                    if($logo_site){
                ;?>
                        <a href="<?php home_url(); ?>"><img src="<?php echo  $logo_site;?>" alt="img" class="fh5co_logo_width"/></a>
                    <?php   } else{ ?>
                        <h3> <?php bloginfo('name') ?> </h3>
                    <?php  }  ?>
            </div>

            <?php
            $fb_url = get_theme_mod('fb_social_media');
            $twitter_url = get_theme_mod('twitter_social_media');
            $google_plus_url = get_theme_mod('google_plus_social_media');
            $linkedin_url = get_theme_mod('linkedin_social_media');
            ?>
            <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-search"></i></div></a>
                </div>
                <?php if($linkedin_url){ ?>
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table" href="<?php echo  $linkedin_url; ?>"><div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div></a>
                </div>
                <?php } ?>

                <?php if($google_plus_url){?>
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table" href="<?php echo  $google_plus_url; ?>">
                        <div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div></a>
                </div>
                <?php } ?>

                <?php if($twitter_url){?>
                <div class="text-center d-inline-block">
                    <a href="<?php echo  $twitter_url; ?>" target="_blank" class="fh5co_display_table">
                        <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div></a>
                </div>
                <?php } ?>

                <?php if($fb_url){?>
                <div class="text-center d-inline-block">
                    <a href="<?php echo  $fb_url; ?>" target="_blank" class="fh5co_display_table">
                        <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div></a>
                </div>
                <?php } ?>

                <!--<div class="d-inline-block text-center"><img src="images/country.png" alt="img" class="fh5co_country_width"/></div>-->
                <div class="d-inline-block text-center dd_position_relative ">
                    <select class="form-control fh5co_text_select_option">
                        <option>English </option>
                        <option>French </option>
                        <option>German </option>
                        <option>Spanish </option>
                    </select>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light ">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <a class="navbar-brand" href="<?php bloginfo('url') ?>">
                <img src=" <?php  echo $logo_site;?>" alt="img" class="mobile_logo_width"/></a>
                <?php wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'menu_class'     => 'navbar-nav mr-auto',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'navbarSupportedContent',
                        'walker'         => new WP_Bootstrap_Navwalker(),

                )); ?>
        </nav>
    </div>
</div>
