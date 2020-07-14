<?php
//debug
function myPrint_r($data) {
    if (WP_DEBUG) :
    echo '<pre>';
        print_r($data);
    echo '</pre>';
    endif;
}

// affiche le nombre d'enregistrement
function aff_nb_posts() {
    global $wp_query;
    return $wp_query->post_count;
}?>