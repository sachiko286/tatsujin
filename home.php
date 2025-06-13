		<?php get_header(); ?>

		<section class="sub-fv">
			<h1 class="sub-fv-title">
				news
			</h1>
			<div class="fv-content-left pc">
				<div class="fv-instagram">
					<a href="https://www.instagram.com/tatsujin_suwa/" target="_blank" rel="noopener noreferrer">
						<img src="<?php echo get_template_directory_uri(); ?>/images/assets/instagram-icon.svg" alt="LOGO">
					</a>
				</div>
				<P class="fv-copy">© Tatsujin inc. All rights reserved.</P>
			</div>
		</section>

		<section class="news">
			<div class="news-wrapper contents-wrapper fade-in">
				<h2 class="news-section-title section-title">
					お知らせ一覧
				</h2>

				<div class="news-header-content">
					<p class="archive-title color-white pc">アーカイブ</p>
					<div class="archive-select">
						<select class="archive-dropdown" name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'>
							<option value="<?php echo esc_url(home_url('/news/')); ?>">月を選択</option>
							<?php
							wp_get_archives(array(
								'type' => 'monthly',
								'format' => 'option',
							));
							?>
						</select>
					</div>
				</div>



				<?php
				$paged = get_query_var('paged') ? get_query_var('paged') : 1; // ページネーションを使用する場合必要
				$news_args = array(
					'post_type' => 'post',
					'paged'     => $paged, // ページネーションを使用する場合必要
				);

				$news_query = new WP_Query($news_args);
				?>

				<?php if ($news_query->have_posts()) : ?>
					<div class="news-body">
						<ul class="news-items page-news-items">
							<?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
								<li class="news-item">
									<a href="<?php echo esc_url(get_permalink()); ?>">
										<div class="news-item-meta">
											<p class="news-item-date"><?php the_time('Y.m.d'); ?></p>
											<?php $cat = get_the_category();
											// var_dump($cat);
											$cat_name = $cat[0]->cat_name;
											$cat_color = $cat[0]->slug; ?>
											<p class="news-item-category <?php echo $cat_color ?>"><?php echo $cat_name ?></p>
										</div>
										<p class="news-item-title"><?php the_title(); ?></p>
									</a>
								</li>
							<?php endwhile; ?>
						</ul>

						<div class="pagenavi">
							<div class="pagenavi-inner contents-wrapper">
								<!-- WP-PageNaviで出力される部分 -->
								<!-- サブループの場合 -->
								<?php wp_pagenavi(array('query' => $news_query)); ?>
							</div>
						</div>
						<!-- クエリのリセット -->
						<?php wp_reset_postdata(); ?>
					</div>
				<?php endif; ?>
			</div>
		</section>


		<?php get_footer(); ?>