<?php
get_header();
?>

<section>

    
    <?php
    
    while(have_posts()){
        the_post();
        ?>
        <article>
            <!-- <p><?php the_date('j M'); ?></p>-->
            <a class="title-link" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
        </article>
        <?php
    }
    ?>
</section>

<?php
get_footer();
?>