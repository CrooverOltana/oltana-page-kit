<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * フロント・エディタ共通のアセット読み込み
 */

// フロント＆エディタ両方で読み込まれるフック
add_action( 'enqueue_block_assets', 'opk_enqueue_frontend_assets' );

// ブロックエディタ専用のフック
add_action( 'enqueue_block_editor_assets', 'opk_enqueue_editor_assets' );

/**
 * フロント側スタイル
 */
function opk_enqueue_frontend_assets() {
	wp_enqueue_style(
		'opk-frontend-style',
		OPK_PLUGIN_URL . 'assets/css/frontend.css',
		array(),
		OPK_VERSION
	);
}

/**
 * エディタ用スタイル
 */
function opk_enqueue_editor_assets() {
	wp_enqueue_style(
		'opk-editor-style',
		OPK_PLUGIN_URL . 'assets/css/editor.css',
		array( 'wp-edit-blocks' ),
		OPK_VERSION
	);
}
