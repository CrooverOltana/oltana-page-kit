<?php
/**
 * アクセスページ（汎用）パターン
 */

register_block_pattern(
    'opk/access-page-default',
    array(
        'title'      => '[汎用] アクセスページ（所在地＋地図）',
        'categories' => array( 'opk-page-access' ),
        'content'    => trim('
<!-- wp:group {"className":"opk-access-page opk-section"} -->
<div class="wp-block-group opk-access-page opk-section">

    <!-- セクション1：ページタイトル -->
    <!-- wp:group {"className":"opk-access-header"} -->
    <div class="wp-block-group opk-access-header">
        <!-- wp:paragraph {"className":"opk-section-title"} -->
        <p class="opk-section-title" role="heading" aria-level="2">アクセス</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p>〇〇株式会社（御社名）の所在地・アクセス方法をご案内します。ご来社の際は、こちらの情報をご確認ください。</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- セクション2：所在地・連絡先情報 -->
    <!-- wp:group {"className":"opk-access-info"} -->
    <div class="wp-block-group opk-access-info">

        <!-- wp:paragraph {"className":"opk-block-title"} -->
        <p class="opk-block-title" role="heading" aria-level="3">所在地</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p>〒000-0000　都道府県市区町村〇〇〇-0-0<br>〇〇ビル 3F（御社所在地に書き換えてください）</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"className":"opk-block-title"} -->
        <p class="opk-block-title" role="heading" aria-level="3">連絡先</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p>TEL：00-0000-0000（御社電話番号）<br>FAX：00-0000-0000（不要な場合は削除してください）</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p>営業時間：平日 00:00〜00:00（例）<br>定休日：土日祝（例）</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- セクション3：電車・車でのアクセス -->
    <!-- wp:group {"className":"opk-access-route"} -->
    <div class="wp-block-group opk-access-route">

        <!-- wp:group {"className":"opk-access-route__block"} -->
        <div class="wp-block-group opk-access-route__block">
            <!-- wp:paragraph {"className":"opk-block-title"} -->
            <p class="opk-block-title" role="heading" aria-level="3">電車でお越しの場合</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>○○線「○○駅」○○出口より徒歩約5分です。（最寄駅名・出口・所要時間に書き換えてください）</p>
            <!-- /wp:paragraph -->

            <!-- wp:list -->
            <ul>
                <li>○○線「○○駅」からお越しの場合：改札を出て○○方面へお進みください。</li>
                <li>△△線「△△駅」からお越しの場合：□□出口より○○方面へお進みください。</li>
            </ul>
            <!-- /wp:list -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"opk-access-route__block"} -->
        <div class="wp-block-group opk-access-route__block">
            <!-- wp:paragraph {"className":"opk-block-title"} -->
            <p class="opk-block-title" role="heading" aria-level="3">お車でお越しの場合</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>当社専用の駐車場はございません。お車でお越しの際は、近隣のコインパーキングをご利用ください。（必要に応じて書き換えてください）</p>
            <!-- /wp:paragraph -->

            <!-- wp:list -->
            <ul>
                <li>近隣のコインパーキングまで徒歩1〜3分（例）</li>
                <li>おおよその目安料金や台数などを記載してもOKです。</li>
            </ul>
            <!-- /wp:list -->
        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

    <!-- セクション4：地図（Google Maps 埋め込み枠） -->
    <!-- wp:group {"className":"opk-access-map"} -->
    <div class="wp-block-group opk-access-map">

        <!-- wp:paragraph {"className":"opk-block-title"} -->
        <p class="opk-block-title" role="heading" aria-level="3">地図</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p>下記の地図はダミーです。実際の所在地に合わせて、Google Maps の埋め込みコードに差し替えてください。</p>
        <!-- /wp:paragraph -->

        <!-- wp:html -->
        <div class="opk-access-map__frame">
            <!-- Google Maps の埋め込みコードをここに貼り付けてください -->
        </div>
        <!-- /wp:html -->

    </div>
    <!-- /wp:group -->

    <!-- セクション5：来社時の注意事項や補足 -->
    <!-- wp:group {"className":"opk-access-notes"} -->
    <div class="wp-block-group opk-access-notes">

        <!-- wp:paragraph {"className":"opk-block-title"} -->
        <p class="opk-block-title" role="heading" aria-level="3">ご来社時の注意事項</p>
        <!-- /wp:paragraph -->

        <!-- wp:list -->
        <ul>
            <li>ご来社の際は、事前にお問い合わせフォームまたはお電話にてご予約をお願いいたします。（例）</li>
            <li>ビルのエントランスがオートロックの場合は、インターホンで「○○○」をお呼び出しください。（例）</li>
            <li>発熱や体調不良がある場合は、ご来社をお控えいただき、日程変更をご相談ください。（例）</li>
        </ul>
        <!-- /wp:list -->
    </div>
    <!-- /wp:group -->

    <!-- セクション6：お問い合わせCTA -->
    <!-- wp:group {"className":"opk-access-cta opk-section"} -->
    <div class="wp-block-group opk-access-cta opk-section">

        <!-- wp:paragraph {"className":"opk-section-title"} -->
        <p class="opk-section-title" role="heading" aria-level="2">ご来社予約・お問い合わせはこちら</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p>ご相談やご来社のご予約は、お問い合わせフォームまたはお電話にて承っております。お気軽にご連絡ください。</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"className":"opk-access-cta__buttons"} -->
        <div class="wp-block-buttons opk-access-cta__buttons">

            <!-- wp:button {"className":"opk-access-cta__button--primary"} -->
            <div class="wp-block-button opk-access-cta__button--primary">
                <a class="wp-block-button__link" href="#">お問い合わせフォームへ</a>
            </div>
            <!-- /wp:button -->

            <!-- wp:button {"className":"opk-access-cta__button--secondary","fontSize":"small"} -->
            <div class="wp-block-button opk-access-cta__button--secondary">
                <a class="wp-block-button__link has-small-font-size" href="tel:0000000000">お電話でのお問い合わせ</a>
            </div>
            <!-- /wp:button -->

        </div>
        <!-- /wp:buttons -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
        '),
    )
);
