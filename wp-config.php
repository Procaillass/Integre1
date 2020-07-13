<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'exint1' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}G#<<wL&D/M&eXE&aI}%>@S)/biuLY,EF![!Wjx2G84zWR96Tt{Z^JUXcmEf,/Rz' );
define( 'SECURE_AUTH_KEY',  '7b|69$9%{q#VZiJ|0;<*H`!eXQ.M<vf+=]/N GQ)I!jLX@9}J<vexly!QKW@MbuL' );
define( 'LOGGED_IN_KEY',    ']RiKeAPvTI.Rjf%Px1U?h*nw:C>>&Xm}Tr*#C)3d,VgkP]]*(60?*Le}PgG![=7T' );
define( 'NONCE_KEY',        '3r|j2(._e%y*a_Z+|%?Pnt<:ERlUettv-BP*Us[#&fX(J[3%/aB8K^9Xlh<$c:)Y' );
define( 'AUTH_SALT',        'Vb77cCcXpt,%0Jsc-||0ElSb)M1WO[Y(Jj{fJH K1Pg?MYf5<lGJH77$H81Z9Y7L' );
define( 'SECURE_AUTH_SALT', ';@51OPg)CN!qnKR$q05&6)uY_J%h-hB(Xr?CR,^*;n52{jH6_3Om]P,}0$h:%@h%' );
define( 'LOGGED_IN_SALT',   'pv;~OhQ5M9P^i*)5~r*6nQo(WU0Q#,c]][>spN>uf!=Jb*U0Yh]|9jJuG|RRD[;u' );
define( 'NONCE_SALT',       'G p9-m9`kR![co*jw=ya@El36,uk3tin4;gj-Rga=Pzctg,48Dp%6*bIUz4-0}GH' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
