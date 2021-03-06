<?php //ウイジェットエリア用の関数

/////////////////////////////////////
// ウィジェットエリアの指定
/////////////////////////////////////

register_sidebars(1,
  array(
  'name' => 'サイドバーウイジェット',
  'id' => 'sidebar-1',
  'description' => 'サイドバーのウィジットエリアです。',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
  'before_title'  => '<h4 class="widgettitle">',
  'after_title'   => '</h4>',
));

register_sidebars(1,
  array(
  'name'=>'スクロール追従領域',
  'id' => 'sidebar-scroll',
  'description' => 'サイドバーで下にスクロールすると追いかけてくるエリアです。※モバイルでは表示されません。（ここにGoogle AdSenseを貼るのはポリシー違反です。）',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<h4>',
  'after_title' => '</h4>',
));

register_sidebars(1,
  array(
  'name'=>'広告 336x280',
  'id' => 'adsense-336',
  'description' => '336×280pxの広告を入力してください。',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '<div class="widget-ad">',
  'after_title' => '</div>',
));

register_sidebars(1,
  array(
  'name'=>'広告 300x250',
  'id' => 'adsense-300',
  'description' => '300×250pxの広告を入力してください。',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '<div class="widget-ad">',
  'after_title' => '</div>',
));

if ( is_ads_performance_visible() ):
  if ( !is_ads_custum_ad_space() ) {//ビッグバナーのとき
    $adw_name = '広告 728×90';
    $adw_desc = '広告が2つしか表示されていないPC表示ページのトップにビッグバナーを表示します。728×90のビッグバナー推奨です。完全レスポンシブのときは設定しても表示されません。（デフォルト状態をなるべくシンプルにするためカスタマイザーから設定しないと、このウイジェット設定は表示されません。）';
  } else {//カスタム広告の時
    $adw_name = '広告 custum 680×150など';
    $adw_desc = '広告が2つしか表示されていないPC表示ページのトップにカスタムサイズ広告を表示します。680×150など推奨です。完全レスポンシブのときは設定しても表示されません。（デフォルト状態をなるべくシンプルにするためカスタマイザーから設定しないと、このウイジェット設定は表示されません。）';
  }
  register_sidebars(1,
    array(
    'name'=>$adw_name,
    'id' => 'adsense-728',
    'description' => $adw_desc,
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<div class="widget-ad">',
    'after_title' => '</div>',
  ));

  register_sidebars(1,
    array(
    'name'=>'広告 320x100',
    'id' => 'adsense-320',
    'description' => '広告が2つしか表示されていないモバイルページのトップにラージモバイルバナーを表示します。320×100のラージモバイルバナー推奨です。完全レスポンシブのときは設定しても表示されません。（デフォルト状態をなるべくシンプルにするためカスタマイザーから設定しないと、このウイジェット設定は表示されません。）',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<div class="widget-ad">',
    'after_title' => '</div>',
  ));
endif;

//if ( is_responsive_enable() ):
//  register_sidebars(1,
//    array(
//    'name'=>'広告 レスポンシブ',
//    'id' => 'adsense-responsive',
//    'description' => 'レスポンシブ広告設置用のウイジェットです。',
//    'before_widget' => '',
//    'after_widget' => '',
//    'before_title' => '<div class="widget-ad">',
//    'after_title' => '</div>',
//  ));
//endif;

register_sidebars(1,
  array(
  'name'=>'投稿本文上',
  'id' => 'widget-over-article',
  'description' => '投稿本文上に表示されるウイジェット。設定しないと表示されません。',
  'before_widget' => '<div id="%1$s" class="widget-over-article %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<div class="widget-over-article-title main-widget-label">',
  'after_title' => '</div>',
));

