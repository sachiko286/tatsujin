		<?php get_header(); ?>

		<section class="sub-fv">
			<div class="sub-fv-wrapper">
				<div class="sub-fv-bg">
					<!-- <video src="" autoplay muted loop playsinline></video> -->
					<img src="<?php echo get_template_directory_uri(); ?>/images/assets/news-fv.jpg" alt="FV画像">
				</div>
				<div class="sub-fv-title contents-wrapper">
					<h1 class="sub-fv-title-en">
						news
						<span class="sub-fv-title-ja">お知らせ</span>
					</h1>
				</div>
			</div>
		</section>


<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>



		<section class="news">
			<div class="news-wrapper contents-wrapper fade-in">
				<div class="news-header-content">
					<ul class="news-tab-lists">
						<?php
						$categories = get_categories();
						foreach ($categories as $category) :
							$cat_name = esc_html($category->name);
							$cat_slug = esc_attr($category->slug);
							$cat_link = esc_url(get_category_link($category->term_id));
						?>
							<li class="news-tab-list">
								<a href="<?php echo $cat_link; ?>" class="news-item-category <?php echo $cat_slug; ?>">
									<?php echo $cat_name; ?>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
					<div class="archive-select">
						<select class="archive-dropdown" name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'>
							<option value="<?php echo esc_url(home_url('/news/')); ?>">アーカイブ <span class="select-color">All</span></option>
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
						<ul class="news-body-lists">
							<?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
								<li class="news-body-list">
									<a href="<?php echo esc_url(get_permalink()); ?>">
										<div class="news-body-img">
											<?php if (get_the_post_thumbnail()) : ?>
												<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>">
											<?php else : ?>
												<img class="noimage" src="<?php echo esc_url(get_theme_file_uri('/images/assets/noimage.jpg')); ?>" alt="noimage">
											<?php endif; ?>
										</div>
										<div class="news-body-item news-item">
											<div class="news-item-meta">
												<p class="news-item-date"><?php the_time('Y.m.d'); ?></p>
												<?php
												$cat = get_the_category();
												if (!empty($cat)) {
													$cat_name  = $cat[0]->cat_name;
													$cat_color = $cat[0]->slug;
													echo '<p class="news-item-category ' . esc_attr($cat_color) . '">' . esc_html($cat_name) . '</p>';
												}
												?>
											</div>
											<p class="news-item-title"><?php the_title(); ?></p>
										</div>
									</a>
								</li>
							<?php endwhile; ?>

						</ul>

						<div class="pagenavi">
							<div class="pagenavi__inner">
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