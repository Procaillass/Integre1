<?php get_header();?>
		<div class="contenu">
			<main>
            <section class="section has-text-centered">
                <h1>Oups vous êtes perdu ?</h1>
                <p>On peut vous aider avec ce formulaire de recherche :</p>
                <div class="has-text-centered">
                    <?php get_search_form('center');?>
                </div>
                <hr>
                <p><a class="button is-primary has-addons-centered" href="<?php bloginfo('url');?>">Rrevenez sur l'écran d'accueil ?</a></p>
            </section>
			</main>
<?php get_sidebar();?>
		</div>
		<?php get_footer();?>