register_sidebars(1,
  array(
  'name'=>'投稿本文中',
  'id' => 'widget-in-article',
  'description' => '投稿本文中に表示されるウイジェット。文中最初のH2タグの手前に表示されます。広告が表示されている場合は、広告の下に表示されます。設定しないと表示されません。',
  'before_widget' => '<div id="%1$s" class="widget-in-article %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<div class="widget-in-article-title main-widget-label">',
  'after_title' => '</div>',
));

register_sidebars(1,
  array(
  'name'=>'投稿本文下',
  'id' => 'widget-under-article',
  'description' => '投稿本文下に表示されるウイジェット。設定しないと表示されません。',
  'before_widget' => '<div id="%1$s" class="widget-under-article %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<div class="widget-under-article-title main-widget-label">',
  'after_title' => '</div>',
));

register_sidebars(1,
  array(
  'name'=>'投稿SNSボタン上',
  'id' => 'widget-over-sns-buttons',
  'description' => '投稿のメインカラムの一番下となるSNSボタンの上に表示されるウイジェット。広告を表示している場合は、広告の下になります。設定しないと表示されません。',
  'before_widget' => '<div id="%1$s" class="widget-over-sns-buttons %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<div class="widget-over-sns-buttons-title main-widget-label">',
  'after_title' => '</div>',
));

register_sidebars(1,
  array(
  'name'=>'投稿SNSボタン下',
  'id' => 'widget-under-sns-buttons',
  'description' => '投稿のメインカラムの一番下となるSNSボタンの下に表示されるウイジェット。設定しないと表示されません。',
  'before_widget' => '<div id="%1$s" class="widget-under-sns-buttons %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<div class="widget-under-sns-buttons-title main-widget-label">',
  'after_title' => '</div>',
));

register_sidebars(1,
  array(
  'name'=>'投稿関連記事下',
  'id' => 'widget-under-related-entries',
  'description' => '関連記事の下（広告を表示している場合はその下）に表示されるウイジェット。設定しないと表示されません。',
  'before_widget' => '<div id="%1$s" class="widget-under-related-entries %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<div class="widget-under-related-entries-title main-widget-label">',
  'after_title' => '</div>',
));

register_sidebars(1,
  array(
  'name'=>'固定ページ本文上',
  'id' => 'widget-over-page-article',
  'description' => '固定ページ本文上に表示されるウイジェット。設定しないと表示されません。',
  'before_widget' => '<div id="%1$s" class="widget-over-page-article %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<div class="widget-over-page-article-title main-widget-label">',
  'after_title' => '</div>',
));

register_sidebars(1,
  array(
  'name'=>'固定ページ本文中',
  'id' => 'widget-in-page-article',
  'description' => '固定ページ本文中に表示されるウイジェット。文中最初のH2タグの手前に表示されます。広告が表示されている場合は、広告の下に表示されます。設定しないと表示されません。',
  'before_widget' => '<div id="%1$s" class="widget-in-page-article %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<div class="widget-in-page-article-title main-widget-label">',
  'after_title' => '</div>',
));

register_sidebars(1,
  array(
  'name'=>'固定ページ本文下',
  'id' => 'widget-under-page-article',
  'description' => '固定ページ本文下に表示されるウイジェット。設定しないと表示されません。',
  'before_widget' => '<div id="%1$s" class="widget-under-page-article %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<div class="widget-under-page-article-title main-widget-label">',
  'after_title' => '</div>',
));

register_sidebars(1,
  array(
  'name'=>'インデックスリストトップ',
  'id' => 'widget-index-top',
  'description' => 'インデックスリストのトップに表示されるウイジェット。広告が表示されているときは広告の下に表示されます。設定しないと表示されません。',
  'before_widget' => '<div id="%1$s" class="widget-index-top %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<div class="widget-index-top-title main-widget-label">',
  'after_title' => '</div>',
));

register_sidebars(1,
  array(
  'name'=>'インデックスリストミドル',
  'id' => 'widget-index-middle',
  'description' => 'インデックスリストの3つ目下に表示されるウイジェット。「一覧リストのスタイル」が「サムネイルカード」の時のみの機能です。広告が表示されているときは広告の下に表示されます。設定しないと表示されません。',
  'before_widget' => '<div id="%1$s" class="widget-index-middle %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<div class="widget-index-middle-title main-widget-label">',
  'after_title' => '</div>',
));

