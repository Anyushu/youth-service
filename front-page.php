<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<div class="home__mv">
<div class="container h-100">
<div class="home__mv__copy">
<p>
<img class="w-100" src="<?php echo $wp_url; ?>/dist/images/mv_balloon_pc.png" alt="今しかできない" srcset="<?php echo $wp_url; ?>/dist/images/mv_balloon_pc.png 1x, <?php echo $wp_url; ?>/dist/images/mv_balloon_pc@2x.png 2x">
</p>
<p>
<img class="w-100" src="<?php echo $wp_url; ?>/dist/images/mv_copy_pc.png" alt="今しかできない" srcset="<?php echo $wp_url; ?>/dist/images/mv_copy_pc.png 1x, <?php echo $wp_url; ?>/dist/images/mv_copy_pc@2x.png 2x">
</p>
<p class="mb-0 home__mv__copy__txt">ユースサービス大阪はキャンプやスキーなど
<br>子ども達のたくさんの笑顔に出会える楽しいプランを提供し、
<br>こころ豊かで健やかな成⻑を⽀援しています。</p>
</div>

<!-- swiper -->
<div class="home__mv__slide--1">
<?php for ($i=1; $i <= 8; $i++): ?>
<div><img src="<?php echo $wp_url; ?>/dist/images/img_<?php echo $i; ?>.png" alt="スライダー<?php echo $i; ?>"></div>
<?php endfor; ?>
</div>
<div class="home__mv__slide--2">
<?php for ($i=9; $i <= 16; $i++): ?>
<div><img src="<?php echo $wp_url; ?>/dist/images/img_<?php echo $i; ?>.png" alt="スライダー<?php echo $i; ?>"></div>
<?php endfor; ?>
</div>
<div class="home__mv__slide--3">
<?php for ($i=17; $i <= 24; $i++): ?>
<div><img src="<?php echo $wp_url; ?>/dist/images/img_<?php echo $i; ?>.png" alt="スライダー<?php echo $i; ?>"></div>
<?php endfor; ?>
</div>
<div class="home__mv__slide--4">
<?php for ($i=25; $i <= 32; $i++): ?>
<div><img src="<?php echo $wp_url; ?>/dist/images/img_<?php echo $i; ?>.png" alt="スライダー<?php echo $i; ?>"></div>
<?php endfor; ?>
</div>

</div>
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
<h2 class="text-center mb-5"><img src="<?php echo $wp_url; ?>/dist/images/ttl_camp_pc.png" alt=""></h2>
</div>

