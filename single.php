		<?php get_header(); ?>

		<section class="sub-fv">
			<div class="sub-fv-wrapper">
				<div class="sub-fv-bg">
					<!-- <video src="" autoplay muted loop playsinline></video> -->
					<img src="<?php echo get_template_directory_uri(); ?>/images/assets/news-sub-fv.jpg" alt="FV画像">
				</div>
				<div class="sub-fv-title contents-wrapper">
					<h1 class="sub-fv-title-en">
						news
						<span class="sub-fv-title-ja">お知らせ</span>
					</h1>
				</div>
			</div>
		</section>

		<section class="news-sub">
			<?php if (have_posts()) : ?>
				<div class="news-sub-wrapper contents-wrapper fade-in">
					<?php while (have_posts()) : the_post(); ?>
						<div class="news-sub-body-item news-item">
							<div class="news-item-meta">
								<p class="news-item-date"><?php the_time('Y.m/d'); ?></p>
								<?php $cat = get_the_category();
								// var_dump($cat);
								$cat_name = $cat[0]->cat_name;
								$cat_color = $cat[0]->slug; ?>
								<p class="news-item-category <?php echo $cat_color ?>"><?php echo $cat_name ?></p>
							</div>
							<p class="news-item-title"><?php the_title(); ?></p>
						</div>
						<div class="news-sub-wrapper-mini contents-wrapper-mini">
							<div class="news-sub-body-img">
								<?php if (get_the_post_thumbnail()) : ?>
									<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>">
								<?php else : ?>
									<img class="noimage" src="<?php echo esc_url(get_theme_file_uri('/images/assets/noimage.jpg')); ?>" alt="noimage">
								<?php endif; ?>
							</div>
							<div class="news-sub-body-text">
								<?php echo get_the_content(); ?>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>

			<?php
			$prev = get_previous_post();
			if (!empty($prev)) {
				$prev_url = esc_url(get_permalink($prev->ID));
			}
			$next = get_next_post();
			if (!empty($next)) {
				$next_url = esc_url(get_permalink($next->ID));
			}
			?>
			<div class="pagenavi pagenavi-news-sub">
				<div class="pagenavi__inner pagenavi__inner--sub-blog">
					<div class="wp-pagenavi wp-pagenavi--sub-blog" role="navigation">
						<?php if (!empty($prev)) : ?>
							<a class="previouspostslink" rel="prev" href="<?php echo $prev_url; ?>"></a>
						<?php endif; ?>
						<a href="<?php echo esc_url(home_url('/news/')); ?>" class="news-top-link">一覧へ</a>
						<?php if (!empty($next)) : ?>
							<a class="nextpostslink" rel="next" href="<?php echo $next_url; ?>"></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
			</div>
		</section>

		<?php get_footer(); ?>