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
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '|p8aKm{QN=Am^WCBv_l#C~{+n5Z6=i7CYN t+UK&oJf{M?fz^kpru1T88ll-H?wL' );
define( 'SECURE_AUTH_KEY',  '!f1p&^VLj}s8*!^4*dfwx[,}*HA3^!Cv-@S Y)h7G)~v.jc_.- S2W>U?jG&D8-o' );
define( 'LOGGED_IN_KEY',    'e`#Ve]yq5tFIHH.)`FukF~a0^{nesM>5uR$eNt|^RKbTCFr[oeTWwZH5p7c?1PSB' );
define( 'NONCE_KEY',        'D8;3U[y`;]ON%oio-8?!ilDryN9&#|cjTxKBhUi4*wgr}&zTd2NUCP]d(^Z!BeBS' );
define( 'AUTH_SALT',        'lphzzr*tYSx<X:AtGoC~e{J)y?s!,>u=U/g81X_AZT#CJx7.C/8l~lj([C!f3$L-' );
define( 'SECURE_AUTH_SALT', '&k5u<(>?sjC;P@-YR[M`XW3N7SA-Fx]Y_a * 4K5p]1FVsGkDGAYA:68vfMlIRmY' );
define( 'LOGGED_IN_SALT',   'Cs+-x2H,<N-?@Fj_qCIJ2w%;vr=$bzKqG/LwpQJsI3Ydvxy;4l;4o,]dz/B:)qiZ' );
define( 'NONCE_SALT',       'Gp_-{h|K^ZocZcSZFX1O6vn,,y;mJi`V(7G7-A1rdO#1&{D*+.C/1K~(_|*J40%u' );
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
