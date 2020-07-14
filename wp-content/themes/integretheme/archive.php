<?php get_header();?>
		<div class="contenu">
			<main>
            <section class="section">
                <h1><?php echo get_the_archive_title();?></h1>
                <h1><?php single_term_title("Nos ");?></h1>
            <?php if( have_posts() ) :?>
                <p>Il y a <?php echo aff_nb_posts();?> résultats.</p>
                <?php //myPrint_r($wp_query);?>
            <ul class="list-group">
                <?php while( have_posts() ) : the_post();?>
                <li <?php post_class('list-group-item');?>>
                       <?php 
                        if( has_post_thumbnail()) :
                            $args = array(
                                'class' => 'vignettes',
                                'title' => get_the_title()
                            );
                            the_post_thumbnail("thumbnail", $args);
                        endif;
                        ?> <?php the_title('<h2 class="title">', '</h2>');?>
                        
                        <?php the_excerpt();?>
                        <p class="read-more"><a href="<?php the_permalink();?>" class="button is-info">Lire la suite</a>
                    </li>
                <?php endwhile;?>   
                    </ul>        
            <?php endif;?>
            </section>
            </main>
<?php get_sidebar();?>
		</div>
		<?php get_footer();?>