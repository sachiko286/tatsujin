        <?php
            $post_type =  get_query_var('post_type');
            $site_name = get_bloginfo();
			$current_page = is_404() ? '404 Page' : get_the_title(); // 404ページの場合は'404 Page'をセット 
            // トップページのタイトルを入力してください
            $title_front = "エテリア｜毎日を笑顔で、明るく";
            // 下層ページのタイトルフォーマット
            $title_page  = " | " . $site_name;
            // 各投稿タイプのタイトルを入力してください
            $title_post = "お知らせ";
            // カスタム投稿タイプ用タイトル（複数対応）
            $custom_post_titles = array(
                'campaign' => 'キャンペーン',
                'blog'     => 'ブログ',
            );

            // 投稿タイプに応じたタイトルをセット（なければ空文字）
            $title_post_custom = isset($custom_post_titles[$post_type]) ? $custom_post_titles[$post_type] : '';
            
            if(is_404()){
                include (dirname(__FILE__)."/no-index.php");
            }else{
                include (dirname(__FILE__)."/meta-description.php");
            }
            include (dirname(__FILE__)."/ogp.php");
            include (dirname(__FILE__)."/title.php");
        ?>