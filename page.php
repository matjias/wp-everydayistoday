<?php
get_header();
?>


    <?php
    
    if (is_page('writings')) {
        get_template_part('template-parts/content', 'archive');
    } else if(is_page('photography')) {
        get_template_part('template-parts/content', 'photography');

    } else {    
        if(have_posts()){
            the_post();
            ?>
            <section>
                <h2 class="page-title"> <?php the_title(); ?> </h2>

                <?php

                the_content();
                ?>

                </section>
            <?php
        }
    }
    ?>

<?php
get_footer();
?>