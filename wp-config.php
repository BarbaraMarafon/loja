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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'loja');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

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
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}H:9{F51pd2vG,4%G4A:&p|@flbkx4_TB1TWjf1IF N$3Gg:Kyb +Nv7Z*(_qx4:');
define('SECURE_AUTH_KEY',  '4~i.^&Y&Fb-RA7sl/rG/2`6h%ojwzZUC8m|DSWM*@)dzC0>GL}/S2=4xH~b#_SB?');
define('LOGGED_IN_KEY',    '/F3l#BlI[kI~)Gh9_kCspTJe7ebj6`1?2z6>DYBvM^ M5ixI1zfhA5@WT<6m? &L');
define('NONCE_KEY',        'o~,TT4oa;hB!@:,#c/_j&8@anAFY}7tv659S3;@62Or.n`2&V*1&(+VpurIT>@hi');
define('AUTH_SALT',        'TIp+:jjb/mQo!:0Dch?#e%>y?LedsZyNtQX9=5fxNr=$KZ13[IL|)_PK3%]D3+lO');
define('SECURE_AUTH_SALT', '(U.Ub-XX5G.|]#vBm/U$0q0;aiW:TTbn9KniUzEpMIj6$gFMBtqw5I5kPek:tJ/H');
define('LOGGED_IN_SALT',   'P}7Vr>?qh]@2l|3FXFxHeS/T=]3idPB5zPo;&Pq=]*it]S4u6|c/lIDT_fwVd[<<');
define('NONCE_SALT',       '={CGV`<%!<1xA #Q?.c@S7-^rhKPGIF9naW05j-mB!1P;Rk$-1YE3rQC+g]R.- y');

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
