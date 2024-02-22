<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'cecref' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'j`8r`3DV*4Z0[)3NJzj2gAzqU=<ki2b##Z]hncN7*;)KAOBJo){:X}lRP]b Pp% ' );
define( 'SECURE_AUTH_KEY',  'b;1H<1L^0D*Q|mh{ 6]$pti$n}Bk%Z@-x/Dpd(KFWtgEe/tC[V?ulf<TNh(b>C6V' );
define( 'LOGGED_IN_KEY',    'm+rehP6tr,X/,uKe$R)I`p*_F!>)hH#a*i~WoON.-Ca:Zh)Su Vc_J5/HsA70PXr' );
define( 'NONCE_KEY',        '=hW?`nk:[fS%3&/$qV2cJ#%W@R=t*t3.LrF26}[jZU9(=/;NwswQL/(WB7-)1=T/' );
define( 'AUTH_SALT',        ';Ie*4~2XJ^|)QA<W$4~}->nE7c{TFZUYMCJiQX?x`<j)1eJ`Sw?%34~3xDCf/*f;' );
define( 'SECURE_AUTH_SALT', 'o]d*dvI,EfNf3pF1{t9?U0Ja,9nmm>.3J]S4m8i) qAX}R4NGO2|0uyLLBi-yh_b' );
define( 'LOGGED_IN_SALT',   'RA@<`t+O&?2ot?t]vab.gXPBbxEbq$to5rsBIfU5P]T@r*7g47G;(Jr.I_{tEl`:' );
define( 'NONCE_SALT',       's>pbm0!)(ko]^jUu3Hqb)i]>FF(]HU|`FA$@bcz_;g3>9c});TJ@JsZWm_[oR7wO' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'cf_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
