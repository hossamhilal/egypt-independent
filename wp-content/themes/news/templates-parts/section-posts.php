

<section class="all-sections">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-8">
                <div class="main-cat-title">
                    <h2> <a href="#">  Sections  </a></h2>
                </div>
                <div class="posts-area">
                    <?php
                        $do_not_duplicate = array();
                        $categories = get_categories();
                        foreach ( $categories as $category ) {
                            $args = array(
                                'cat' => $category->term_id,
                                'post_type' => 'post',
                                'posts_per_page' => '1',
                                'post__not_in' => $do_not_duplicate
                            );
                            $query = new WP_Query( $args );
                        if ( $query->have_posts() ) {
                        }
                        ?>
                            <?php while ( $query->have_posts() ) {
                            $query->the_post();
                                $do_not_duplicate[] = $post->ID;
                            ?>
                                <div class="article-post">
                                    <div class="img-box">
                                        <img src="<?php the_post_thumbnail_url();?>" alt="post-img" class="img-fluid">
                                    </div>
                                    <div class="data">
                                        <a class="post-tag <?php echo  get_the_category( $id )[0]->name ; ?>-tag" href="<?php  the_permalink(); ?>">  <?php echo  get_the_category( $id )[0]->name ; ?>   </a>
                                        <h3>
                                            <a href="<?php  the_permalink(); ?>"> <?php the_title(); ?> </a>
                                        </h3>
                                        <?php $content = get_the_content(); echo mb_strimwidth($content, 0, 250, '...');?>
                                        <a href="<?php  the_permalink(); ?>" class="read-more"> Read more </a>
                                    </div>
                                </div>
                            <?php } // end while ?>
                        <?php } // end if ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>

            <?php  get_template_part( 'templates-parts/recomendation' ); ?>

        </div>
    </div>
</section>
