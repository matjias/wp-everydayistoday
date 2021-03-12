<?php
    
    while(have_posts()){
        the_post();
?>
<article>
            <a class="thumbnail-link" href="<?php the_permalink(); ?>">
                <div class="image-wrapper">
                    <?php the_post_thumbnail('full'); ?>
                </div>
            </a>
            <!-- <p><?php the_date('j M'); ?></p>-->
            <a class="title-link" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
        </article>
    <?php
    }
    ?>