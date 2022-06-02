<footer>

    <?php $query_images = new WP_Query( 'cat=16'); ?>

    <?php if ($query_images->have_posts()) : 
            while ($query_images->have_posts()) : $query_images->the_post();?>
    <div class="store-logo-bg"> <?php the_content()?> </div>
    <?php  endwhile;

        else:
            echo '<h3>no content found</h3>';
        endif; ?>


    <?php 
    wp_reset_postdata();
    $footInfo = new WP_Query( 'cat=38'); 
    ?>
    <?php if ($footInfo->have_posts()) : 
            while ($footInfo->have_posts()) : $footInfo->the_post();?>
    <div class="foot-info"> <?php the_content()?> </div>
    <?php  endwhile;

        else:
            echo '<h3>no content found</h3>';
        endif; ?>




</footer>
</div>
<?php wp_footer();?>

</body>

</html>