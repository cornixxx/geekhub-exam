<?php
$args = array(
    'post_type' => 'slides',
);

$slides = new WP_Query($args);

if ($slides->have_posts()): ?>
    <div class="flexslider">
        <ul class="slides">

            <?php while ($slides->have_posts()) : $slides->the_post(); ?>
                <li>
                    <?php the_post_thumbnail('') ?>
                    <div class="slide-caption">
                        <span> <?php _e('wellcome to', 'cornix'); ?> </span>
                        <h3><?php the_title()  ?></h3>
                        <?php the_content()  ?>
                        <a href="#" class="button">Read more</a>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
<?php endif; ?>
