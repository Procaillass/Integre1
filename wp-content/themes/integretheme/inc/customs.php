<?php
function cptui_register_my_cpts() {
### CUSTOM POSTS
/**
 * Post Type: Collaborateurs.
 */

$labels = [
    "name" => __( "Collaborateurs", "mytheme" ),
    "singular_name" => __( "Collaborateur", "mytheme" ),
    "menu_name" => __( "Mes Collaborateurs", "mytheme" ),
    "all_items" => __( "Tous les Collaborateurs", "mytheme" ),
    "add_new" => __( "Ajouter un nouveau", "mytheme" ),
    "add_new_item" => __( "Ajouter un nouveau Collaborateur", "mytheme" ),
    "edit_item" => __( "Modifier Collaborateur", "mytheme" ),
    "new_item" => __( "Nouveau Collaborateur", "mytheme" ),
    "view_item" => __( "Voir Collaborateur", "mytheme" ),
    "view_items" => __( "Voir Collaborateurs", "mytheme" ),
    "search_items" => __( "Recherche de Collaborateurs", "mytheme" ),
    "not_found" => __( "Aucun Collaborateurs trouvé", "mytheme" ),
    "not_found_in_trash" => __( "Aucun Collaborateurs trouvé dans la corbeille", "mytheme" ),
    "parent" => __( "Parent Collaborateur :", "mytheme" ),
    "featured_image" => __( "Image mise en avant pour ce Collaborateur", "mytheme" ),
    "set_featured_image" => __( "Définir l’image mise en avant pour ce Collaborateur", "mytheme" ),
    "remove_featured_image" => __( "Retirer l’image mise en avant pour ce Collaborateur", "mytheme" ),
    "use_featured_image" => __( "Utiliser comme image mise en avant pour ce Collaborateur", "mytheme" ),
    "archives" => __( "Archives de Collaborateur", "mytheme" ),
    "insert_into_item" => __( "Insérer dans Collaborateur", "mytheme" ),
    "uploaded_to_this_item" => __( "Téléverser sur ce Collaborateur", "mytheme" ),
    "filter_items_list" => __( "Filtrer la liste de Collaborateurs", "mytheme" ),
    "items_list_navigation" => __( "Navigation de liste de Collaborateurs", "mytheme" ),
    "items_list" => __( "Liste de Collaborateurs", "mytheme" ),
    "attributes" => __( "Attributs de Collaborateurs", "mytheme" ),
    "name_admin_bar" => __( "Collaborateur", "mytheme" ),
    "item_published" => __( "Collaborateur publié", "mytheme" ),
    "item_published_privately" => __( "Collaborateur publié en privé.", "mytheme" ),
    "item_reverted_to_draft" => __( "Collaborateur repassés en brouillon.", "mytheme" ),
    "item_scheduled" => __( "Collaborateur planifié", "mytheme" ),
    "item_updated" => __( "Collaborateur mis à jour.", "mytheme" ),
    "parent_item_colon" => __( "Parent Collaborateur :", "mytheme" ),
];

$args = [
    "label" => __( "Collaborateurs", "mytheme" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => [ "slug" => "collaborateurs", "with_front" => true ],
    "query_var" => true,
    "menu_position" => 15,
    "menu_icon" => "dashicons-admin-users",
    "supports" => [ "title", "thumbnail", "excerpt", "revisions" ],
];

register_post_type( "collaborateurs", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


## CUSTOMS TAXONOMIES
function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Secteurs.
	 */

	$labels = [
		"name" => __( "Secteurs", "mytheme" ),
		"singular_name" => __( "Secteur", "mytheme" ),
		"menu_name" => __( "Secteurs", "mytheme" ),
		"all_items" => __( "Tous les Secteurs", "mytheme" ),
		"edit_item" => __( "Modifier Secteur", "mytheme" ),
		"view_item" => __( "Voir Secteur", "mytheme" ),
		"update_item" => __( "Mettre à jour le nom de Secteur", "mytheme" ),
		"add_new_item" => __( "Ajouter un nouveau Secteur", "mytheme" ),
		"new_item_name" => __( "Nom du nouveau Secteur", "mytheme" ),
		"parent_item" => __( "Parent dSecteur", "mytheme" ),
		"parent_item_colon" => __( "Parent Secteur :", "mytheme" ),
		"search_items" => __( "Recherche de Secteurs", "mytheme" ),
		"popular_items" => __( "Secteurs populaires", "mytheme" ),
		"separate_items_with_commas" => __( "Séparer les Secteurs avec des virgules", "mytheme" ),
		"add_or_remove_items" => __( "Ajouter ou supprimer des Secteurs", "mytheme" ),
		"choose_from_most_used" => __( "Choisir parmi les Secteurs les plus utilisés", "mytheme" ),
		"not_found" => __( "Aucun Secteurs trouvé", "mytheme" ),
		"no_terms" => __( "Aucun Secteurs", "mytheme" ),
		"items_list_navigation" => __( "Navigation de liste de Secteurs", "mytheme" ),
		"items_list" => __( "Liste de Secteurs", "mytheme" ),
	];

	$args = [
		"label" => __( "Secteurs", "mytheme" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'secteurs', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "secteurs",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		];
	register_taxonomy( "secteurs", [ "collaborateurs" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
?>