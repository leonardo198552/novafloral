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
define( 'DB_NAME', 'novafloral' );

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
define( 'AUTH_KEY',         'R&+){0TSPMOlHfT?lkVV>HE9nEBP}2)%}]Wd4+@%]P~xSy9_!_xOv3ZDRlG3NX+%' );
define( 'SECURE_AUTH_KEY',  '*0abVFVeCUF4fiI.1oJ}@>{f+;:MK`)6|0DCJD^xLj~y=_<SNg`gENeN<xNEnGlj' );
define( 'LOGGED_IN_KEY',    '%h{.@Dd#Uj7jYKPA98ZGu_Ti}MZ<1|2QQvR: gRgWm8`Hzq0iS50&EnaJLtFG:_X' );
define( 'NONCE_KEY',        'Ip7lRKJ_V4d)CS.KX^UCUjV,r%I3eb$uh84p5 !fPH]b=5?[+ma# NC.79I/!s+i' );
define( 'AUTH_SALT',        ':NS:V0[=y;^Xv)#91EluSN_v}p%Gg9w/{4ji]iU%RvR/zxho^Q{=0F@z!rV.okNn' );
define( 'SECURE_AUTH_SALT', 'N.FO}Y0N^;.C~{$>l8/,d1qy3OqF(xU}qo7d]mq]-yWgVY-L%{;<p;^d+[i(HgF{' );
define( 'LOGGED_IN_SALT',   ')c<=[em^P?ySk~P-+Dm/8{0$9TEKkHdA)W;,lvw/O%!;r]@Ya6H@Iic8kKhi#65y' );
define( 'NONCE_SALT',       ',vgQY1dO|>Cr.lOn//Rw{jIYgFYuGPPbu,4JU$LC4xE4&A`IbI[;WLk-bb.`)UIc' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
