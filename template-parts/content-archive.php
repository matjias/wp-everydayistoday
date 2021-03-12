<section>

<?php
    $recent_posts = wp_get_recent_posts();
    $current_month = "";
    foreach( $recent_posts as $recent ){
        $postdate = date("F", strtotime($recent['post_date']) );
        if ($postdate != $current_month){
            ?> <div class='listmonth-wrapper'><p class="list-month"><?php echo $postdate?></p> </div><?php
            $current_month = $postdate;
        }
?>
        
        <a class="title-link" href="<?php echo get_permalink($recent['ID']); ?>"><h3><?php echo $recent["post_title"] ?></h3></a>
<?php
    }
?>
</section>