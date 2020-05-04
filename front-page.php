<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<div class="home__mv">
<img class="w-100 img-switch" src="<?php echo $wp_url; ?>/dist/images/mv_pc.png" srcset="<?php echo $wp_url; ?>/dist/images/mv_pc.png 1x, <?php echo $wp_url; ?>/dist/images/mv_pc@2x.png 2x" alt="今しかできない体験を！">
</div>
<!-- mv -->
<section class="sec home__read bg-success">
<img src="<?php echo $wp_url; ?>/dist/images/bg_read_top.png" alt="背景">
<div class="container">
<div class="text-center">
<a href="<?php echo $home; ?>/"><img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/top_bnr_4_pc.png" alt="アウトドアリーダー募集"></a>
</div>
<div class="home__read__inner">
<a href="<?php echo $home; ?>/">
<img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/top_bnr_1_pc.png" alt="アウトドアリーダー募集">
<p class="mb-0">現在募集中のキャンプを表示しています！<br>また、こちらからお申し込みもできます。</p>
</a>
<a href="<?php echo $home; ?>/">
<img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/top_bnr_2_pc.png" alt="アウトドアリーダー募集">
<p class="mb-0">「豊かな人間関係」を育む集団活動の機会を提供するプログラム</p>
</a>
<a href="<?php echo $home; ?>/">
<img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/top_bnr_3_pc.png" alt="アウトドアリーダー募集">
<p class="mb-0">ユースサービス大阪が運営しているキャンプ施設をご案内いたします。</p>
</a>
</div>
</div>
<img src="<?php echo $wp_url; ?>/dist/images/bg_read_bottom.png" alt="背景">
</section>
<!-- home__read -->
<section class="sec home__news bg-light">
<div class="container">
<div class="home__news__wrap">
<div class="home__news__wrap__list">
<a class="more-txt" href="<?php echo $home; ?>/news/">一覧を見る<i class="fas fa-play-circle text-success ml-1"></i></a>
<h2 class="home__news__wrap__list__ttl"><span><img src="<?php echo $wp_url; ?>/dist/images/ttl_news_pc.png" alt=""></span></h2>
<ul class="news__list">
<li class="news__list__inner">
<a href="">
<div class="news__list__inner__img">
<img src="<?php echo $wp_url; ?>/dist/images/sample_img.png" alt="">
</div>
<div class="news__list__inner__txt">
<div class="news__list__inner__txt__meta">
<span class="time">2020.04.25</span>
<span class="cat"><span>お知らせ</span></span>
</div>
<h3>ゴールデンウィークのキャンプ情報を更新しました！</h3>
<p>ユースサービス大阪はキャンプやスキーなど子ども達のたくさんの笑顔に出会える楽しいプランを提供し、こころ豊かで健やかな成⻑を⽀援しています。</p>
</div>
</a>
</li>
<!-- news__list__inner -->
</ul>
<!-- news__list -->
</div>
<div class="home__news__wrap__side">
<div class="mb-4"><a href="<?php echo $home; ?>/beginner/"><img src="<?php echo $wp_url; ?>/dist/images/bnr_beginner.png" alt=""></a></div>
<div class="mb-4"><a href="https://www.facebook.com/yso.or.jp" target="_blank"><img src="<?php echo $wp_url; ?>/dist/images/bnr_facebook.png" alt=""></a></div>
<div><a href="https://www.instagram.com/yso̲camp/" target="_blank"><img src="<?php echo $wp_url; ?>/dist/images/bnr_instagram.png" alt=""></a></div>
</div>
</div>
</div>
<img class="w-100" src="<?php echo $wp_url; ?>/dist/images/bg_circle_pc.png" alt="">
</section>
<!-- home__news -->
<section class="sec home__camp bg-success">
<div class="container">
<h2 class="text-center"><img src="<?php echo $wp_url; ?>/dist/images/ttl_camp_pc.png" alt=""></h2>
</div>
</section>
<!-- home__camp -->
<?php get_footer();