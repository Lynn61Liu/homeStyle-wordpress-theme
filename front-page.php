<?php get_header() ?>

<!-- inject slideshow here -->
<section class="slideshow">
    <div class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <img src="<?php the_field('image_one'); ?>" />
                </li>
                <li class="splide__slide">
                    <img src="<?php the_field('image_two'); ?>" />
                </li>
                <li class="splide__slide">
                    <img src="<?php the_field('image_three'); ?>" />
                </li>

            </ul>
        </div>
    </div>
</section>



<!-- features content -->
<section class="features-section">
    <?php
    $features = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        // 'posts_per_page' => 6,
        'orderby' => 'date',
        'order'   => 'ASC',
        'cat' => 4,
    );

    $the_query = new WP_Query($features);
    wp_reset_postdata();

    ?>

    <?php if ($the_query->have_posts()) : ?>
    <?php $index = 0;  ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <div class=" <?php echo "features-wrap wrap-$index";  ?>">
        <div class="features-image"><?php echo the_post_thumbnail("thumb") ?></div>
        <div class="features-content">
            <h3> <?php the_title();   ?></h3>
            <p>
                <?php the_excerpt();   ?>
            </p>
            <div>
                <img class="moreicon" src="<?php echo  wp_get_attachment_image_url(16) ?>" alt="">
                <a href="<?php echo the_permalink() ?>">more</a>

            </div>
        </div>
    </div>
    <?php $index++  ?>
    <?php endwhile; ?>
    <?php endif; ?>

</section>
<!-- project content -->
<section>
    <H3>OUR LATEST PROJECTS</H3>
    <hr>
</section>
<section class="projects-section">
    <?php
    $projects = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        // 'posts_per_page' => 6,
        'orderby' => 'date',
        'order'   => 'ASC',
        'cat' => 5,
    );
    $the_query = new WP_Query($projects);
    wp_reset_postdata(); ?>

    <?php if ($the_query->have_posts()) : ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

    <div class="projects-warp">
        <div class="projects-image"><?php echo the_post_thumbnail() ?></div>
        <div class="projects-content">
            <h3> <?php the_title();   ?></h3>
            <p>
                <?php the_excerpt();   ?>
            </p>
            <a class="red-btn " ref="<?php echo the_permalink() ?>">More</a>
        </div>
    </div>

    <?php endwhile; ?>
    <?php endif; ?>

</section>
<!-- wlcome content -->
<section class="wlcome-section">
    <?php
    $wlcome = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        // 'posts_per_page' => 6,
        'orderby' => 'date',
        'order'   => 'ASC',
        'cat' => 6,
    );

    $the_query = new WP_Query($wlcome);
    wp_reset_postdata();

    ?>

    <?php if ($the_query->have_posts()) : ?>

    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <!-- <H3>OUR LATEST PROJECTS</H3> -->
    <hr>
    <div class="wlcome-warp">
        <div>
            <h2> <?php the_title();   ?></h2>
            <p>
                <?php the_content();   ?>
            </p>
        </div>
        <div>
            <a class="red-btn welcome-btn" href="<?php echo the_permalink() ?>">Read More</a>
        </div>

    </div>
    </div>

    <?php endwhile; ?>
    <?php endif; ?>
</section>

<div class="half-section">
    <div class="team-left">
        <!-- team infor -->
        <section>
            <H3>ABOUT OUR TEAM</H3>
            <hr>
        </section>
        <section class="team-section">
            <?php
            $projects = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                // 'posts_per_page' => 6,
                'orderby' => 'date',
                'order'   => 'ASC',
                'cat' => 7,
            );
            $the_query = new WP_Query($projects);
            wp_reset_postdata(); ?>

            <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <div class="projects-warp team-warp">
                <div class="projects-image"><?php echo the_post_thumbnail() ?></div>
                <div class="projects-content team-content">
                    <h3> <?php the_title();   ?></h3>
                    <p>
                        <?php the_excerpt();   ?>
                    </p>
                    <a class="red-btn " ref="<?php echo the_permalink() ?>">More</a>
                </div>
            </div>

            <?php endwhile; ?>
            <?php endif; ?>

        </section>
    </div>
    <div class="video-right">
        <!-- vide -->
        <section>
            <H3>LATEST VIDEO</H3>
            <hr>
        </section>
        <section class="projects-section">
            <?php
            $video = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                // 'posts_per_page' => 6,
                'orderby' => 'date',
                'order'   => 'ASC',
                'cat' => 8,
            );
            $the_query = new WP_Query($video);
            wp_reset_postdata(); ?>

            <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <div class="video-warp">
                <?php the_content();   ?>
            </div>

            <?php endwhile; ?>
            <?php endif; ?>

        </section>
    </div>
</div>

<!-- clients -->
<section class="clients-section">
    <?php
    $clients = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        // 'posts_per_page' => 6,
        'orderby' => 'date',
        'order'   => 'ASC',
        'cat' => 9,
    );

    $the_query = new WP_Query($clients);
    wp_reset_postdata();

    ?>

    <?php if ($the_query->have_posts()) : ?>

    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

    <hr>
    <div class="clients-warp">
        <?php the_content();   ?>
    </div>

    <?php endwhile; ?>
    <?php endif; ?>
</section>
<?php get_footer() ?>

<script>
// v. important - only check after page/DOM is ready.

console.log("checking for splide...");
var isSplideElement = document.querySelector(".splide");

if (isSplideElement != null) {
    console.log("splide is here.");
    new Splide(".splide", {
        type: "loop",
        perPage: 1,
        rewind: true,
        perMove: 1,
        focus: "center",
        easing: "cubic-bezier(.42,.65,.27,.99)",
        autoplay: true,
        interval: 30000,
        pauseOnHover: false,
        pauseOnFocus: false,
        lazyLoad: true,

        breakpoints: {
            1000: {
                perPage: 3,
            },
            668: {
                perPage: 2,
            },
        },
    }).mount();
}
</script>