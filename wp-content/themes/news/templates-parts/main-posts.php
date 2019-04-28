<!-- MAIN POSTS  -->
<section class="main-posts-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="row">
                    <?php
                    $posts = get_field('main_posts', 'option');
                    $i = 0;
                    if ($posts): ?>
                        <?php foreach ($posts as $p):
                            if ($i == 1) {
                            break;
                        } ?>
                            <div class="col-12 col-sm-8">
                                <div class="main-post"
                                     style="background-image: url(<?php echo get_the_post_thumbnail_url($p->ID); ?>);background-size: cover;">
                                    <div class="overlay">
                                        <a class="post-tag <?php echo get_the_category(); ?>-tag"
                                           href="<?php the_permalink($p->ID); ?>">  <?php echo get_the_category($p->ID)[0]->name; ?>  </a>
                                        <h3>
                                            <a href="<?php echo get_permalink($p->ID); ?>"> <?php echo get_the_title($p->ID); ?> </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; endforeach; ?>
                        <div class="col-12 col-sm-4">
                            <?php
                            foreach ($posts as $s):
                                if($i == 2 or $i == 3 ) :
                             ?>
                                <div class="small-post"
                                     style="background-image: url(<?php echo get_the_post_thumbnail_url($s->ID); ?>);background-size: cover;">
                                    <div class="overlay">
                                        <a class="post-tag <?php echo get_the_category($p->ID)[0]->name; ?>-tag"
                                           href="<?php the_permalink($s->ID); ?>">  <?php echo get_the_category($p->ID)[0]->name; ?>  </a>
                                        <h3>
                                            <a href="<?php echo get_permalink($s->ID); ?>"> <?php echo get_the_title($s->ID); ?> </a>
                                        </h3>
                                    </div>
                                </div>
                                <?php endif; $i++; endforeach; ?>
                        </div>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="d-none d-lg-block col-lg-4">
                <div class="ads-area">
                    <h5> Advertisement </h5>
                    <img src="<?php the_field('main_posts_banner', 'option'); ?>" alt="banner" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>