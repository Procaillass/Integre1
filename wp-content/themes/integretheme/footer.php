<footer class="footer has-text-centered">
      <p>&copy 2020 - Cepegra - <?php _e("All rights reserved", "mytheme");?></p>
      <nav class="nav nav-footer">
				<?php
				// afficher menu footer 
				$args = array(
					"theme_location" => "footer",
					"menu_class" => "navbar-brand",
					'add_li_class'  => 'navbar-item',
					'before'            => " | "
				);
				wp_nav_menu($args);?>
			</nav>
			<div class="sidebars-footer">
				<div class="sidebar-footer sidebar-footer-left">
					<?php dynamic_sidebar('sidebar-footer-left');?>
				</div>
				<div class="sidebar-footer sidebat-footer-right">
					<?php dynamic_sidebar('sidebar-footer-right');?>
				</div>
			</div>
		</footer>
    </div>
	<?php wp_footer();?>
	<h2>Test SQL</h2>
                    <?php 
                    global $wpdb; // On se connecte à la base de données du site
                    
                    /*$wpdb->get_results("
                    INSERT INTO goods SET reference=5252,
                    description='dacia',
                    prix_vente=12362;
                    ");
                    $produits = $wpdb->get_results("
                    SELECT reference,
                    description,
                    prix_vente
                    FROM goods;
                    ");
                    print_r($produits);*/?>
</body>
</html>