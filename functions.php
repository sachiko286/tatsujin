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
    the_archive_title 余計な文字を削除
================================================================*/
add_filter('get_the_archive_title', function ($title) {
    if (is_year()) {
        // 年別アーカイブの場合、年を取得
        $title = get_the_time('Y年');
    } elseif (is_month()) {
        // 月別アーカイブの場合、年と月を取得
        $title = get_the_time('Y年n月');
    }
    return $title;
});




