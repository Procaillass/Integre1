<?php get_header();?>
		<div class="contenu">
			<main>
            <?php if( have_posts() ) :?>    
            <?php while( have_posts() ) : the_post();?>
            <section <?php post_class("section");?>>
            <?php myPrint_r(get_fields());?>
            <div class="card">
                <?php if(get_field('voyages-en_image')):
                    $image= get_field('voyages-en_image');?>
                <div class="card-image">
                    <figure class="image is-4by3">
                    <img src="<?php echo $image['sizes']['large'];?>" alt="<?php echo $image['alt'];?>">
                    <figcaption><?php echo $image['caption'];?></figcaption>  
                    </figure>
                </div>
                <?php endif;?>
                <div class="card-content">
                    <?php if( has_post_thumbnail() ) :?>
                    <div class="media">
                    <div class="media-left">
                        <figure class="image is-48x48">
                        <?php the_post_thumbnail("thumbnail");?>
                        </figure>
                    </div>
                    <?php endif;?>
                    <div class="media-content">
                        <p class="title is-4"><?php the_title();?></p>
                        <p class="subtitle is-6"><?php 
                        if(get_field('voyages-promo')):
                            the_field('voyages-prix_promo');?> €
                            - <strike><?php  the_field('voyages-prix'); ?> €</strike></p>
                        <?php else :
                            the_field('voyages-prix'); ?> €
                        <?php endif;?>
                    </div>
                    </div>

                    <div class="content">
                    <h3>Organisation : <?php the_field("organisation");?></h3>
                    <?php if(get_field("organisation") == 'circuit') :?>
                        <ul class="etapes">
                            <?php foreach(get_field('voyages-circuit') as $etape) :?>
                                <li class="etapes-item">
                                    <h2 class= "title etape-item-title"><?php echo $etape</h2>
                            </li>
                            <?php endforeach;?>
                    <?php endif;?>
                     <?php //the_taxonomies('competences', ' | ');
                     $competences = get_the_terms(get_the_ID(),'competences');?>
                    <?php foreach($competences as $value) :?>
                        <a href="<?php bloginfo('url')?>/<?php echo $value->taxonomy;?>/<?php echo $value->slug;?>">#<?php echo $value->name;?></a>&nbsp;
                    <?php endforeach;?>
                    <hr>
                    Toutes les compétences : get_terms('slug_tax')
                    <hr>
                    <br>
                    Inscrit le : <time datetime="<?php the_time('Y-m-d');?>"><?php the_time('d/m/Y');?></time> par : <?php the_author();?>
                    </div>
                </div>
            </div>
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