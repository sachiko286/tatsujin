		<?php
		if (is_front_page()) {
			// トップページのディスクリプションを入力してください
			$description = "長野県諏訪市の居酒屋「たつじん」。信州地鶏と地酒を楽しめる、出張ビジネスマンや地元の常連に人気の大人の隠れ家。";
		} else if ($post_type == "post" && is_single()) {
			// 通常投稿タイプのsingleページのディスクリプションを入力してください
			$description = "季節限定メニューや営業情報など、最新ニュースの詳細を掲載しています。";
		} else {
			switch ($current_page) {
				// 各固定ページのディスクリプションを入力してください
				case "お品書き":
					$description = "信州地鶏や地元食材を使った絶品料理と、厳選地酒をご紹介するメニューページです。";
					break;
				case "信州みそホルモンNIKAI":
					$description = "新鮮な信州ホルモンを炭火で香ばしく焼き上げ、特製味噌ダレで楽しむ極上の焼肉。仲間と過ごす特別なひとときをNIKAIで。";
					break;
				case "Other Business":
					$description = "当店が手がける飲食以外の事業や活動についてご紹介しています。";
					break;
				case "運営会社情報":
					$description = "当店の運営会社の概要や、店舗運営への想い・ビジョンをご案内します。";
					break;
				case "採用情報":
					$description = "当店で一緒に働く仲間を募集中。募集要項や職場の雰囲気をご紹介。";
					break;
				case "お問い合わせ":
					$description = "当店で一緒に働く仲間を募集中。募集要項や職場の雰囲気をご紹介。";
					break;
				// 通常投稿タイプ一覧のディスクリプションを入力してください
				default:
					$description = "季節限定メニューや営業情報など、居酒屋たつじんの最新ニュースをお届けします。";
					break;
			}
		}
		?>

		<!-- Description -->
		<meta name="description" content="<?php echo $description; ?>">