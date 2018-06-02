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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'xpe');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'xpe');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'xpe');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost:3306');

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
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'I6NoN~-4L(@^d9v2- iW!7n/Xqq<^Q%yp8(V.Bqwk (dyc=yO^.KY!>eGm?HuP=x');
define('SECURE_AUTH_KEY',  'AsVV(jHuy`Yv,Z@TVj#Pa6s4:}YC(lQ>)O7`bHPF[qg*KE@Sr9~l%QQ7[%fZ2){w');
define('LOGGED_IN_KEY',    'KP`a`%p9nx4#Kl-nQozF[D4h,/k$Fs{}(</]23*<`h0@BC!&;8ag51XI&>^*/P* ');
define('NONCE_KEY',        'x BJ&M`NNAu?prk[iFwEO$f1CsPE|CzPkfdIV]g-fB>,6z!?0@XdSQQkO`]4`c*&');
define('AUTH_SALT',        'OqyCH?>*9@@8Z!yK>lr^=Bj=pnB7,DIgXqm)OQf9!nB:(G;Qz#$*k5{K/_PMbVB(');
define('SECURE_AUTH_SALT', '2HWI9La3#s& C7S.L}hMMmhcB(Ni`aAIsIHujhj!]0 XKhX/?ur-Ax9$/NSg+-Q5');
define('LOGGED_IN_SALT',   'iU01t6D:)zZlNseA[GU=7zBySL;SYC]^&XN+0bUrV,zIV{ODc9^O&P~U1<#s4c_!');
define('NONCE_SALT',       '$NvLBgxcG$i9F9+-TD?]NR<E)b-^qLozm:3|v=@VmALsks|{K.6kI3<|skZmp!8N');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
