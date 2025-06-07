<?php
//管理画面投稿の表示変更
function Change_menulabel()
{
	global $menu;
	global $submenu;
	$name = 'お知らせ';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name . "一覧";
	$submenu['edit.php'][10][0] = '新規追加';
}
function Change_objectlabel()
{
	global $wp_post_types;
	$name = 'お知らせ';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('新規追加', $name);
	$labels->add_new_item = $name . 'の新規追加';
	$labels->edit_item = $name . 'の編集';
	$labels->new_item = '新規' . $name;
	$labels->view_item = $name . 'を表示';
	$labels->search_items = $name . 'を検索';
	$labels->not_found = $name . 'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に' . $name . 'は見つかりませんでした';
}
add_action('init', 'Change_objectlabel');
add_action('admin_menu', 'Change_menulabel');
?>
<?php
//投稿アイキャッチの設定
add_theme_support('post-thumbnails');
?>
<?php
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
	return false;
}



/*================================================================
	投稿一覧（管理画面）サムネイルを追加（カスタム投稿にも対応）
	================================================================*/
	// 投稿一覧（管理画面）にサムネイルのタイトルを追加する
function customize_manage_posts_columns($columns)
{
    // アイキャッチ画像を追加
    $columns['thumbnail'] = 'アイキャッチ画像';
    return $columns;
}
add_filter('manage_posts_columns', 'customize_manage_posts_columns');
add_filter('manage_campaign_posts_columns', 'customize_manage_posts_columns'); // カスタム投稿用
add_filter('manage_blog_posts_columns', 'customize_manage_posts_columns'); // カスタム投稿用
// 投稿一覧（管理画面）にサムネイル画像表示（カスタム投稿にも対応）
function customize_manage_posts_custom_column($column_name, $post_id)
{
    if ('thumbnail' == $column_name) {
        $thum = get_the_post_thumbnail($post_id, 'small', array('style' => 'width:100px;height:75px;object-fit: cover;'));

        // サムネイルが設定されていれば表示、それ以外は「画像なし」
        if (isset($thum) && $thum) {
            echo $thum;
        } else {
            echo __('画像なし');
        }
    }
    // // 他のカラムが必要な場合（例えば、タイトルやカスタムフィールドなど）も処理を追加
    // elseif ('title' == $column_name) {
    //     // タイトル表示（必要であれば追加）
    //     echo get_the_title($post_id);
    // }
    // // 他のカスタムフィールドやカラムを追加する場合はここで設定
}
add_action('manage_posts_custom_column', 'customize_manage_posts_custom_column', 10, 2);
add_action('manage_campaign_posts_custom_column', 'customize_manage_posts_custom_column', 10, 2); // カスタム投稿用
add_action('manage_blog_posts_custom_column', 'customize_manage_posts_custom_column', 10, 2); // カスタム投稿用



/*================================================================
    カスタムフィールドの画像をアイキャッチとして反映
================================================================*/
function acf_set_featured_image($post_id)
{
	// 投稿タイプが 'voice' または 'campaign' の場合
	$post_type = get_post_type($post_id);
	if ($post_type !== 'voice' && $post_type !== 'campaign') {
		return;
	}

	if ($post_type === 'voice') {
		// voice の場合、グループフィールドから画像を取得
		$voice_group = get_field('voice_group', $post_id);
		if ($voice_group) {
			$image_id = $voice_group['voice_img']; // voice の画像フィールド
		}
	} elseif ($post_type === 'campaign') {
		// campaign の場合、画像フィールドを直接取得
		$image_id = get_field('campaign_img', $post_id); // campaign の画像フィールド
	}

	// 画像が存在する場合はアイキャッチ画像を設定、存在しない場合はアイキャッチ画像を削除
	if (isset($image_id) && $image_id) {
		set_post_thumbnail($post_id, $image_id);
	} else {
		delete_post_thumbnail($post_id);
	}
}

// 投稿が保存される際にアイキャッチ画像を設定
add_action('save_post', 'acf_set_featured_image');


/*================================================================
    カスタムフィールドのテキストを投稿タイトルとして反映
================================================================*/
// 自動タイトル設定
function auto_title($post_id)
{
	// 投稿タイプ判定
	$post_type = get_post_type($post_id);

	// 'voice' の場合の処理
	if ($post_type == 'voice') {
		// 必要な情報の取得
		$voice_group = get_field('voice_group', $post_id);
		if ($voice_group) {
			$voice_meta_group = $voice_group['voice_meta_group']; // 'voice_meta_group' フィールドの値を取得
			if ($voice_meta_group) {
				$sub_title = $voice_meta_group['voice_title']; // 'voice_title' フィールドの値を取得

				// タイトルの生成
				$post_title = $sub_title;
				if (!empty($post_title)) { // タイトルが空でない場合
					$post_name = sanitize_title($post_title); // スラッグの生成

					// 投稿情報の設定
					$post = array(
						'ID' => $post_id,
						'post_name' => $post_name,
						'post_title' => $post_title
					);

					// フックを一時的に解除して無限ループを防止
					remove_action('save_post', 'auto_title');

					// 投稿情報の更新
					wp_update_post($post);

					// フックを再追加
					add_action('save_post', 'auto_title');
				}
			}
		}
	}

	// 'campaign' の場合の処理
	elseif ($post_type == 'campaign') {
		// campaign_title フィールドから値を取得
		$campaign_title = get_field('campaign_title', $post_id);

		if (!empty($campaign_title)) { // タイトルが空でない場合
			$post_name = sanitize_title($campaign_title); // スラッグの生成

			// 投稿情報の設定
			$post = array(
				'ID' => $post_id,
				'post_name' => $post_name,
				'post_title' => $campaign_title
			);

			// フックを一時的に解除して無限ループを防止
			remove_action('save_post', 'auto_title');

			// 投稿情報の更新
			wp_update_post($post);

			// フックを再追加
			add_action('save_post', 'auto_title');
		}
	}
}

// 投稿が保存される際に自動でタイトルを設定
add_action('save_post', 'auto_title');


/*================================================================
    カスタム投稿で投稿ページのタイトル入力や本文入力を非表示
================================================================*/
function remove_title_support_from_voice_and_campaign()
{

	// カスタム投稿タイプ「campaign」のタイトルと本文エディタを非表示にする
	remove_post_type_support('campaign', 'title');
	remove_post_type_support('campaign', 'editor');
}
add_action('init', 'remove_title_support_from_voice_and_campaign');



/*================================================================
    特定の固定ページのエディタ非表示
================================================================*/
add_filter('use_block_editor_for_post', function ($use_block_editor, $post) {
	if ($post->post_type === 'page') {
		if (in_array($post->post_name, ['about-us', 'information', 'contact', 'contact_thanks', 'top', 'blog', '404-2', 'sitemap'])) { //ページスラッグ名
			remove_post_type_support('page', 'editor');
			return false;
		}
	}
	return $use_block_editor;
}, 10, 2);


/*=============================================
    人気記事 
=============================================*/
// 閲覧数を増加させる関数
function set_post_views($postID)
{
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if ($count == '') {
		$count = 0;
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '1');
	} else {
		$count++;
		update_post_meta($postID, $count_key, $count);
	}
}

// 閲覧数を表示する関数
function get_post_views($postID)
{
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if ($count == '') {
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
		return "0 View";
	}
	return $count . ' Views';
}

// 投稿が表示されるたびに閲覧数を増加させる
function track_post_views($post_id)
{
	if (!is_single()) return;
	if (empty($post_id)) {
		global $post;
		$post_id = $post->ID;
	}
	set_post_views($post_id);
}
add_action('wp_head', 'track_post_views');
