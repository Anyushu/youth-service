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
<div class="outermenu">
<input class="outermenu--toggle" type="checkbox">
<div class="hamburger"><div></div></div>
<!-- hamburger -->
<div class="outermenu__wrap">
<div class="outermenu__wrap__inner">
<div>
</div>
</div>
</div>
<!-- outermenu__wrap -->
</div>
<!-- outermenu -->
</header>
<!-- header -->

<main>
