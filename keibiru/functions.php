<?php


//タイトル書き換え
function theme_slug_setup()
{
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'theme_slug_setup');
add_filter('show_admin_bar', '__return_false');

//スマホを判別
function is_mobile()
{
    $useragents = array(
        'iPhone', // iPhone
        'iPod', // iPod touch
        'Android.*Mobile', // 1.5+ Android *** Only mobile
        'Windows.*Phone', // *** Windows Phone
        'dream', // Pre 1.5 Android
        'CUPCAKE', // 1.5+ Android
        'blackberry9500', // Storm
        'blackberry9530', // Storm
        'blackberry9520', // Storm v2
        'blackberry9550', // Storm v2
        'blackberry9800', // Torch
        'webOS', // Palm Pre Experimental
        'incognito', // Other iPhone browser
        'webmate' // Other iPhone browser

    );
    $pattern = '/' . implode('|', $useragents) . '/i';

    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

//スマホを判別　ここまで

//一覧にスラッグを表示する
function add_page_columns($columns)
{
    $columns['slug'] = "スラッグ";
    echo '<style>
    .fixed .column-slug {width: 8%;}
    </style>';
    return $columns;
}

function add_page_column_row($column_name, $post_id)
{
    if ($column_name == 'slug') {
        $post = get_post($post_id);
        $slug = $post->post_name;
        echo esc_attr($slug);
    }
}

add_filter('manage_pages_columns', 'add_page_columns');
add_action('manage_pages_custom_column', 'add_page_column_row', 10, 2);
//一覧にスラッグを表示　ここまで

//自動pタグ挿入を削除

add_action('init', function () {
    remove_filter('the_excerpt', 'wpautop');
    remove_filter('the_content', 'wpautop');
});

add_filter('tiny_mce_before_init', function ($init) {
    $init['wpautop'] = false;
    $init['apply_source_formatting'] = ture;
    return $init;
});

//ページ単位でヘッダにコードを出力
function head_original_load()
{
    if (is_single() || is_page()) {
        if ($head_original_code = get_post_meta(get_the_ID(), 'head_custom', false)) {
            foreach ($head_original_code as $head_code) {
                echo $head_code . "\n";
            }
        }
    }
}

add_action('wp_head', 'head_original_load');


//ページ単位でフッターにコードを出力
function foot_original_load()
{
    if (is_single() || is_page()) {
        if ($foot_original_code = get_post_meta(get_the_ID(), 'foot_custom', false)) {
            foreach ($foot_original_code as $foot_code) {
                echo $foot_code . "\n";
            }
        }
    }
}

add_action('wp_foot', 'foot_original_load');

/**
 * 不要なページを無効化します。(404扱い)
 * 検索・作成者・カテゴリ・添付ファイル　ページ（アーカイブ）を無効 2018.1.6 SK
 */
function custom_handle_404() {
	// 検索ページ、作成者ページ、添付ファイルページを無効化
	if ( is_search() || is_author() || is_attachment() || is_category() ) {
		global $wp_query;
		$wp_query->set_404();
		status_header( 404 );
		nocache_headers();
	}
}
add_action( 'template_redirect', 'custom_handle_404' );

//テンプレートディレクトリ表示
function my_get_templatedir_uri() {
	return get_template_directory_uri();
}
add_shortcode( 'TMPDIR', 'my_get_templatedir_uri' );
