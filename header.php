<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php wp_head(); ?>
<?php if (!is_user_logged_in()): ?>
<?php endif; ?>
</head>

<body>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v7.0"></script>

<header class="header container bg-white">

<h1 class="header__h1"><a href="<?php echo $home; ?>"><img src="<?php echo $wp_url; ?>/dist/images/logo.png" alt="<?php the_title(); ?>"></a></h1>

<nav class="header__nav">
<ul class="header__nav__list">
<li class="header__nav__list__inner"><a href="<?php echo $home; ?>/camplist/"><img src="<?php echo $wp_url; ?>/dist/images/head_icon_1.png" alt="募集中キャンプ一覧"><span>募集中キャンプ一覧</span></a></li>
<li class="header__nav__list__inner"><a href="<?php echo $home; ?>/program/"><img src="<?php echo $wp_url; ?>/dist/images/head_icon_2.png" alt="学校・企業の方へ"><span>学校・企業の方へ</span></a></li>
<li class="header__nav__list__inner"><a href="<?php echo $home; ?>/facility/"><img src="<?php echo $wp_url; ?>/dist/images/head_icon_3.png" alt="キャンプ場案内"><span>キャンプ場案内</span></a></li>
</ul>
</nav>

<div class="navigation">
<input type="checkbox" class="navigation__checkbox" id="navi-toggle">
<label for="navi-toggle" class="navigation__button">
<span class="navigation__icon">&nbsp;</span>
<p>MENU</p>
</label>
<div class="navigation__background">&nbsp;</div>
<nav class="navigation__nav">
<div class="container">
<div class="outermenu__wrap__inner__logo">
<a href="<?php echo $home; ?>/"><img src="<?php echo $wp_url; ?>/dist/images/logo_white.png" alt="<?php the_title(); ?>"></a>
</div>
<div class="outermenu__wrap__inner__box">
<div class="outermenu__wrap__inner__box__list">
<a href="<?php echo $home; ?>/camplist/"><img src="<?php echo $wp_url; ?>/dist/images/head_icon_1.png" alt="募集中キャンプ一覧"><span>募集中キャンプ一覧</span></a>
<a href="<?php echo $home; ?>/program/"><img src="<?php echo $wp_url; ?>/dist/images/head_icon_2.png" alt="学校・企業の方へ"><span>学校・企業の方へ</span></a>
<a href="<?php echo $home; ?>/facility/"><img src="<?php echo $wp_url; ?>/dist/images/head_icon_3.png" alt="キャンプ場案内"><span>キャンプ場案内</span></a>
</div>
<div class="outermenu__wrap__inner__box__links">
<a class="d-md-block d-none" href="<?php echo $home; ?>/beginner/"><i class="fas fa-chevron-circle-right text-success mr-2"></i>はじめての方へ</a>
<a class="d-md-block d-none" href="<?php echo $home; ?>/gallery/"><i class="fas fa-chevron-circle-right text-success mr-2"></i>写真ギャラリー</a>
<a class="d-md-block d-none" href="<?php echo $home; ?>/status/login/"><i class="fas fa-chevron-circle-right text-success mr-2"></i>ご入金・参加カード提出確認</a>
<a class="d-md-block d-none" href="<?php echo $home; ?>/news/"><i class="fas fa-chevron-circle-right text-success mr-2"></i>新着情報</a>
<a class="d-md-block d-none" href="<?php echo $home; ?>/about/"><i class="fas fa-chevron-circle-right text-success mr-2"></i>団体概要</a>
<a class="d-md-block d-none" href="<?php echo $home; ?>/recruit/"><i class="fas fa-chevron-circle-right text-success mr-2"></i>採用情報</a>

<a class="d-md-none" href="<?php echo $home; ?>/beginner/"><i class="fas fa-chevron-circle-right text-success mr-2"></i>はじめての方へ</a>
<a class="d-md-none" href="<?php echo $home; ?>/news/"><i class="fas fa-chevron-circle-right text-success mr-2"></i>新着情報</a>
<a class="d-md-none" href="<?php echo $home; ?>/gallery/"><i class="fas fa-chevron-circle-right text-success mr-2"></i>写真ギャラリー</a>
<a class="d-md-none" href="<?php echo $home; ?>/about/"><i class="fas fa-chevron-circle-right text-success mr-2"></i>団体概要</a>
<a class="d-md-none" href="<?php echo $home; ?>/status/login/"><i class="fas fa-chevron-circle-right text-success mr-2"></i>ご入金・参加カード提出確認</a>
<a class="d-md-none" href="<?php echo $home; ?>/recruit/"><i class="fas fa-chevron-circle-right text-success mr-2"></i>採用情報</a>
</div>
<div class="outermenu__wrap__inner__box__bottom">
<div class="footer__about__logo__link">
<a href="<?php echo $home; ?>/pdf/condition.pdf">標識・旅行条件書他</a>
<a href="<?php echo $home; ?>/privacy-policy/">プライバシーポリシー</a>
</div>
<a href="tel:0665617800"><img src="<?php echo $wp_url; ?>/dist/images/btn_tel.png" alt="電話"></a>
</div>
</div>
</div>
</nav>
</div>

