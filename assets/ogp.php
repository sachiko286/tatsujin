		<?php
			$ogp_url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
			$ogp_image = get_template_directory_uri() . "/images/assets/ogp.jpg";
			if(is_front_page() || is_404()){
				$ogp_title = $site_name;
				// トップページのOGPディスクリプションを入力してください
				$ogp_description = "";
				if(is_404()){
					$ogp_url = home_url() . "/";
				}
			}else{
				if($post_type == "post" && is_archive() || is_home()){
					$ogp_title = $title_post . $title_page;
					$current_page = $title_post . "一覧";
				}else if($post_type == "" && is_archive()){
					$ogp_title = $title_post_custom . $title_page;
					$current_page = $title_post_custom . "一覧";
				}else{
					$ogp_title = $post->post_title . $title_page;
				}
				if(is_single()){
					if($post_type == "post"){
						$current_page = $title_post;
					}else if($post_type == ""){
						$current_page = $title_post_custom;
					}
				}
				$ogp_description = $site_name . "の" . $current_page . "ページです。";
			}
		?>

		<!-- OGP -->
		<meta property="og:type" content="article">
		<meta property="og:title" content="<?php echo $ogp_title; ?>">
		<meta property="og:description" content="<?php echo $ogp_description; ?>">
		<meta property="og:image" content="<?php echo $ogp_image; ?>">
		<meta property="og:url" content="<?php echo $ogp_url; ?>">
		<meta property="og:site_name" content="<?php echo $site_name; ?>">
		<meta content="summary" name="twitter:card">
		<meta content="@twitter_acount" name="twitter:site">
