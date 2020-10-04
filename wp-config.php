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
define( 'DB_NAME', 'wordpresstest' );

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
define( 'AUTH_KEY',         'q}hPw(<afT&M)dF#PI(?CFt:SfY~Jnng3$r/KUN;q*vzVgO#zUb7?NKyIk8AlX13' );
define( 'SECURE_AUTH_KEY',  '86O!mg2[ +918~0S^X)gkn&Up__r$nuO6_/>{S<jE-E}h)g7Y<}zEV[oCXQ]fLV<' );
define( 'LOGGED_IN_KEY',    'bLMOw8U/m50)AhU#NI!=e+=bFntLm82Sm!)K2]M^T>13,-L{L&:1^L+lZ&Hl%#pv' );
define( 'NONCE_KEY',        'I{~<}(&0bi1mi{C&UU#QL9FFWx]J8aWdYY)49J<H$>9VBGjq[!}bi64Qg]7Usy[a' );
define( 'AUTH_SALT',        '3)rM%Pra7HCw|U9Atf82DL}npjYYT$$R)nx%L+sL5 k`tv|ofE[A-F8%s22lcc`G' );
define( 'SECURE_AUTH_SALT', '`2?;-!Kv7?fo60|8h5L!372/KtZ)K8=#}tKF1~]_/XZEP,j?Zh1&=d_sgcbu=-Gb' );
define( 'LOGGED_IN_SALT',   '2Wd{?cY#4==Zt2@?!n)FGY0K(+24ykt_`b}Z:&yl[{RXF:DRgn*|_Q=y@[0B6Fib' );
define( 'NONCE_SALT',       'TC<o;zzT!PI:5gcic5%k@mWK#qIYjBuO.@Xn-WNUW=;!hZ:HitT[:e{h-:DlDx<#' );
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
