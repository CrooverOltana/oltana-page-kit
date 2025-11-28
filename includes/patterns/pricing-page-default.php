<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * 汎用：料金ページ A（ドラフト）
 *
 * - スラッグ    : opk/pricing-page-default
 * - カテゴリ    : opk-page-pricing
 * - HTML 部分はあとで編集してください。
 * - h1〜h6 は使わず、p + role="heading" で見出し表現しています。
 */

register_block_pattern(
	'opk/pricing-page-default',
	array(
		'title'       => __( '[汎用] 料金ページA（3プラン）', 'oltana-page-kit' ),
		'categories'  => array( 'opk-page-pricing' ),
		'description' => __( '3つの料金プラン＋FAQ＋CTAで構成された汎用料金ページレイアウト（ドラフト）。', 'oltana-page-kit' ),
		'content'     => <<<'OPK'
<!-- wp:group {"className":"opk-pricing-page"} -->
<div class="wp-block-group opk-pricing-page">

	<!-- wp:group {"className":"opk-section opk-pricing-hero"} -->
	<div class="wp-block-group opk-section opk-pricing-hero">
		<!-- wp:paragraph {"className":"opk-section-title","fontSize":"large"} -->
		<p class="opk-section-title" role="heading" aria-level="2">料金プラン</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>ここに料金ページのリードコピーが入ります。サービスの特徴や料金体系の概要を簡潔に説明してください。</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"opk-section opk-pricing-plans"} -->
	<div class="wp-block-group opk-section opk-pricing-plans">
		<!--
		ここに 2〜3 カラムのプランカードなどを追加してください。
		例：Columns ブロック＋各 Column 内にプラン名／価格／特徴リスト／ボタン など。
		-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"opk-section opk-pricing-faq"} -->
	<div class="wp-block-group opk-section opk-pricing-faq">
		<!--
		FAQ セクション用の Group。
		List ブロックや Group を組み合わせて質問＆回答を配置してください。
		-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"opk-section opk-pricing-cta"} -->
	<div class="wp-block-group opk-section opk-pricing-cta">
		<!--
		CTA セクション。Paragraph + Buttons ブロックで
		「お問い合わせはこちら」などの誘導を作ってください。
		-->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
OPK
	)
);
