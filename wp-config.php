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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'leonardo_wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '.PdH:{u+-)$ba+:21,|V0)BAl2D-ec)In%+$g7lFM#FphT0bwLw-|mN%$}2xHGN#' );
define( 'SECURE_AUTH_KEY',  'I?71GTGavSNJLkyI}b<$oa?10`Q8$ds8Ct%8xL~^2jJW5;?;WS31@>mp#}G?Ch`J' );
define( 'LOGGED_IN_KEY',    'oL>nv{H%Up-|1vk(V$gC)9sI]R&Z*]b&u{)N%Uki%+Fp}UQT2X,A@=b/<<0FnpU*' );
define( 'NONCE_KEY',        'SrX-~lQMPXOe5f1[Jr$W0{A3qw$YiFzxw-&KUY)0A7&$yN9GSn/_@a=0:AxLNDks' );
define( 'AUTH_SALT',        '}E$?>@>QAuq4#lM<-]N[{^gZ+EYS;*T8`GgXV?H<h<EQIp7;b?=m`Xl&#F>K-oZr' );
define( 'SECURE_AUTH_SALT', '{%IAYsryjTY!IaByfcq,7MImBu:S>Uc^=Wur1OH}(cL+j;,DT4x!p@ JK$UE3[YY' );
define( 'LOGGED_IN_SALT',   'Xh5HFZSePuAug?|rwaOGeV,nz$tfHSXb*ggf9[11V2&SqpDG;icidmA~>E#khsAU' );
define( 'NONCE_SALT',       'ng,+RxJ`6qf7D8H%bw^8j6h#!~?HHs6fF:Nex%$x CZ:[`026C6tnu%.f?3kzAp(' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'leonardo_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
