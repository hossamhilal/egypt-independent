<!-- CAT POSTS -->

<?php
$item = array('category_name' => 'world,middle-east');
$query = new WP_Query($item);

if ( $query->have_posts() ) {
    ?>

    <section class="categorey-posts">
        <div class="container">
            <div class="main-cat-title">
                <h2> <a href="#"> <?php echo get_cat_name(6); ?> </a> / <a href="#"> <?php echo get_cat_name(7); ?> </a> </h2>
            </div>
            <div class="posts-slider">
                <div class="owl-carousel owl-theme posts-owl" id="posts-owl-2">
                    <?php
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        ?>
                        <div class="item">
                            <div class="individual-post" style="background-image: url(<?php the_post_thumbnail_url();?>);background-size: cover;">
                                <div class="overlay">
                                    <a class="post-tag <?php echo  get_the_category( $id )[0]->name ; ?>-tag" href="<?php  the_permalink(); ?>">  <?php echo  get_the_category( $id )[0]->name ; ?>  </a>
                                    <h3>
                                        <a href="<?php  the_permalink(); ?>"> <?php the_title(); ?> </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } wp_reset_postdata(); ?>
