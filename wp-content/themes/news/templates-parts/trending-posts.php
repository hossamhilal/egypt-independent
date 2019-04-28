<div class="col-12 col-md-4">
    <div class="main-cat-title">
        <h2><a href="#"> Trending </a></h2>
    </div>

    <div class="trend-list">
        <ul>
            <?php
            $popularpost = new WP_Query(
                array(
                    'posts_per_page' => 5,
                    'meta_key' => 'wpb_post_views_count',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC'));
            $i = 1 ;
            while ($popularpost->have_posts()) : $popularpost->the_post(); ?>
                <li>
                    <a href="#">
                        <span> <?php echo $i ?> </span>
                        <label> <?php the_title(); ?> </label>
                    </a>
                </li>
            <?php $i++ ; endwhile; ?>
        </ul>
    </div>

    <div class="ads-area">
        <h5> Advertisement </h5>
        <img src="<?php the_field('trending_banner', 'option'); ?>" alt="banner" class="img-fluid">
    </div>
</div>