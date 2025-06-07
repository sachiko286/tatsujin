<?php get_header(); ?>

<section class="sub-fv">
	<div class="sub-fv-wrapper">
		<div class="sub-fv-bg">
			<img src="<?php echo get_template_directory_uri(); ?>/images/assets/news-fv.jpg" alt="FV画像">
		</div>
		<div class="sub-fv-title contents-wrapper">
			<h1 class="sub-fv-title-en">
				news
				<span class="sub-fv-title-ja">
					<?php
					// カテゴリー名を取得
					$category = get_queried_object();
					echo $category->name; // カテゴリー名を表示
					?>
				</span>
			</h1>
		</div>
	</div>
</section>

<section class="news">
	<div class="news-wrapper contents-wrapper fade-in">
		<!-- カテゴリータブ -->
		<div class="news-header-content">
			<ul class="news-tab-lists">
				<?php
				$categories = get_categories();
				foreach ($categories as $category) :
					$cat_name = esc_html($category->name);
					$cat_slug = esc_attr($category->slug);
					$cat_link = esc_url(get_category_link($category->term_id));
				?>
					<li class="news-tab-list news-item-meta">
						<a href="<?php echo $cat_link; ?>" class="news-item-category <?php echo $cat_slug; ?>">
							<?php echo $cat_name; ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>

		<!-- 投稿一覧 -->
		<?php if (have_posts()) : ?>
			<div class="news-body">
				<ul class="news-body-lists">
					<?php while (have_posts()) : the_post(); ?>
						<li class="news-body-list">
							<a href="<?php the_permalink(); ?>">
								<div class="news-body-img">
									<?php if (get_the_post_thumbnail()) : ?>
										<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
									<?php else : ?>
										<img class="noimage" src="<?php echo esc_url(get_theme_file_uri('/images/assets/noimage.jpg')); ?>" alt="noimage">
									<?php endif; ?>
								</div>
								<div class="news-body-item news-item">
									<div class="news-item-meta">
										<p class="news-item-date"><?php the_time('Y.m.d'); ?></p>
										<?php
										$cat = get_the_category();
										if (!empty($cat)) :
											$cat_name = $cat[0]->cat_name;
											$cat_color = $cat[0]->slug;
										?>
											<p class="news-item-category <?php echo esc_attr($cat_color); ?>"><?php echo esc_html($cat_name); ?></p>
										<?php endif; ?>
									</div>
									<p class="news-item-title"><?php the_title(); ?></p>
								</div>
							</a>
						</li>
					<?php endwhile; ?>
				</ul>

				<!-- ページネーション -->
				<div class="pagenavi">
					<div class="pagenavi__inner">
						<?php wp_pagenavi(); ?>
					</div>
				</div>
			</div>
		<?php else : ?>
			<p>該当する記事はありません。</p>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>