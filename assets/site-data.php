        <?php
            $post_type =  get_query_var('post_type');
            $site_name = get_bloginfo();
			$current_page = is_404() ? '404 Page' : get_the_title(); // 404ページの場合は'404 Page'をセット 
            // トップページのタイトルを入力してください
            $title_front = "トップページ｜炭火と地酒のたつじん";
            // 下層ページのタイトルフォーマット
            $title_page  = " | " . $site_name;
            // 各投稿タイプのタイトルを入力してください
            $title_post = "お知らせ";
            if(is_404()){
                include (dirname(__FILE__)."/no-index.php");
            }else{
                include (dirname(__FILE__)."/meta-description.php");
            }
            include (dirname(__FILE__)."/ogp.php");
            include (dirname(__FILE__)."/title.php");
        ?>