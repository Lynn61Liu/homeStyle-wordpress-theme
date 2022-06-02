<?php
$recentposts = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'orderby' => 'modified',
);

$the_query = new WP_Query($recentposts);
wp_reset_postdata();

// var_dump($the_query);
?>

<?php if ($the_query->have_posts()) : ?>
<div class='all-articles'>
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <div class="article">
        <div>
            <?php the_post_thumbnail("post-thumbs");   ?>
            <h3> <?php the_title();   ?> </h3>
            <?php the_excerpt();   ?>

        </div>
        <a href="<?php echo the_permalink() ?>">more</a>

    </div>
    <?php endwhile; ?>
</div>
<?php endif; ?>