<div class="home__camp__slide">
<div class="camplist">
<div class="camplist__inner">
<div class="camplist__inner__tag">
<img src="<?php echo $wp_url; ?>/dist/images/tag_camp.png" alt="タグ">
</div>
<div class="camplist__inner__img">
<img src="<?php echo $wp_url; ?>/dist/images/sample_img.png" alt="">
</div>
<div class="camplist__inner__info">
<span class="camplist__inner__info__status success"><i class="far fa-circle"></i>受付中</span>
<p class="camplist__inner__info__meta">
<span>2020年3月</span>
<span>キャンプ</span>
</p>
<h3 class="camplist__inner__info__ttl">ビッグバンナイトi nミュージアム3月</h3>
<ul class="camplist__inner__info__type">
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_kids.png" alt="アイコン">小学1年生～中学生</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_calendar.png" alt="アイコン">2020年3月21日-3月22日</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_bed.png" alt="アイコン">1泊2日</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_pin.png" alt="アイコン">大阪府立大型児童館ビッグバン</li>
</ul>
<div class="camplist__inner__info__btn">
<a class="more-txt" href="<?php echo $home; ?>/news/">詳しく見る<i class="fas fa-play-circle text-success ml-1"></i></a>
</div>
</div>
</div>
<!-- camplist__inner -->
<div class="camplist__inner">
<div class="camplist__inner__tag">
<img src="<?php echo $wp_url; ?>/dist/images/tag_camp.png" alt="タグ">
</div>
<div class="camplist__inner__img">
<img src="<?php echo $wp_url; ?>/dist/images/sample_img.png" alt="">
</div>
<div class="camplist__inner__info">
<span class="camplist__inner__info__status warning"><i class="far fa-circle"></i>受付中</span>
<p class="camplist__inner__info__meta">
<span>2020年3月</span>
<span>キャンプ</span>
</p>
<h3 class="camplist__inner__info__ttl">ビッグバンナイトi nミュージアム3月</h3>
<ul class="camplist__inner__info__type">
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_kids.png" alt="アイコン">小学1年生～中学生</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_calendar.png" alt="アイコン">2020年3月21日-3月22日</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_bed.png" alt="アイコン">1泊2日</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_pin.png" alt="アイコン">大阪府立大型児童館ビッグバン</li>
</ul>
<div class="camplist__inner__info__btn">
<a class="more-txt" href="<?php echo $home; ?>/news/">詳しく見る<i class="fas fa-play-circle text-success ml-1"></i></a>
</div>
</div>
</div>
<!-- camplist__inner -->
<div class="camplist__inner">
<div class="camplist__inner__tag">
<img src="<?php echo $wp_url; ?>/dist/images/tag_camp.png" alt="タグ">
</div>
<div class="camplist__inner__img">
<img src="<?php echo $wp_url; ?>/dist/images/sample_img.png" alt="">
</div>
<div class="camplist__inner__info">
<span class="camplist__inner__info__status danger"><i class="far fa-circle"></i>受付中</span>
<p class="camplist__inner__info__meta">
<span>2020年3月</span>
<span>キャンプ</span>
</p>
<h3 class="camplist__inner__info__ttl">ビッグバンナイトi nミュージアム3月</h3>
<ul class="camplist__inner__info__type">
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_kids.png" alt="アイコン">小学1年生～中学生</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_calendar.png" alt="アイコン">2020年3月21日-3月22日</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_bed.png" alt="アイコン">1泊2日</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_pin.png" alt="アイコン">大阪府立大型児童館ビッグバン</li>
</ul>
<div class="camplist__inner__info__btn">
<a class="more-txt" href="<?php echo $home; ?>/news/">詳しく見る<i class="fas fa-play-circle text-success ml-1"></i></a>
</div>
</div>
</div>
<!-- camplist__inner -->
</div>
<!-- camplist -->
<div class="camplist">
<div class="camplist__inner">
<div class="camplist__inner__tag">
<img src="<?php echo $wp_url; ?>/dist/images/tag_camp.png" alt="タグ">
</div>
<div class="camplist__inner__img">
<img src="<?php echo $wp_url; ?>/dist/images/sample_img.png" alt="">
</div>
<div class="camplist__inner__info">
<span class="camplist__inner__info__status success"><i class="far fa-circle"></i>受付中</span>
<p class="camplist__inner__info__meta">
<span>2020年3月</span>
<span>キャンプ</span>
</p>
<h3 class="camplist__inner__info__ttl">ビッグバンナイトi nミュージアム3月</h3>
<ul class="camplist__inner__info__type">
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_kids.png" alt="アイコン">小学1年生～中学生</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_calendar.png" alt="アイコン">2020年3月21日-3月22日</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_bed.png" alt="アイコン">1泊2日</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_pin.png" alt="アイコン">大阪府立大型児童館ビッグバン</li>
</ul>
<div class="camplist__inner__info__btn">
<a class="more-txt" href="<?php echo $home; ?>/news/">詳しく見る<i class="fas fa-play-circle text-success ml-1"></i></a>
</div>
</div>
</div>
<!-- camplist__inner -->
<div class="camplist__inner">
<div class="camplist__inner__tag">
<img src="<?php echo $wp_url; ?>/dist/images/tag_camp.png" alt="タグ">
</div>
<div class="camplist__inner__img">
<img src="<?php echo $wp_url; ?>/dist/images/sample_img.png" alt="">
</div>
<div class="camplist__inner__info">
<span class="camplist__inner__info__status warning"><i class="far fa-circle"></i>受付中</span>
<p class="camplist__inner__info__meta">
<span>2020年3月</span>
<span>キャンプ</span>
</p>
<h3 class="camplist__inner__info__ttl">ビッグバンナイトi nミュージアム3月</h3>
<ul class="camplist__inner__info__type">
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_kids.png" alt="アイコン">小学1年生～中学生</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_calendar.png" alt="アイコン">2020年3月21日-3月22日</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_bed.png" alt="アイコン">1泊2日</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_pin.png" alt="アイコン">大阪府立大型児童館ビッグバン</li>
</ul>
<div class="camplist__inner__info__btn">
<a class="more-txt" href="<?php echo $home; ?>/news/">詳しく見る<i class="fas fa-play-circle text-success ml-1"></i></a>
</div>
</div>
</div>
<!-- camplist__inner -->
<div class="camplist__inner">
<div class="camplist__inner__tag">
<img src="<?php echo $wp_url; ?>/dist/images/tag_camp.png" alt="タグ">
</div>
<div class="camplist__inner__img">
<img src="<?php echo $wp_url; ?>/dist/images/sample_img.png" alt="">
</div>
<div class="camplist__inner__info">
<span class="camplist__inner__info__status danger"><i class="far fa-circle"></i>受付中</span>
<p class="camplist__inner__info__meta">
<span>2020年3月</span>
<span>キャンプ</span>
</p>
<h3 class="camplist__inner__info__ttl">ビッグバンナイトi nミュージアム3月</h3>
<ul class="camplist__inner__info__type">
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_kids.png" alt="アイコン">小学1年生～中学生</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_calendar.png" alt="アイコン">2020年3月21日-3月22日</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_bed.png" alt="アイコン">1泊2日</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_pin.png" alt="アイコン">大阪府立大型児童館ビッグバン</li>
</ul>
<div class="camplist__inner__info__btn">
<a class="more-txt" href="<?php echo $home; ?>/news/">詳しく見る<i class="fas fa-play-circle text-success ml-1"></i></a>
</div>
</div>
</div>
<!-- camplist__inner -->
</div>
<!-- camplist -->
<div class="camplist">
<div class="camplist__inner">
<div class="camplist__inner__tag">
<img src="<?php echo $wp_url; ?>/dist/images/tag_camp.png" alt="タグ">
</div>
<div class="camplist__inner__img">
<img src="<?php echo $wp_url; ?>/dist/images/sample_img.png" alt="">
</div>
<div class="camplist__inner__info">
<span class="camplist__inner__info__status success"><i class="far fa-circle"></i>受付中</span>
<p class="camplist__inner__info__meta">
<span>2020年3月</span>
<span>キャンプ</span>
</p>
<h3 class="camplist__inner__info__ttl">ビッグバンナイトi nミュージアム3月</h3>
<ul class="camplist__inner__info__type">
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_kids.png" alt="アイコン">小学1年生～中学生</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_calendar.png" alt="アイコン">2020年3月21日-3月22日</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_bed.png" alt="アイコン">1泊2日</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_pin.png" alt="アイコン">大阪府立大型児童館ビッグバン</li>
</ul>
<div class="camplist__inner__info__btn">
<a class="more-txt" href="<?php echo $home; ?>/news/">詳しく見る<i class="fas fa-play-circle text-success ml-1"></i></a>
</div>
</div>
</div>
<!-- camplist__inner -->
<div class="camplist__inner">
<div class="camplist__inner__tag">
<img src="<?php echo $wp_url; ?>/dist/images/tag_camp.png" alt="タグ">
</div>
<div class="camplist__inner__img">
<img src="<?php echo $wp_url; ?>/dist/images/sample_img.png" alt="">
</div>
<div class="camplist__inner__info">
<span class="camplist__inner__info__status warning"><i class="far fa-circle"></i>受付中</span>
<p class="camplist__inner__info__meta">
<span>2020年3月</span>
<span>キャンプ</span>
</p>
<h3 class="camplist__inner__info__ttl">ビッグバンナイトi nミュージアム3月</h3>
<ul class="camplist__inner__info__type">
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_kids.png" alt="アイコン">小学1年生～中学生</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_calendar.png" alt="アイコン">2020年3月21日-3月22日</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_bed.png" alt="アイコン">1泊2日</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_pin.png" alt="アイコン">大阪府立大型児童館ビッグバン</li>
</ul>
<div class="camplist__inner__info__btn">
<a class="more-txt" href="<?php echo $home; ?>/news/">詳しく見る<i class="fas fa-play-circle text-success ml-1"></i></a>
</div>
</div>
</div>
<!-- camplist__inner -->
<div class="camplist__inner">
<div class="camplist__inner__tag">
<img src="<?php echo $wp_url; ?>/dist/images/tag_camp.png" alt="タグ">
</div>
<div class="camplist__inner__img">
<img src="<?php echo $wp_url; ?>/dist/images/sample_img.png" alt="">
</div>
<div class="camplist__inner__info">
<span class="camplist__inner__info__status danger"><i class="far fa-circle"></i>受付中</span>
<p class="camplist__inner__info__meta">
<span>2020年3月</span>
<span>キャンプ</span>
</p>
<h3 class="camplist__inner__info__ttl">ビッグバンナイトi nミュージアム3月</h3>
<ul class="camplist__inner__info__type">
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_kids.png" alt="アイコン">小学1年生～中学生</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_calendar.png" alt="アイコン">2020年3月21日-3月22日</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_bed.png" alt="アイコン">1泊2日</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_pin.png" alt="アイコン">大阪府立大型児童館ビッグバン</li>
</ul>
<div class="camplist__inner__info__btn">
<a class="more-txt" href="<?php echo $home; ?>/news/">詳しく見る<i class="fas fa-play-circle text-success ml-1"></i></a>
</div>
</div>
</div>
<!-- camplist__inner -->
</div>
<!-- camplist -->
<div class="camplist">
<div class="camplist__inner">
<div class="camplist__inner__tag">
<img src="<?php echo $wp_url; ?>/dist/images/tag_camp.png" alt="タグ">
</div>
<div class="camplist__inner__img">
<img src="<?php echo $wp_url; ?>/dist/images/sample_img.png" alt="">
</div>
<div class="camplist__inner__info">
<span class="camplist__inner__info__status success"><i class="far fa-circle"></i>受付中</span>
<p class="camplist__inner__info__meta">
<span>2020年3月</span>
<span>キャンプ</span>
</p>
<h3 class="camplist__inner__info__ttl">ビッグバンナイトi nミュージアム3月</h3>
<ul class="camplist__inner__info__type">
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_kids.png" alt="アイコン">小学1年生～中学生</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_calendar.png" alt="アイコン">2020年3月21日-3月22日</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_bed.png" alt="アイコン">1泊2日</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_pin.png" alt="アイコン">大阪府立大型児童館ビッグバン</li>
</ul>
<div class="camplist__inner__info__btn">
<a class="more-txt" href="<?php echo $home; ?>/news/">詳しく見る<i class="fas fa-play-circle text-success ml-1"></i></a>
</div>
</div>
</div>
<!-- camplist__inner -->
<div class="camplist__inner">
<div class="camplist__inner__tag">
<img src="<?php echo $wp_url; ?>/dist/images/tag_camp.png" alt="タグ">
</div>
<div class="camplist__inner__img">
<img src="<?php echo $wp_url; ?>/dist/images/sample_img.png" alt="">
</div>
<div class="camplist__inner__info">
<span class="camplist__inner__info__status warning"><i class="far fa-circle"></i>受付中</span>
<p class="camplist__inner__info__meta">
<span>2020年3月</span>
<span>キャンプ</span>
</p>
<h3 class="camplist__inner__info__ttl">ビッグバンナイトi nミュージアム3月</h3>
<ul class="camplist__inner__info__type">
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_kids.png" alt="アイコン">小学1年生～中学生</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_calendar.png" alt="アイコン">2020年3月21日-3月22日</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_bed.png" alt="アイコン">1泊2日</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_pin.png" alt="アイコン">大阪府立大型児童館ビッグバン</li>
</ul>
<div class="camplist__inner__info__btn">
<a class="more-txt" href="<?php echo $home; ?>/news/">詳しく見る<i class="fas fa-play-circle text-success ml-1"></i></a>
</div>
</div>
</div>
<!-- camplist__inner -->
<div class="camplist__inner">
<div class="camplist__inner__tag">
<img src="<?php echo $wp_url; ?>/dist/images/tag_camp.png" alt="タグ">
</div>
<div class="camplist__inner__img">
<img src="<?php echo $wp_url; ?>/dist/images/sample_img.png" alt="">
</div>
<div class="camplist__inner__info">
<span class="camplist__inner__info__status danger"><i class="far fa-circle"></i>受付中</span>
<p class="camplist__inner__info__meta">
<span>2020年3月</span>
<span>キャンプ</span>
</p>
<h3 class="camplist__inner__info__ttl">ビッグバンナイトi nミュージアム3月</h3>
<ul class="camplist__inner__info__type">
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_kids.png" alt="アイコン">小学1年生～中学生</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_calendar.png" alt="アイコン">2020年3月21日-3月22日</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_bed.png" alt="アイコン">1泊2日</li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_pin.png" alt="アイコン">大阪府立大型児童館ビッグバン</li>
</ul>
<div class="camplist__inner__info__btn">
<a class="more-txt" href="<?php echo $home; ?>/news/">詳しく見る<i class="fas fa-play-circle text-success ml-1"></i></a>
</div>
</div>
</div>
<!-- camplist__inner -->
</div>
<!-- camplist -->
</div>
<!-- home__camp__slide -->
<div class="conteiner">
<div class="home__camp__btn">
<a class="btn btn-warning" href="">募集中キャンプ一覧を見てみる<i class="fas fa-play-circle"></i></a>
</div>
<p class="home__camp__blank"><a href="">過去に実施したキャンプはこちら</a></p>
</div>
</section>
<!-- home__camp -->
<div class="home__gallery">
<div class="home__gallery__list">
<?php for ($i=1; $i <= 10; $i++): ?>
<div><img src="<?php echo $wp_url; ?>/dist/images/loop_<?php echo $i; ?>.png" alt="スライド"></div>
<?php endfor; ?>
</div>
<div class="home__camp__btn">
<a class="btn btn-success" href="">写真ギャラリーはこちら<i class="fas fa-play-circle"></i></a>
</div>
</div>
<!-- home__gallery -->
<section class="sec home__point">
<div class="container">
<h2 class="text-center mb-5"><img src="<?php echo $wp_url; ?>/dist/images/ttl_point_pc.png" alt=""></h2>
<p class="text-center">ユースサービス大阪は、半世紀にわたり蓄積してきたノウハウと豊かな人材を活かし、<br>初めてキャンプに参加するお子さまに安心して参加頂くための取り組みを徹底しています。</p>
<div class="home__point__list">
<div class="home__point__list__inner">
<img src="<?php echo $wp_url; ?>/dist/images/point_img_1_pc.png" alt="">
<div class="home__point__list__inner__txt">
<h3><img src="<?php echo $wp_url; ?>/dist/images/point1_txt_pc.png" alt=""></h3>
<p>キャンプに同行するアウトドアリーダーは<br>年18回の徹底した研修を受けております。</p>
</div>
</div>
<!-- home__point__list__inner -->
<div class="home__point__list__inner">
<img src="<?php echo $wp_url; ?>/dist/images/point_img_2_pc.png" alt="">
<div class="home__point__list__inner__txt">
<h3><img src="<?php echo $wp_url; ?>/dist/images/point2_txt_pc.png" alt=""></h3>
<p>お子さまの体調や万が一のケガに備えて、<br>看護師を帯同させております。※</p>
</div>
</div>
<!-- home__point__list__inner -->
</div>
<!-- home__point__list -->
<p class="home__point__caution">※帯同無しのキャンプもございます。</p>
<div class="home__camp__btn">
<a class="btn btn-success" href="">アウトドアリーダーとは<i class="fas fa-play-circle"></i></a>
</div>
</div>
</section>
<!-- home__point -->
<section class="sec home__point2 bg-success">
<div class="container">
<h2 class="text-center mb-5"><img src="<?php echo $wp_url; ?>/dist/images/ttl_point2_pc.png" alt=""></h2>
<p class="text-center text-white">ユースサービス大阪は、楽しくグループ活動が体験できるように、数多くの特色ある事業を企画しています。</p>
<div class="home__point2__list">
  <div class="home__point2__list__inner">
    <img src="<?php echo $wp_url; ?>/dist/images/point2_1_pc.png" srcset="<?php echo $wp_url; ?>/dist/images/point2_1_pc.png 1x, <?php echo $wp_url; ?>/dist/images/point2_1_pc@2x.png 2x" alt="">
  </div>
  <div class="home__point2__list__inner">
    <img src="<?php echo $wp_url; ?>/dist/images/point2_2_pc.png" srcset="<?php echo $wp_url; ?>/dist/images/point2_2_pc.png 1x, <?php echo $wp_url; ?>/dist/images/point2_2_pc@2x.png 2x" alt="">
  </div>
  <div class="home__point2__list__inner">
    <img src="<?php echo $wp_url; ?>/dist/images/point2_3_pc.png" srcset="<?php echo $wp_url; ?>/dist/images/point2_3_pc.png 1x, <?php echo $wp_url; ?>/dist/images/point2_3_pc@2x.png 2x" alt="">
  </div>
</div>
</div>
</section>
<?php get_footer();
