<footer class="footer">
	<?php if (!is_front_page() && !is_home() && !is_category() && !is_single() && !is_page('contact') && !is_page('entry')) : ?>

	<?php endif; ?>
	<div class="footer-bg"></div>
	<div class="contents-wrapper">

		<div class="footer-content">
			<div class="footer-contact">
				<p class="footer-contact-title">
					ご予約・お問い合わせ
				</p>
				<div class="footer-contact-body">
					<p class="footer-contact-text">
						下記より、お気軽にお問い合わせください。
					</p>
					<div>
						<div class="footer-tel header-nav-contact">
							<a href="<?php echo esc_url(home_url('/contact/')); ?>">
								<div class="header-nav-contact-icon">
									<img src="<?php echo get_template_directory_uri(); ?>/images/assets/phone-icon.svg" alt="電話マークアイコン">
								</div>
								<div class="header-nav-contact-body">
									<span class="header-nav-tel">0266-78-6543</span>
									<span class="header-nav-time">営業時間&emsp;18：00〜22：00</span>
								</div>
							</a>
						</div>
					</div>
					<p class="
				contact-seat footer-contact-seat">席数：カウンター8席・6人掛けテーブル4つ</p>
					<p class="contact-parking footer-contact-parking">駐車場：あり（6台）</p>
					<p class="contact-payment footer-contact-payment">お支払い：各種クレジットカード、交通系IC、PayPay<br>インボイス対応可</p>
				</div>
				<div class="footer-contact-button botton-white">
					<a href="<?php echo esc_url(home_url('/contact/')); ?>">
						contact
					</a>
				</div>
			</div>
			<div class="footer-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3227.2651063091585!2d138.1265568!3d36.0138191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601c568e947dc0eb%3A0x7643fd9222febd78!2z44CSMzkyLTAwMTIg6ZW36YeO55yM6KuP6Kiq5biC5aSn5a2X5Zub6LOA77yS77yT77yU77yU4oiS77yT!5e0!3m2!1sja!2sjp!4v1749260243775!5m2!1sja!2sjp" width="1200" height="454" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="footer-bottom">
				<div class="footer-bottom-logo">
					<a href="<?php echo esc_url(home_url('/')); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/assets/logo.svg" alt="ロゴ">
					</a>
				</div>
				<div class="footer-bottom-instagram">
					<a href="https://www.instagram.com/tatsujin_suwa/" target="_blank" rel="noopener noreferrer">
						<img src="<?php echo get_template_directory_uri(); ?>/images/assets/instagram-icon.svg" alt="インスタグラムアイコン">
					</a>
				</div>
			</div>
		</div>
</footer>

<div id="js-pagetop" class="pagetop">page top<span class="arrow"></span></div>

<?php wp_footer(); ?>

<!-- Javascript -->
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js?ver=<?php echo date('Ymd'); ?>"></script>

</body>

</html>