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
<div style="font-family: 'Noto Sans JP', sans-serif; color: #333333; background-color: #ffffff; line-height: 1.6; max-width: 1000px; margin: 40px auto; padding: 0 20px; box-sizing: border-box;">

    <div style="text-align: center; margin-bottom: 40px;">
        <span style="font-size: 0.9rem; color: #a5b1c2; display: block; font-weight: 500; letter-spacing: 0.05em;">ACCESS</span>
        <h2 style="font-size: 2rem; font-weight: 700; letter-spacing: 0.1em; margin: 10px 0 0 0; color: #333;">アクセス</h2>
        <div style="width: 40px; height: 3px; background-color: #2c3e50; margin: 15px auto 0; border-radius: 2px;"></div>
    </div>

    <div style="display: flex; flex-wrap: wrap; gap: 40px; justify-content: space-between;">

        <div style="flex: 1; min-width: 300px; min-height: 400px; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.05); position: relative;">
            <iframe src="https://maps.google.com/maps?q=Tokyo&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0; position: absolute; top: 0; left: 0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div style="flex: 1; min-width: 300px; display: flex; flex-direction: column; justify-content: center;">
            <h3 style="font-size: 1.5rem; font-weight: 700; margin: 0 0 24px 0; border-left: 5px solid #2c3e50; padding-left: 15px; line-height: 1.2; color: #333;">
                青山デザインスタジオ
            </h3>
            
            <div style="margin-bottom: 30px;">
                <div style="display: flex; margin-bottom: 15px; align-items: baseline;">
                    <div style="font-weight: 700; color: #2c3e50; font-size: 0.95rem; width: 5em; flex-shrink: 0;">住所</div>
                    <div style="font-size: 1rem;">
                        〒107-0062<br>
                        東京都港区南青山1-2-3 デザインビル 2F
                    </div>
                </div>
                <div style="display: flex; margin-bottom: 15px; align-items: baseline;">
                    <div style="font-weight: 700; color: #2c3e50; font-size: 0.95rem; width: 5em; flex-shrink: 0;">営業時間</div>
                    <div style="font-size: 1rem;">
                        10:00 - 19:00<br>
                        <span style="font-size: 0.85em; color: #888;">定休日：水曜日・祝日</span>
                    </div>
                </div>
                <div style="display: flex; margin-bottom: 15px; align-items: baseline;">
                    <div style="font-weight: 700; color: #2c3e50; font-size: 0.95rem; width: 5em; flex-shrink: 0;">電話番号</div>
                    <div style="font-size: 1rem;">03-1234-5678</div>
                </div>
            </div>

            <div style="background-color: #f9f9f9; padding: 20px; border-radius: 12px; margin-bottom: 25px;">
                <div style="display: flex; align-items: flex-start; margin-bottom: 10px; font-size: 0.95rem;">
                    <span style="background-color: #2c3e50; color: #fff; font-size: 0.75rem; padding: 2px 8px; border-radius: 4px; margin-right: 12px; white-space: nowrap; margin-top: 3px;">電車</span>
                    <span>銀座線・半蔵門線「青山一丁目駅」<br>4番出口より徒歩3分</span>
                </div>
                <div style="display: flex; align-items: flex-start; margin-bottom: 0; font-size: 0.95rem;">
                    <span style="background-color: #2c3e50; color: #fff; font-size: 0.75rem; padding: 2px 8px; border-radius: 4px; margin-right: 12px; white-space: nowrap; margin-top: 3px;">お車</span>
                    <span>専用駐車場なし<br><small style="color:#777;">※近隣のコインパーキングをご利用ください</small></span>
                </div>
            </div>

            <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                <a href="https://goo.gl/maps/placeholder" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 24px; border-radius: 50px; text-decoration: none; font-weight: 700; font-size: 0.95rem; flex: 1; min-width: 200px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); background-color: #2c3e50; color: #fff;">
                    Googleマップで見る
                </a>
                <a href="tel:0312345678" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 24px; border-radius: 50px; text-decoration: none; font-weight: 700; font-size: 0.95rem; flex: 1; min-width: 200px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); background-color: #fff; color: #2c3e50; border: 2px solid #2c3e50; box-sizing: border-box;">
                    電話をかける
                </a>
            </div>
        </div>
    </div>
</div>
        '),
    )
);
