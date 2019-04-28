<div class="col-12 col-md-4">
    <div class="main-cat-title">
        <h2><a href="#"> RECOMMENDATIONS </a></h2>
    </div>
    <div class="posts-area recomentdation-posts">
        <?php
        $do_not_duplicate = array();
        $categories = get_categories();
        foreach ($categories as $category) {
            $args = array(
                'cat' => $category->term_id,
                'post_type' => 'post',
                'posts_per_page' => '1',
                'orderby' => array( 'post_date' => 'DESC', 'title' => 'ASC' ) ,
                'post__not_in' => $do_not_duplicate
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
            }
            ?>
            <?php while ($query->have_posts()) {
                $query->the_post();
                $do_not_duplicate[] = $post->ID;
                ?>

                <div class="side-post">
                    <div class="img-box">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="post-img" class="img-fluid">
                    </div>
                    <div class="data">
                        <h3>
                            <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
                        </h3>
                        <p>  <?php echo get_the_date(); ?> </p>
                    </div>
                </div>

            <?php } // end while ?>
        <?php } // end if ?>
        <?php wp_reset_postdata(); ?>
    </div>

    <div class="ads-area">
        <h5> Advertisement </h5>
        <img src="<?php the_field('recommended_banner','option'); ?>" alt="banner" class="img-fluid">
    </div>
</div>