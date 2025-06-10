<!DOCTYPE html>
<html lang="ja">

<head>
	<?php wp_head() ?>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<!-- Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Noto+Serif+JP:wght@200..900&family=Shippori+Mincho:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- Favicon -->
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/assets/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/assets/apple-touch-icon.png">
	<!-- swiper css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
	<!-- Css -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/base.css?ver=<?php echo date('Ymd'); ?>" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/main.css?ver=<?php echo date('Ymd'); ?>" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/style.css?ver=<?php echo date('Ymd'); ?>" rel="stylesheet">
	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<!-- Drawer -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/css/drawer.min.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
	<!-- swiper script-->
	<script defer src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
	<?php include(dirname(__FILE__) . "/assets/site-data.php"); ?>
</head>

<body class="<?php if (is_front_page()) : ?>body<?php endif; ?>">

	<header class="header js-header <?php if (is_single()) : ?>header-bg<?php endif; ?>">
		<div class="header-inner <?php if (is_front_page()) : ?>flex-end<?php endif; ?>">
			<div class="header-logo <?php if (is_front_page()) : ?>header-none<?php endif; ?>">
				<a href="<?php echo esc_url(home_url('/')); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/assets/logo.svg" alt="ロゴ">
				</a>
			</div>
			<nav class="header-nav">
				<div class="header-nav-contact-icon-sp">
					<a href="tel:0266-72-5669">
						<img src="<?php echo get_template_directory_uri(); ?>/images/assets/phone-icon.svg" alt="電話マークアイコン">
					</a>
				</div>
				<div class="header-nav-contact pc">
					<a href="<?php echo esc_url(home_url('/contact/')); ?>">
						<!-- <div class="header-nav-contact-wrapper"> -->
						<div class="header-nav-contact-icon">
							<img src="<?php echo get_template_directory_uri(); ?>/images/assets/phone-icon.svg" alt="電話マークアイコン">
						</div>
						<div class="header-nav-contact-body">
							<span class="header-nav-tel">0266-78-6543</span>
							<span class="header-nav-time">営業時間&emsp;18：00〜22：00</span>
						</div>
						<!-- </div> -->
					</a>
				</div>
				<button class="header-hamburger">
					<div class="header-hamburger-img js-hamburger">
						<img src="<?php echo get_template_directory_uri(); ?>/images/assets/yakitori-icon.svg" alt="焼き鳥のアイコン">
					</div>
				</button>
			</nav>
			<div class="header-drawer js-drawer">
				<nav class="header-drawer-nav">
					<div class="header-drawer-nav-content">
						<ul class="header-drawer-nav-lists">
							<li class="header-drawer-nav-list">
								<a href="<?php echo esc_url(home_url('/menu/')); ?>">
									お品書き・お飲み物
								</a>
							</li>
							<li class="header-drawer-nav-list">
								<a href="<?php echo esc_url(home_url('/news/')); ?>">
									お知らせ
								</a>
							</li>
							<li class="header-drawer-nav-list">
								<a href="<?php echo esc_url(home_url('/nikai/')); ?>">
									信州みそホルモンNIKAI
								</a>
							</li>
							<li class="header-drawer-nav-list">
								<a href="<?php echo esc_url(home_url('/other-business/')); ?>">
									Other Business
								</a>
							</li>
							<li class="header-drawer-nav-list">
								<a href="<?php echo esc_url(home_url('/company/')); ?>">
									運営会社情報
								</a>
							</li>

							<li class="header-drawer-nav-list">
								<a href="<?php echo esc_url(home_url('/recruit/')); ?>">
									採用情報
								</a>
							</li>
						</ul>
						<div class="header-drawer-contact">
							<p class="header-drawer-contact-text">ご予約・お問い合わせ</p>
							<div class="header-nav-contact ">
								<a href="<?php echo esc_url(home_url('/contact/')); ?>">
									<!-- <div class="header-nav-contact-wrapper"> -->
									<div class="header-nav-contact-icon">
										<img src="<?php echo get_template_directory_uri(); ?>/images/assets/phone-icon.svg" alt="電話マークアイコン">
									</div>
									<div class="header-nav-contact-body">
										<span class="header-nav-tel">0266-78-6543</span>
										<span class="header-nav-time">営業時間&emsp;18：00〜22：00</span>
									</div>
									<!-- </div> -->
								</a>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header>