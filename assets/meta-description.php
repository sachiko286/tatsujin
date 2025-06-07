		<?php
			if(is_front_page()){
				// トップページのディスクリプションを入力してください
				$description = "";
			}else if($post_type == "post" && is_single()){
				// 通常投稿タイプのsingleページのディスクリプションを入力してください
				$description = "";
			}else if($post_type == "" && !is_single()){
				// カスタム投稿タイプ一覧のディスクリプションを入力してください
				$description = "";
			}else if($post_type == "" && is_single()){
				// カスタム投稿タイプのsingleページのディスクリプションを入力してください
				$description = "";
			}else{
				switch($current_page){
					// 各固定ページのディスクリプションを入力してください
					case "":
						$description = "";
						break;
					case "":
						$description = "";
						break;
					case "":
						$description = "";
						break;
					// 通常投稿タイプ一覧のディスクリプションを入力してください
					default:
						$description = "";
						break;
				}
			}
		?>

		<!-- Description -->
		<meta name="description" content="<?php echo $description; ?>">
