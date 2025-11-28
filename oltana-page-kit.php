<?php
/**
 * Plugin Name:       OLTANA Page Kit
 * Description:       OLTANA テーマ向けの下層ページテンプレート・セクションパターン集プラグイン。
 * Version:           0.1.0
 * Author:            OLTANA
 * Text Domain:       oltana-page-kit
 * Domain Path:       /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // 直接アクセス防止
}

/**
 * 定数定義
 */
if ( ! defined( 'OPK_VERSION' ) ) {
	define( 'OPK_VERSION', '0.1.0' );
}

if ( ! defined( 'OPK_PLUGIN_FILE' ) ) {
	define( 'OPK_PLUGIN_FILE', __FILE__ );
}

if ( ! defined( 'OPK_PLUGIN_PATH' ) ) {
	define( 'OPK_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
}

if ( ! defined( 'OPK_PLUGIN_URL' ) ) {
	define( 'OPK_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

/**
 * プラグイン初期化
 */
add_action( 'plugins_loaded', 'opk_init_plugin' );

function opk_init_plugin() {
	// 翻訳ファイル読み込み（必要なら /languages に追加）
	load_plugin_textdomain(
		'oltana-page-kit',
		false,
		dirname( plugin_basename( OPK_PLUGIN_FILE ) ) . '/languages/'
	);

	// 各種ファイルを読み込み
	require_once OPK_PLUGIN_PATH . 'includes/opk-assets.php';
	require_once OPK_PLUGIN_PATH . 'includes/opk-patterns.php';
}
