		<?php get_header(); ?>

		<section class="sub-fv">
			<div class="sub-fv-wrapper">
				<div class="sub-fv-bg sub-fv-bg-overview">
					<!-- <video src="" autoplay muted loop playsinline></video> -->
					<img src="<?php echo get_template_directory_uri(); ?>/images/assets/company-fv.jpg" alt="FV画像">
				</div>
				<div class="sub-fv-title contents-wrapper">
					<h1 class="sub-fv-title-en">
						company
						<span class="sub-fv-title-ja">会社情報</span>
					</h1>
				</div>
			</div>
		</section>


<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>

		<section class="overview">
			<div class="overview-wrapper contents-wrapper fade-in">
				<h2 class="overview-title page-title">
					<span class="page-title-en page-title-en-top">company</span>
					<span class="page-title-en page-title-en-bottom">overview</span>
					<span class="page-title-ja">会社概要</span>
				</h2>
				<div class="overview-wrapper-mini contents-wrapper-mini">
					<dl class="overview-profile">
						<dt class="overview-profile-term">会社名</dt>
						<dd class="overview-profile-description">株式会社ケイ・エス・アイ</dd>
					</dl>
					<dl class="overview-profile">
						<dt class="overview-profile-term">所在地</dt>
						<dd class="overview-profile-description">
							<address>
								〒252-0244<br>
								神奈川県相模原市中央区田名3892-2
							</address>
						</dd>
					</dl>
					<dl class="overview-profile">
						<dt class="overview-profile-term">電話番号</dt>
						<dd class="overview-profile-description">（代表）042-763-6192</dd>
					</dl>
					<dl class="overview-profile">
						<dt class="overview-profile-term">FAX</dt>
						<dd class="overview-profile-description">042-763-6193</dd>
					</dl>
					<dl class="overview-profile">
						<dt class="overview-profile-term">設立年月日</dt>
						<dd class="overview-profile-description">1987年3月27日</dd>
					</dl>
					<dl class="overview-profile">
						<dt class="overview-profile-term">資本金</dt>
						<dd class="overview-profile-description">1,000万円</dd>
					</dl>
					<dl class="overview-profile">
						<dt class="overview-profile-term">代表取締役</dt>
						<dd class="overview-profile-description">小平 雅重</dd>
					</dl>
					<dl class="overview-profile">
						<dt class="overview-profile-term">事業内容</dt>
						<dd class="overview-profile-description">
							<ol type="1" class="business-lists">
								<li class="business-list">省エネ発電装置及び自家発電設備の設計、施工、保守、管理及び販売</li>
								<li class="business-list">管工事の設計、施工、保守、管理及び販売</li>
								<li class="business-list">電気制御盤､空気制御、油圧制御システムの設計、施工、保守、管理及び販売</li>
								<li class="business-list">1.~3.に付帯する⼀切の業務</li>
							</ol>
							<p class="business-license">建設業許可第50029</p>
						</dd>
					</dl>
					<dl class="overview-profile">
						<dt class="overview-profile-term">取引銀行</dt>
						<dd class="overview-profile-description">
							<ul class="bank-lists">
								<li class="bank-list">りそな銀行伊勢原支店</li>
								<li class="bank-list">きらぼし銀行</li>
								<li class="bank-list">商工中金横浜西口支店</li>
							</ul>
						</dd>
					</dl>
					<dl class="overview-profile">
						<dt class="overview-profile-term">主要取引先</dt>
						<dd class="overview-profile-description">国内メーカー</dd>
					</dl>

				</div>
			</div>
		</section>

		<section class="overview">
			<div class="overview-wrapper contents-wrapper fade-in">
				<h2 class="overview-title page-title">
					<span class="page-title-en page-title-en-top">company</span>
					<span class="page-title-en page-title-en-bottom">overview</span>
					<span class="page-title-ja">会社概要</span>
				</h2>
				<div class="overview-wrapper-mini contents-wrapper-mini">
					<?php $company_name = get_field('company_name'); ?>
					<?php if (!empty($company_name)) : ?>
						<dl class="overview-profile">
							<dt class="overview-profile-term">会社名</dt>
							<dd class="overview-profile-description"><?php echo $company_name; ?></dd>
						</dl>
					<?php endif; ?>
					<?php $company_dress = get_field('company_dress'); ?>
					<?php if (!empty($company_dress)) : ?>
						<dl class="overview-profile">
							<dt class="overview-profile-term">所在地</dt>
							<dd class="overview-profile-description">
								<address>
									<?php echo $company_dress; ?>
								</address>
							</dd>
						</dl>
					<?php endif; ?>
					<?php $tel = get_field('tel'); ?>
					<?php if (!empty($tel)) : ?>
						<dl class="overview-profile">
							<dt class="overview-profile-term">電話番号</dt>
							<dd class="overview-profile-description"><?php echo $tel; ?></dd>
						</dl>
					<?php endif; ?>
					<?php $fax = get_field('fax'); ?>
					<?php if (!empty($fax)) : ?>
						<dl class="overview-profile">
							<dt class="overview-profile-term">FAX</dt>
							<dd class="overview-profile-description"><?php echo $fax; ?></dd>
						</dl>
					<?php endif; ?>
					<?php $establishment = get_field('establishment'); ?>
					<?php if (!empty($establishment)) : ?>
						<dl class="overview-profile">
							<dt class="overview-profile-term">設立年月日</dt>
							<dd class="overview-profile-description"><?php echo $establishment; ?></dd>
						</dl>
					<?php endif; ?>
					<?php $capital = get_field('capital'); ?>
					<?php if (!empty($capital)) : ?>
						<dl class="overview-profile">
							<dt class="overview-profile-term">資本金</dt>
							<dd class="overview-profile-description"><?php echo $capital; ?></dd>
						</dl>
					<?php endif; ?>
					<?php $president = get_field('president'); ?>
					<?php if (!empty($president)) : ?>
						<dl class="overview-profile">
							<dt class="overview-profile-term">代表取締役</dt>
							<dd class="overview-profile-description"><?php echo $president; ?></dd>
						</dl>
					<?php endif; ?>
					<?php $business_details = get_field('business_details'); ?>
					<?php if (!empty($business_details)) : ?>
						<dl class="overview-profile">
							<dt class="overview-profile-term">事業内容</dt>
							<dd class="overview-profile-description">
								<?php echo $business_details; ?>
							</dd>
						</dl>
					<?php endif; ?>
					<?php $bank = get_field('bank'); ?>
					<?php if (!empty($bank)) : ?>
						<dl class="overview-profile">
							<dt class="overview-profile-term">取引銀行</dt>
							<dd class="overview-profile-description">
								<?php echo $bank; ?>
							</dd>
						</dl>
					<?php endif; ?>
					<?php $business_partners = get_field('business_partners'); ?>
					<?php if (!empty($business_partners)) : ?>
						<dl class="overview-profile">
							<dt class="overview-profile-term">主要取引先</dt>
							<dd class="overview-profile-description"><?php echo $business_partners; ?></dd>
						</dl>
					<?php endif; ?>
				</div>
			</div>
					</section>


			<?php get_footer(); ?>