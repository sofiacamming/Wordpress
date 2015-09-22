<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'projekt');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', '');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hr&ar/g+i$Gs|ey9.5N{Y87qnIiGY~*-*x>+o4H37R(PDX`0ywXR9A{h_kc7Y0gs');
define('SECURE_AUTH_KEY',  '6JK>C;V//gwH& T~9d,SFw|fn3i]H-|3cF00s1s&RYYqqU*#I?|=P[9?Cy)n&XmS');
define('LOGGED_IN_KEY',    'p3-_hsi/&P}>Loj?QUB7PBVL$SNxDWfl@2s7Bl(6.vsee<RK)M+?jUTupr[gKGb8');
define('NONCE_KEY',        'JGV(U+n^K6#mAg$xt6?$EwjZfnIYD.luR5x(vsE/c1~vuJ(fGOD/v),]56^*Bf7,');
define('AUTH_SALT',        'DuP({bS?9n`V8$sTg[iNN^K#%U@sZ|2)6hj@D @p;:?o$gkuC.-Pk+:!%-Bms9~Z');
define('SECURE_AUTH_SALT', '0.3!9BtyYnf$Og:ct+)Xzc#+I_l`Z[d+Q :WlBdiF{s~6&zk@krt95n{6agIDno5');
define('LOGGED_IN_SALT',   'MwSevv&<u(D^>a}x|^kw/,?K3{oEKdw|jZ>LP$9/4dNN+mH-~Isni}>H#v_@]:BV');
define('NONCE_SALT',       'A/04^9<IAKc+lCU|8u2f/~kcQJ`4<7lDtNC2VbJ57dTC,M3LPv+-ie+(lT3g2:$-');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', true);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');