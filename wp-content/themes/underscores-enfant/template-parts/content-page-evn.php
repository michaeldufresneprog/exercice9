<section class="container">
<h1>Nos événements important cette année</h1>
        <div>
        <?php
        $query = new WP_Query( array( 'category_name' => "evenement",
        'date_query' => array(
            'column' => 'post_date',
            'after' => '2019-09-01',
            'before' => '2019-11-31' 
          ),));
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
					$query->the_post();
					?><div class = "structure-evenement">
                        <div>
                        <?php
                            echo '<p><a href="'.get_permalink( $id ).'">' . get_the_title() .  '</a></p>';
                            echo "<p>" . get_the_date() . "</p>";
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