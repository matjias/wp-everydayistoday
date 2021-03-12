<?php
    
    if(have_posts()){
        the_post();
?>
<h2 class="post-title"><?php the_title(); ?></h2>
<h4 class="author">By <a class="author-link" href="https://sixped.dk"><?php the_author(); ?></a></h4>

<?php
the_content();

}
?>