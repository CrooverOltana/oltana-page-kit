<?php
/**
 * アクセスページ – デフォルトパターン
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

register_block_pattern(
	'opk-page-access/default',
	array(
		'title'       => __( 'アクセスページ（デフォルト）', 'oltana-page-kit' ),
		'description' => __( '会社住所・マップ・基本案内をまとめたアクセスページの標準構成です。', 'oltana-page-kit' ),
		'categories'  => array( 'opk-page-access' ),
		'content'     => '
<!-- wp:group {"tagName":"section"} -->
<section class="opk-access">
	<!-- wp:heading {"level":2} -->
	<h2>Access / アクセス</h2>
	<!-- /wp:heading -->

	<!-- wp:group -->
	<div class="opk-access-info">
		<!-- wp:paragraph -->
		<p><strong>住所：</strong>東京都〇〇区〇〇 1-2-3</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><strong>電話番号：</strong>012-345-6789</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><strong>営業時間：</strong>10:00〜18:00（定休日：水曜日）</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><strong>アクセス：</strong>JR〇〇駅より徒歩5分・駐車場あり</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"opk-access-map"} -->
	<div class="opk-access-map">
		<!-- wp:html -->
		<div class="map-embed">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!...省略..." width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group -->
	<div class="opk-access-route">
		<!-- wp:heading {"level":3} -->
		<h3>最寄り駅からのアクセス</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>JR〇〇駅 東口を出て直進し、二つ目の信号を左折。右手に〇〇ビルが見えます。</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":3} -->
		<h3>お車でお越しの方</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>〇〇通り沿い、近隣にコインパーキングあり。専用駐車場も2台分ございます。</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"is-style-fill"} -->
		<div class="wp-block-button is-style-fill"><a class="wp-block-button__link" href="/contact/">お問い合わせはこちら</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
		',
	)
);
