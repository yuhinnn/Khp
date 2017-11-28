<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wp-02');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'lu%N^6)uEKSP[ct/9s(VP_[8L,1@wPT1Mk^^T<gDJ|Ldtg#`;L$#9tVqd=^S1O3g');
define('SECURE_AUTH_KEY',  '[**+tpTe?Jf2yUks>Z~B)7X1>co|bCeEgK$rZCK/en:mt3k#{UTlQV6*d ylCk><');
define('LOGGED_IN_KEY',    'xCx3apmZ%B6FQNs`R@C Qy%sP|k->99%cWh^Q`2iA^4_cBt&[lCWKbU1c8j=Lh_C');
define('NONCE_KEY',        '|23P#&t(#ov|V<n[;-~M{C&;SkHW>3A_mVsz=][c*Gq3M#h<@G5-Zwug.|,;7$k_');
define('AUTH_SALT',        'c^$,kuwGzAeZbf>bk9kA~Zqbm?7KyY_Q8>Zdz/gUJ7k`!la|!mgyISr93Sft2S@@');
define('SECURE_AUTH_SALT', 'w>}y_blHTm mty:%`{WnyFP2h;Lq4g9RT M>[KvI*xa+ag;fB_/ :0M*+ dMj0L=');
define('LOGGED_IN_SALT',   '/2&Kl2ypqI0Y.._7o:>IbV:w5NK9/Jys_}>~>cB4lOOBm{}Fi>;bO,h  -R6#`%F');
define('NONCE_SALT',       'HK=-4;.fTGd>(OB%UBGiFex~qVoC5!m/F;E`g!O{wF_D29VJG76`!7Zux{QZ Wub');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_2';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
