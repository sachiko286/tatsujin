		<!-- Title -->
		<title>
		    <?php
            if (is_front_page()) {
                echo $title_front;
            } else if (is_404()) {
                echo "ページが見つかりません";
            } else if (is_category()) {
                $category = get_queried_object();
                echo $category->name . $title_page;
            } else if (is_tax('campaign_category')) {
                $term = get_queried_object();         // 現在のタームオブジェクトを取得
                echo $term->name . $title_page;      // ターム名を出力
            } else if (is_tax('blog_category')) {
                $term = get_queried_object();         // 現在のタームオブジェクトを取得
                echo $term->name . $title_page;      // ターム名を出力
            } else if ($post_type == "post" && is_archive() || is_home()) {
                echo $title_post . $title_page;
            } else if ($post_type == "campaign" && is_archive()) {
                echo $title_post_custom . $title_page;
            } else if ($post_type == "blog" && is_archive()) {
                echo $title_post_custom . $title_page;
            } else {
                echo $post->post_title . $title_page;
            }
            ?>
		</title>