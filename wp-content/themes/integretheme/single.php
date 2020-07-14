<?php get_header();?>
		<div class="contenu">
			<main>
            <?php if( have_posts() ) :?>    
            <?php while( have_posts() ) : the_post();?>
            <section <?php post_class("section");?>>
                    <?php the_title('<h2 class="title">', '</h2>');?>
                    <p class="prix"><?php echo get_post_meta(get_the_ID(), "prix", true);?> €</p>
                    <?php 
                    if( has_post_thumbnail()) :
                        the_post_thumbnail("fullscreen");
                    endif;
                    ?>
                    <?php the_content();?>
                    <?php edit_post_link( __('Edit','mytheme'),"<hr>","",'',"button is-danger");?>
             </section>
             <div class="categories">
                 <?php the_category(' | ');
                 //myPrint_r(get_the_category());?>
             </div>
             <div class="tags">
                 <?php the_tags('', ' | ');?>
             </div>
             <div class="taxominies">
                 <?php the_taxonomies('', ' | ');
                 myPrint_r(get_the_taxonomies());?>
             </div>
             <p class="terms"><?php myPrint_r(wp_get_post_terms(get_the_ID(),'post_tag')); ?></p>
             <?php endwhile;?>           
            <?php endif;?>
			</main>

		</div>
		<?php get_footer();?>