<!-- <div class="outermenu">
<input class="outermenu--toggle" type="checkbox">
<div class="hamburger">
<img src="<?php echo $wp_url; ?>/dist/images/btn_menu.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/btn_menu.png 1x, <?php echo $wp_url; ?>/dist/images/btn_menu@2x.png 2x">
</div>
</div> -->

</header>
<!-- header -->

<!-- <div class="outermenu__wrap">
<div class="outermenu__wrap__inner">
<div class="container position-relative">
<div class="outermenu__wrap__inner__close"><img src="<?php echo $wp_url; ?>/dist/images/bnt_close.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/bnt_close.png 1x, <?php echo $wp_url; ?>/dist/images/bnt_close@2x.png 2x"></div>
<div class="outermenu__wrap__inner__logo">
<a href="<?php echo $home; ?>/"><img src="<?php echo $wp_url; ?>/dist/images/logo_white.png" alt="<?php the_title(); ?>"></a>
</div>
<div class="outermenu__wrap__inner__box">
<div class="outermenu__wrap__inner__box__list">
<a href="<?php echo $home; ?>/camplist/"><img src="<?php echo $wp_url; ?>/dist/images/head_icon_1.png" alt="募集中キャンプ一覧"><span>募集中キャンプ一覧</span></a>
<a href="<?php echo $home; ?>/program/"><img src="<?php echo $wp_url; ?>/dist/images/head_icon_2.png" alt="学校・企業の方へ"><span>学校・企業の方へ</span></a>
<a href="<?php echo $home; ?>/facility/"><img src="<?php echo $wp_url; ?>/dist/images/head_icon_3.png" alt="キャンプ場案内"><span>キャンプ場案内</span></a>
</div>
<div class="outermenu__wrap__inner__box__links">
<a class="d-md-block d-none" href="<?php echo $home; ?>/beginner/"><i class="fas fa-chevron-circle-right text-success mr-2"></i>はじめての方へ</a>
<a class="d-md-block d-none" href="<?php echo $home; ?>/gallery/"><i class="fas fa-chevron-circle-right text-success mr-2"></i>写真ギャラリー</a>
<a class="d-md-block d-none" href="<?php echo $home; ?>/status/login/"><i class="fas fa-chevron-circle-right text-success mr-2"></i>ご入金・参加カード提出確認</a>
<a class="d-md-block d-none" href="<?php echo $home; ?>/news/"><i class="fas fa-chevron-circle-right text-success mr-2"></i>新着情報</a>
<a class="d-md-block d-none" href="<?php echo $home; ?>/about/"><i class="fas fa-chevron-circle-right text-success mr-2"></i>団体概要</a>
<a class="d-md-block d-none" href="<?php echo $home; ?>/recruit/"><i class="fas fa-chevron-circle-right text-success mr-2"></i>採用情報</a>

<a class="d-md-none" href="<?php echo $home; ?>/beginner/"><i class="fas fa-chevron-circle-right text-success mr-2"></i>はじめての方へ</a>
<a class="d-md-none" href="<?php echo $home; ?>/news/"><i class="fas fa-chevron-circle-right text-success mr-2"></i>新着情報</a>
<a class="d-md-none" href="<?php echo $home; ?>/gallery/"><i class="fas fa-chevron-circle-right text-success mr-2"></i>写真ギャラリー</a>
<a class="d-md-none" href="<?php echo $home; ?>/about/"><i class="fas fa-chevron-circle-right text-success mr-2"></i>団体概要</a>
<a class="d-md-none" href="<?php echo $home; ?>/status/login/"><i class="fas fa-chevron-circle-right text-success mr-2"></i>ご入金・参加カード提出確認</a>
<a class="d-md-none" href="<?php echo $home; ?>/recruit/"><i class="fas fa-chevron-circle-right text-success mr-2"></i>採用情報</a>
</div>
<div class="outermenu__wrap__inner__box__bottom">
<div class="footer__about__logo__link">
<a href="<?php echo $home; ?>/pdf/condition.pdf">標識・旅行条件書他</a>
<a href="<?php echo $home; ?>/privacy-policy/">プライバシーポリシー</a>
</div>
<a href="tel:0665617800"><img src="<?php echo $wp_url; ?>/dist/images/btn_tel.png" alt="電話"></a>
</div>
</div>
</div>
</div>
</div> -->

<main>
