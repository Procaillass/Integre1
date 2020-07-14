<?php 
/*
Template Name: pas de sidebar
*/
get_header();?>
		<div class="contenu">
			<main>
            <?php if( have_posts() ) :?>    
            <?php while( have_posts() ) : the_post();?>
            <section <?php post_class("section");?>>
                    <?php the_title('<h2 class="title">', '</h2>');?>
                    <?php 
                    if( has_post_thumbnail()) :
                        the_post_thumbnail("fullscreen");
                    endif;
                    ?>
                    <?php the_content();?>
                    <?php edit_post_link( __('Edit','mytheme'),"<hr>","",'',"button is-danger");?>
             </section>
             <?php endwhile;?>           
            <?php endif;?>
			</main>
<?php //get_sidebar();?>
		</div>
		<?php get_footer();?>