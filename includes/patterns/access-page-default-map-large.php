<?php
/**
 * アクセスページ – 地図大きめレイアウト（サービス店舗向け）
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

register_block_pattern(
	'opk-page-access/map-large',
	array(
		'title'       => __( 'アクセスページ（地図メイン）', 'oltana-page-kit' ),
		'description' => __( '店舗・サロン・スクールなど向けの、地図を大きく配置したアクセスページ。', 'oltana-page-kit' ),
		'categories'  => array( 'opk-page-access' ),
		'content'     => '
<!-- wp:group {"tagName":"section","className":"opk-access map-large"} -->
<section class="opk-access map-large">

	<!-- ① 地図を大きく表示 -->
	<!-- wp:group {"className":"opk-access-map-large"} -->
	<div class="opk-access-map-large">
		<!-- wp:html -->
		<div class="map-embed">
			<iframe 
				src="https://www.google.com/maps/embed?pb=!1m18!...省略..."
				width="100%" 
				height="450" 
				style="border:0;" 
				allowfullscreen="" 
				loading="lazy">
			</iframe>
		</div>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->

	<!-- ② 基本情報 -->
	<!-- wp:group {"className":"opk-access-info","layout":{"type":"constrained"}} -->
	<div class="opk-access-info">

		<!-- wp:heading {"level":2} -->
		<h2>Access / アクセス</h2>
		<!-- /wp:heading -->

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
		<p><strong>駐車場：</strong>近隣にコインパーキングあり</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- ③ ルート案内 -->
	<!-- wp:group {"className":"opk-access-route"} -->
	<div class="opk-access-route">

		<!-- wp:heading {"level":3} -->
		<h3>最寄り駅からのアクセス</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>JR〇〇駅 東口を出て直進し、二つ目の信号を左折。〇〇ビルを右手に見ながら直進すると到着します。</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":3} -->
		<h3>お車でお越しの方</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>〇〇通りを直進し、〇〇交差点を右折。近隣にコインパーキングが複数ございます。</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- ④ CTA -->
	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"is-style-fill"} -->
		<div class="wp-block-button is-style-fill">
			<a class="wp-block-button__link" href="/contact/">お問い合わせはこちら</a>
		</div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</section>
<!-- /wp:group -->
		',
	)
);
