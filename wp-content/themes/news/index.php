<?php

get_header();
?>
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
