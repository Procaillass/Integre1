            <aside class="sidebar section">
            <?php 
               dynamic_sidebar('sidebar-right');
            ?>
            <hr>
            <?php 
            $args = array(
               'post_type' => 'voyages',
               'tax_query' => array(
                   'relation' => 'AND',
                   array(
                       'taxonomy' => 'continents',
                       'field'    => 'slug',
                       'terms'    => array( 'europe' ),
                   ),
                   array(
                       'taxonomy' => 'types',
                       'field'    => 'slug',
                       'terms'    => array( 'culturel' )
                   )
               ),
              'meta_query' => array(
                     array(
                         'key'     => 'voyages-promo',
                         'value'   => array( 1 ),
                         'compare' => 'IN',
                     )
                 )
           );
           $voyages = new WP_Query( $args );
           if($voyages->have_posts()) :
            echo '<h2>Nos voyages</h2>';
            echo '<ul class="voyages-list">';
               while($voyages->have_posts()) : $voyages->the_post();?>
                  <li class="voyages-list-item">
                     <a href="<?php the_permalink();?>"><?php the_title();?> - <?php the_field('voyages-promo');?></a>
                  </li>
              <?php endwhile;
           endif;
           wp_reset_postdata();
           ?>
            </aside>
            