		<?php get_header(); ?>

		<section class="sub-fv">
			<h1 class="sub-fv-title">
				contact
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


		<section class="contact">
			<div class="contact-wrapper contents-wrapper fade-in">
				<div class="contact-tel-content">
					<div class="contact-tel-body">
						<p class="contact-tel-title">お電話でのご予約</p>
						<p class="contact-tel-text">ご予約の方はお電話で承っております。<br>お気軽にご連絡くださいませ。</p>
						<p class="contact-seat">席数：カウンター8席・6人掛けテーブル4つ</p>
						<p class="contact-parking">駐車場：あり（6台）</p>
						<p class="contact-payment">お支払い：各種クレジットカード、交通系IC、PayPay<span class="sp">、</span><span class="br-span">インボイス対応可</span></p>
					</div>
					<div class="contact-number-body">
						<a href="tel:0266-78-6543" class="tel-link">
							<div class="contact-number-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/images/assets/phone-icon.svg" alt="電話マークアイコン">

							</div>
							<div class="contact-number-box">
								<span class="contact-number-tel">0266-78-6543</span>
								<span class="contact-number-time">営業時間&emsp;18：00〜22：00</span>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>

		<section class="form">
			<div class="contents-wrapper fade-in">
				<div class="form-wrapper color-white">
					<h2 class="form-title">
						Mail Form
					</h2>
					<p class="form-read">メールフォームでのお問い合わせ</p>
					<div class="form-content">
						<?php echo do_shortcode('[contact-form-7 id="94c43e8" title="お問い合わせ"]'); ?>
					</div>
				</div>
			</div>
		</section>


		<?php get_footer(); ?>