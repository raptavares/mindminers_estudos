<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'mindminers_site_v3');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'mindminers_site_v3');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'meseems123');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';j`N!WdP[2gF,A@.b[C=je8_7E.aS>In^:_XbY@K$.tk,~^EF|a)uEoML8o`zTe%');
define('SECURE_AUTH_KEY',  'rnBR_9,(f5enogQQP`xO YKF>.)qejjE+e-5xqlb`dEuwpZ3}R~HI&J]0*0fJ<!r');
define('LOGGED_IN_KEY',    'X+G:G@)0/2 EXxv31,^cg|Jz&G`RNvN+B<3m$5!m5D`8Eou%Y$uh=Lz1gkf`%W/y');
define('NONCE_KEY',        '!2)-&;WN[g9bn=_M4.V&!(%hFhqKiW{2~3yUMq!#o&8L;Oz776lp=B:9H<9OPQG6');
define('AUTH_SALT',        'o-AP4d iS`B#+xM/x3oVvvwBGuI[sA9F08,*^(I~.$4uA gUj].2]bi~-%m(S)zk');
define('SECURE_AUTH_SALT', 'E81#mM?*Fz}}~R3<S!3jLlII#zC|TcSl&%mohwWhz`JOY$e!Bn#|~BHIiFQs&L_~');
define('LOGGED_IN_SALT',   '`e!,}^`a4[R$18.oXl 0]v+WN}JvsJ+N_epwEf^5DX_=`D_@`Cq>ypz.fIC0hb/}');
define('NONCE_SALT',       'gyNg75HeT1%Hm/ULS^}H<K/&t8}mvcAmB/4s4[6=TQ&J[H3t%V#s`bT1XgtLe{uN');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
