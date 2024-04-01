<?php
/**
 * Functions
 */

// 基本設定
get_template_part('parts/functions-lib/func-base');

// セキュリティー対応
get_template_part('parts/functions-lib/func-security');

// ショートコードの設定
get_template_part('parts/functions-lib/func-shortcode');

// URLのショートカット設定
get_template_part('parts/functions-lib/func-url');

// URLのショートカット設定
get_template_part('parts/functions-lib/func-utility');

// メインクエリのSP表示件数設定
// get_template_part('parts/functions-lib/func-posts-edit');

// スクリプト、スタイルシートの設定
get_template_part('parts/functions-lib/func-enqueue-assets');
// get_template_part('parts/functions-lib/func-enqueue-assets_noslider'); //スライダーを使用しない場合

// （MV用）カスタムフィールドの設定
get_template_part('parts/functions-lib/func-add-posttype-mv');

// （gallery用）カスタムフィールドの設定
get_template_part('parts/functions-lib/func-add-posttype-gallery');

// （Works用）カスタムフィールドの設定
get_template_part('parts/functions-lib/func-add-posttype-works');

// （Event用）投稿の名称変更
get_template_part('parts/functions-lib/func-add-posttype-post');

?>
