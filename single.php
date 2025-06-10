		<?php get_header(); ?>

		<section class="news-sub">
			<?php if (have_posts()) : ?>
				<div class="contents-wrapper fade-in">
					<?php while (have_posts()) : the_post(); ?>
						<div class="news-sub-wrapper news-item">
							<div class="news-item-meta">
								<?php $cat = get_the_category();
								// var_dump($cat);
								$cat_name = $cat[0]->cat_name;
								$cat_color = $cat[0]->slug; ?>
								<p class="news-item-category <?php echo $cat_color ?>"><?php echo $cat_name ?></p>
								<p class="news-item-date"><?php the_time('Y.m/d'); ?></p>

							</div>
							<p class="news-sub-title"><?php the_title(); ?></p>

							<div class="news-sub-body-content">
								<?php the_content(); ?>
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
			<div class="pagenavi-news-sub">
				<div class="pagenavi-news-sub-content">
					<!-- <div class="wp-pagenavi wp-pagenavi--sub-blog" role="navigation"> -->
					<?php if (!empty($prev)) : ?>
						<a class="pagenavi-news-sub-prev" rel="prev" href="<?php echo $prev_url; ?>"><span class="pc">前のページ</span></a>
					<?php endif; ?>
					<a href="<?php echo esc_url(home_url('/news/')); ?>" class="news-top-link"><span class="pc">お知らせ</span>一覧に戻る</a>
					<?php if (!empty($next)) : ?>
						<a class="pagenavi-news-sub-next " rel="next" href="<?php echo $next_url; ?>"><span class="pc">次のページ</span></a>
					<?php endif; ?>
				</div>
			</div>
		</section>

		<?php get_footer(); ?>