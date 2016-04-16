<?php
/* Template Name: Home-page */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <section class="banner">
                <?php
                get_template_part('template-parts/content-slider', get_post_format());
                ?>
            </section>

            <!--about us-->
            <section class="about">
                <div class="container-fluid">
                    <div class="about-heading">
                        <h2> About us </h2>
                        <p> Our short story </p>
                    </div>
                    <div class="about-info">
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        <a href="#" class="button">Read more</a>
                    </div>
                </div>
            </section>

            <section class="services" id="services">
                <div class="container-fluid">
                    <h2> Services </h2>
                    <p> What we are doing </p>
                    <div class="services-wrap">
                        <?php
                        $new = new WP_Query('post_type=services');
                        while ($new->have_posts()) :
                            $new->the_post(); ?>
                            <article class="services-item">
                                <?php the_post_thumbnail(); ?>
                                <div class="text">
                                    <h3><?php the_title(); ?></h3>
                                    <?php the_content(); ?>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>
                    <a href="#" class="button"> View more </a>
                </div>
            </section>

            <section>
                <div class="container-fluid">
                    <h2> Clients </h2>
                    <p> What our client say </p>
                    <div class="clients-wrap">
                        <article>
                            <blockquote>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.
                            </blockquote>
                            <img src="" alt="" class="author">
                        </article>
                    </div>
                </div>
            </section>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();