		<?php get_header(); ?>



		<section class="sub-fv">
			<div class="sub-fv-wrapper">
				<div class="sub-fv-bg">
					<img src="<?php echo get_template_directory_uri(); ?>/images/assets/contact-fv.jpg" alt="FV画像">
				</div>
				<div class="sub-fv-title contents-wrapper">
					<h1 class="sub-fv-title-en">
						contact
						<span class="sub-fv-title-ja">お問い合わせ</span>
					</h1>
				</div>
			</div>
		</section>


<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

		<section class="contact">
			<div class="contents-wrapper fade-in">
				<p class="contact-read">
					製品や当社に関するご質問、製品のご依頼は、お問い合わせフォームにて受け付けております。<br>
					必要事項をご記入の上、送信を押してください。
				</p>
				<?php echo do_shortcode('[contact-form-7 id="a86eb90" title="コンタクトフォーム 1"]'); ?>

			</div>
		</section>

		<section class="contact">
			<div class="contents-wrapper fade-in">
				<p class="contact-read">
					製品や当社に関するご質問、製品のご依頼は、お問い合わせフォームにて受け付けております。<br>
					必要事項をご記入の上、送信を押してください。
				</p>
				<div class="form-container">
					<div class="form-wrap">
						<div class="form-checkbox">
							<label><input type="checkbox" name="checkbox1" value="製品について"> 製品について</label>
							<label><input type="checkbox" name="checkbox1" value="お見積り"> お見積り</label>
							<label><input type="checkbox" name="checkbox1" value="その他のご相談"> その他のご相談</label>
						</div>
					</div>

					<div class="form-wrap">
						<div class="form-wrap-title">
							<span class="form-label-item">お名前（漢字）</span>
							<span class="form-label-required"><span>*</span>必須</span>
						</div>
						<div class="form-wrap-content">
							<div class="form-input-half">
								<input type="text" name="last-name10" placeholder="姓" required>
							</div>
							<div class="form-input-half">
								<input type="text" name="first-name11" placeholder="名" required>
							</div>
						</div>
					</div>

					<div class="form-wrap">
						<div class="form-wrap-title">
							<span class="form-label-item">お名前（全角カナ）</span>
							<span class="form-label-required"><span>*</span>必須</span>
						</div>
						<div class="form-wrap-content">
							<div class="form-input-half">
								<input type="text" name="last-name20" placeholder="セイ" required>
							</div>
							<div class="form-input-half">
								<input type="text" name="first-name22" placeholder="メイ" required>
							</div>
						</div>
					</div>

					<div class="form-wrap">
						<div class="form-wrap-title">
							<span class="form-label-item">会社名</span>
						</div>
						<div class="form-wrap-content">
							<div class="form-input-text">
								<input type="text" name="company10" placeholder="会社名">
							</div>
						</div>
					</div>

					<div class="form-wrap">
						<div class="form-wrap-title">
							<span class="form-label-item">会社名 フリガナ</span>
						</div>
						<div class="form-wrap-content">
							<div class="form-input-text">
								<input type="text" name="company20" placeholder="会社名 フリガナ">
							</div>
						</div>
					</div>

					<div class="form-wrap">
						<div class="form-wrap-title">
							<span class="form-label-item">メールアドレス</span>
							<span class="form-label-required"><span>*</span>必須</span>
						</div>
						<div class="form-wrap-content">
							<div class="form-input-text">
								<input type="email" name="email-79" placeholder="example@mail.com" required>
							</div>
						</div>
					</div>

					<div class="form-wrap">
						<div class="form-wrap-title">
							<span class="form-label-item">電話番号</span>
						</div>
						<div class="form-wrap-content">
							<div class="form-input-text">
								<input type="tel" name="tel-6" placeholder="09012345678">
							</div>
						</div>
					</div>

					<div class="form-wrap">
						<div class="form-wrap-title">
							<span class="form-label-item">FAX</span>
						</div>
						<div class="form-wrap-content">
							<div class="form-input-text">
								<input type="tel" name="fax-706" placeholder="09012345678">
							</div>
						</div>
					</div>

					<div class="form-wrap">
						<div class="form-wrap-title">
							<span class="form-label-item">お問い合わせ内容</span>
							<span class="form-label-required"><span>*</span>必須</span>
						</div>
						<div class="form-wrap-content">
							<div class="form-input-textarea">
								<textarea name="textarea-210" placeholder="お問い合わせ内容を入力してください" required></textarea>
							</div>
						</div>
					</div>

					<p class="form-recaptcha">
						このサイトはreCAPTCHAによって保護されており、Googleの
						<a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">プライバシーポリシー</a>
						と利用規約が適用されます
					</p>

					<div class="form-button">
						<input type="submit" value=送信>
					</div>
				</div>
			</div>
		</section>



		<?php get_footer(); ?>