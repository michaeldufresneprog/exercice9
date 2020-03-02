<section class="container">
<h1>Voici les dernières nouvelles</h1>
        <div>
        <?php
        $query = new WP_Query( array( 'category_name' => "nouvellle",
        'posts_per_page' => 4));
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
					$query->the_post();
					?><div class = "structure-nouvelle">
                        <?php
                        //echo '<p>' . the_excerpt() . '</p>';
                        the_post_thumbnail("thumbnail");
                        ?>
                        <div>
                        <?php
                            echo '<h1><a href="'.get_permalink( $id ).'">' . get_the_title() .  '</a></h1>';
                            //echo '<a href="'.get_permalink( $id ).'">' . get_the_date() . '</a>';
                        ?>
                        </div>
					</div>
					<?php
                }
        } 
        else {
            echo "no found";
        }
        wp_reset_postdata();
        ?>
</section>
<?php get_footer(); ?>