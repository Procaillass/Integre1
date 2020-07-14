<?php get_header();?>
		<div class="contenu">
			<main>
            <?php if( have_posts() ) :?>    
            <?php while( have_posts() ) : the_post();?>
            <section <?php post_class("section");?>>
            <?php myPrint_r(get_fields());?>
            <?php $etapes = get_field('voyages2-circuit');
            echo $etapes["voyages2-etape1"]["voyages2-etape1_"];?>
        <?php edit_post_link( __('Edit','mytheme'),"<hr>","",'',"button is-danger");?>
            </section>
        <div class="taxominies">
            <?php the_taxonomies('', ' | ');
            myPrint_r(get_the_taxonomies());?>
        </div>
        <p class="terms"><?php myPrint_r(wp_get_post_terms(get_the_ID(),'secteurs')); ?></p>
        <?php endwhile;?>           
    <?php endif;?>
    </main>

		</div>
		<?php get_footer();?>