register_sidebars(1,
  array(
  'name'=>'インデックスリストボトム',
  'id' => 'widget-index-bottom',
  'description' => 'インデックスリストのボトムに表示されるウイジェット。広告が表示されているときは広告の下に表示されます。設定しないと表示されません。',
  'before_widget' => '<div id="%1$s" class="widget-index-bottom %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<div class="widget-index-bottom-title main-widget-label">',
  'after_title' => '</div>',
));

register_sidebars(1,
  array(
  'name'=>'フッター左',
  'id' => 'footer-left',
  'description' => 'フッター左側のウィジットエリアです。',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<h4>',
  'after_title' => '</h4>',
));

register_sidebars(1,
  array(
  'id' => 'footer-center',
  'name'=>'フッター中',
  'description' => 'フッター中間のウィジットエリアです。',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<h4>',
  'after_title' => '</h4>',
));

register_sidebars(1,
  array(
  'name'=>'フッター右',
  'id' => 'footer-right',
  'description' => 'フッター右側フッター中のウィジットエリアです。',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<h4>',
  'after_title' => '</h4>',
));

//カスタムヘッダー
$custom_header_defaults = array(
 'random-default' => false,
 'width' => (is_sidebar_width_336() ? 1106 : 1070),//サイドバーの幅によって変更
 'height' => intval(get_header_height()),
 'flex-height' => false,
 'flex-width' => false,
 'default-text-color' => '',
 'header-text' => false,
 'uploads' => true,
);

/////////////////////////////////////
// 投稿本文中にウィジェットを表示する
/////////////////////////////////////
function add_widget_before_1st_h2($the_content) {
  if ( is_single() && //投稿ページのとき、固定ページも表示する場合はis_singular()にする
       is_active_sidebar( 'widget-in-article' ) //ウィジェットが設定されているとき
  ) {
    //広告（AdSense）タグを記入
    ob_start();//バッファリング
    echo '<div id="widget-in-article" class="widgets">';
    dynamic_sidebar( 'widget-in-article' );;//本文中ウィジェットの表示
    echo '</div>';
    $ad_template = ob_get_clean();
    $h2result = get_h2_included_in_body( $the_content );//本文にH2タグが含まれていれば取得
    if ( $h2result ) {//H2見出しが本文中にある場合のみ
      //最初のH2の手前に広告を挿入（最初のH2を置換）
      $count = 1;
      $the_content = preg_replace(H2_REG, $ad_template.$h2result, $the_content, 1);
    }
  }
  return $the_content;
}
add_filter('the_content','add_widget_before_1st_h2');

/////////////////////////////////////
// 固定ページ本文中にウィジェットを表示する
/////////////////////////////////////
function add_widget_before_1st_h2_in_page($the_content) {
  if ( is_page() && //投稿ページのとき、固定ページも表示する場合はis_singular()にする
       is_active_sidebar( 'widget-in-page-article' ) //ウィジェットが設定されているとき
  ) {
    //広告（AdSense）タグを記入
    ob_start();//バッファリング
    echo '<div id="widget-in-page-article" class="widgets">';
    dynamic_sidebar( 'widget-in-page-article' );;//本文中ウィジェットの表示
    echo '</div>';
    $ad_template = ob_get_clean();
    $h2result = get_h2_included_in_body( $the_content );//本文にH2タグが含まれていれば取得
    if ( $h2result ) {//H2見出しが本文中にある場合のみ
      //最初のH2の手前に広告を挿入（最初のH2を置換）
      $count = 1;
      $the_content = preg_replace(H2_REG, $ad_template.$h2result, $the_content, 1);
    }
  }
  return $the_content;
}
add_filter('the_content','add_widget_before_1st_h2_in_page');