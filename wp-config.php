<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'leticia' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'camila' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'camila' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9gR?+$J<c<QRlN&a$amJT*O]Dh<Tl8W}<Yk5+DT8vYR8pUgQB<4u({e|hL*P[cXf' );
define( 'SECURE_AUTH_KEY',  'V_VFbgONdy-:.Bm/J4Y8p&=122C;byO9)Le,v#`/|6 8E8j280iib?+n[IR<V8hj' );
define( 'LOGGED_IN_KEY',    'jleK1h{hobqAjPd=ELqf]K/-M4dm]4/^gx5FW3|Gl!DA5t/Inh.E+dLoHPNUXlJ[' );
define( 'NONCE_KEY',        'fL:YU6%K`y0(?/cRO$rY0#T2]nRDxe36Q1$=Dp6Le49)}Pw+sj>_$Gf`Dr[wVXbi' );
define( 'AUTH_SALT',        'T^k%z-iSKZ~(=qQU9BfOVkw#BP<BG0CYXq|nv9UROW`xn};6xG!^,,7TNNky)3?#' );
define( 'SECURE_AUTH_SALT', '?]h|*V S{nc!p[*f?y[>g&SoU!rtpzz!%c?Ks|v,A@EAs)6vg1/nGLN!yK?f@$nf' );
define( 'LOGGED_IN_SALT',   'B.@&B-YH#dp0S.*e}V(8g}w=!:}07yRKM:V%FXF3_0b)(^]8moC>osFuEg[_ f6*' );
define( 'NONCE_SALT',       'MOXuBdrR$/8)5}XjwoIthb3dKMcnm_B-vzW^:*^QB}PO-9%2{.xDR?7LU%f?FC])' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'tabwpbd_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
