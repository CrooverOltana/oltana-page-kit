<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * ブロックパターンカテゴリの登録
 * ＋ patterns ディレクトリ内のファイルを読み込む
 */

// カテゴリ登録
add_action( 'init', 'opk_register_pattern_categories' );

// パターン登録（各ファイルで register_block_pattern() 実行）
add_action( 'init', 'opk_register_block_patterns', 20 );

/**
 * パターンカテゴリ登録
 */
function opk_register_pattern_categories() {
	if ( ! function_exists( 'register_block_pattern_category' ) ) {
		// 古い WP バージョン向けガード
		return;
	}

	$categories = array(
		'opk-page-pricing' => array(
			'label' => __( '料金・プラン（OLTANA）', 'oltana-page-kit' ),
		),
		'opk-page-about' => array(
			'label' => __( '会社概要（OLTANA）', 'oltana-page-kit' ),
		),
		'opk-page-service' => array(
			'label' => __( 'サービス紹介（OLTANA）', 'oltana-page-kit' ),
		),
		'opk-page-contact' => array(
			'label' => __( 'お問い合わせ（OLTANA）', 'oltana-page-kit' ),
		),
		'opk-page-faq' => array(
			'label' => __( 'FAQ（OLTANA）', 'oltana-page-kit' ),
		),
		'opk-page-works' => array(
			'label' => __( '実績・事例（OLTANA）', 'oltana-page-kit' ),
		),
		'opk-page-voice' => array(
			'label' => __( 'お客様の声（OLTANA）', 'oltana-page-kit' ),
		),
		'opk-page-access' => array(
			'label' => __( 'アクセス（OLTANA）', 'oltana-page-kit' ),
		),
		'opk-page-recruit' => array(
			'label' => __( '採用情報（OLTANA）', 'oltana-page-kit' ),
		),
		'opk-page-legal' => array(
			'label' => __( '法的ページ（OLTANA）', 'oltana-page-kit' ),
		),
		'opk-page-blog' => array(
			'label' => __( 'ブログ一覧（OLTANA）', 'oltana-page-kit' ),
		),
		'opk-section-common' => array(
			'label' => __( '共通セクション（OLTANA）', 'oltana-page-kit' ),
		),
	);

	foreach ( $categories as $slug => $settings ) {
		register_block_pattern_category( $slug, $settings );
	}
}

/**
 * パターン登録
 *
 * /includes/patterns/*.php を順番に require するだけ。
 * 各ファイル内で register_block_pattern() を呼び出すスタイルです。
 */
function opk_register_block_patterns() {
	if ( ! function_exists( 'register_block_pattern' ) ) {
		return;
	}

	$pattern_dir   = trailingslashit( OPK_PLUGIN_PATH . 'includes/patterns' );
	$pattern_files = glob( $pattern_dir . '*.php' );

	if ( empty( $pattern_files ) ) {
		return;
	}

	foreach ( $pattern_files as $file ) {
		require $file;
	}
}
