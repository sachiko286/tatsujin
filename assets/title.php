		<!-- Title -->
		<title>
		    <?php
            if (is_front_page()) {
                echo $title_front;
            } else if (is_404()) {
                echo "ページが見つかりません";
            } else if (is_date()) {
                echo get_the_archive_title() . $title_page;
            } else {
                echo $post->post_title . $title_page;
            }
            ?>
		</title>