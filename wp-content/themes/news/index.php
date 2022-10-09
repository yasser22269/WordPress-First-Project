<?php

get_header();
?>
<div class="container-fluid paddding mb-5">
    <div class="row mx-0">
        <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
            <div class="fh5co_suceefh5co_height"><img src="images/nick-karvounis-78711.jpg" alt="img"/>
                <div class="fh5co_suceefh5co_height_position_absolute"></div>
                <div class="fh5co_suceefh5co_height_position_absolute_font">
                    <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;Dec 31,2017
                        </a></div>
                    <div class=""><a href="single.html" class="fh5co_good_font"> After all is said and done, more is said than done </a></div>
                </div>
            </div>
        </div>
    </div>
</div>

</br>

<?php
    $arr = array(
            'posts_per_page' =>     -1,
            'order'          =>     'DESC',
          //  'orderby'        =>     'rand',
            'post_type'      =>     'post'
    );
    $posts = new WP_Query($arr);
    if($posts->have_posts()){
        while ($posts->have_posts()){
            $posts->the_post();
            ?>
            <?php
                if(has_post_thumbnail()){
            ?>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            <?php } ?>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php
            $content_post = get_the_content();
            $link_post = "<a href='" . get_the_permalink() ."'> Read More</a>";
            echo wp_trim_words($content_post,10 , $link_post);// or  the_excerpt();

            ?>
                <!--  the_content()-->
<?php
        }
    }

?>



<?php

get_footer();
?>
