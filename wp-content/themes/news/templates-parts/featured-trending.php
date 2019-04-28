<!-- FEATURED -->

<section class="featured">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="main-cat-title">
                    <h2><a href="#">  <?php echo get_the_category($id)[0]->name; ?>   </a></h2>
                </div>
                <div class="posts-area">
                    <div class="row">
                        <?php
                        $posts = get_field('features_posts', 'option');
                        if ($posts): ?>
                            <?php foreach ($posts as $p): // variable must be called $post (IMPORTANT) ?>
                                <div class="col-12 col-sm-6">
                                    <div class="individual-post"
                                         style="background-image: url(<?php echo get_the_post_thumbnail_url($p->ID); ?>);background-size: cover;">
                                        <div class="overlay">
                                            <a class="post-tag <?php echo get_the_category($p->ID)[0]->name; ?>-tag"
                                               href="<?php echo get_permalink($p->ID); ?>">  <?php echo get_the_category($p->ID)[0]->name; ?>  </a>
                                            <h3>
                                                <a href="<?php echo get_permalink($p->ID); ?>"> <?php echo get_the_title($p->ID); ?> </a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <?php  get_template_part( 'templates-parts/trending-posts' ); ?>
        </div>
    </div>
</section>
