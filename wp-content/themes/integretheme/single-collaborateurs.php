<?php get_header();?>
		<div class="contenu">
			<main>
            <?php if( have_posts() ) :?>    
            <?php while( have_posts() ) : the_post();?>
            <section <?php post_class("section");?>>
            <?php //myPrint_r(get_fields());?>
            <div class="card">
                <?php if(get_field('identite-photo')):
                    $image= get_field('identite-photo');?>
                <div class="card-image">
                    <figure class="image is-4by3">
                    <img src="<?php echo $image['sizes']['1536x1536'];?>" alt="<?php echo $image['alt'];?>">
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
                        <p class="title is-4"><?php echo ucfirst(get_field('identite-prenom'));?> <?php echo ucfirst(get_field('identite-nom'));?></p>
                        <p class="subtitle is-6"><?php the_field('identite-email');?></p>
                    </div>
                    </div>

                    <div class="content">
                    <?php the_field('identite-presentation');?>
                    <h3>Adresse :</h3>
                    <?php echo ucfirst(get_field('identite-adresse'));?> - <?php the_field('identite-code_postal');?> <?php the_field('identite-ville');?>
                    <hr>
                    Entreprise :  <a><?php echo ucfirst(get_field('entreprise-nom'));?></a> <?php echo (get_field('entreprise-commission_paritaire')) ? " | CP-".get_field('entreprise-commission_paritaire') : "";?><br>
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