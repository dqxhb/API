<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'wordpress');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', '');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ZuM40<8C2@_Ak[~DRUYkZ6PVY@4T )e(G.O4&X{sCu2xQC`MF. wXxZs|v$~3a@s');
define('SECURE_AUTH_KEY',  'x.{j:[-&-sS9T7.*kmh^+8w_&Ldm6+L:h_SON!%VWPq=Y}1,N^m-m6G&5fgIA*g)');
define('LOGGED_IN_KEY',    'xM6MX[adugD//2|]!<PU ]IjAOnPm|i8*l9AZT,a-< `;u`e w*yC%qJZ|[1.Hm+');
define('NONCE_KEY',        'FbL;H|ZFiB-s3/Zm*74xMUYkGg0L]yULYaFDm?I[$qn%b]rl#Wo^j@i0HiM[XQ||');
define('AUTH_SALT',        'pf~?S{Fz60nly<-U!BKfbGu8DH@4pwgtg[o(@2-S||5Rvgzo,aq<g`~-pxmNTrX~');
define('SECURE_AUTH_SALT', 'H8F87`D~{`N?]~aVf2tWtF:,/O=ogpx V(D#rH}8*eWYA58UmDIM[HJ=N#43A8[F');
define('LOGGED_IN_SALT',   '9{^^be{8!uTILjw; zFvUq%Fn:ks^1fy[&Wxs*Wmj2(RH/b|WH-yhQ+%.LrJ^DeC');
define('NONCE_SALT',       'T2}c};9>IqY#$:gj.r/JAR`yAjnA.}q4{t5&d1:_&? #p@L  75_)Kv.h+O~?Y~F');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
