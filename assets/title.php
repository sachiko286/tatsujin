		<!-- Title -->
		<title>
		<?php
            if (is_front_page()) {
                echo $title_front;
            } else if (is_404()) {
                echo "ページが見つかりません";
            } else if (is_home()) {
                echo $title_post . $title_page; // ← お知らせ一覧ページ専用のタイトル
            } else if (is_date()) {
                echo get_the_archive_title() . $title_page;
            } else {
                echo get_the_title() . $title_page; // ← $post->post_title の代わりに安全
            }
        ?>

		</title>