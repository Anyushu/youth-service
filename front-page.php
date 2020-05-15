<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<div class="home__mv">
<div class="container h-100">
<div class="home__mv__copy">
<p class="text-center"><img class="w-100 animate__animated animate__bounce animate__delay-1s" src="<?php echo $wp_url; ?>/dist/images/mv_balloon_pc.png" alt="今しかできない" srcset="<?php echo $wp_url; ?>/dist/images/mv_balloon_pc.png 1x, <?php echo $wp_url; ?>/dist/images/mv_balloon_pc@2x.png 2x"></p>
<p class="text-center"><img class="w-100 animate__animated animate__bounce animate__delay-2s" src="<?php echo $wp_url; ?>/dist/images/mv_copy_pc.png" alt="今しかできない" srcset="<?php echo $wp_url; ?>/dist/images/mv_copy_pc.png 1x, <?php echo $wp_url; ?>/dist/images/mv_copy_pc@2x.png 2x"></p>
<p class="mb-0 home__mv__copy__txt">ユースサービス大阪はキャンプやスキーなど<br>子ども達のたくさんの笑顔に出会える楽しいプランを提供し、<br>こころ豊かで健やかな成⻑を⽀援しています。</p>
</div>
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
<img class="img-switch w-100" src="<?php echo $wp_url; ?>/dist/images/bg_read_top_pc.png" alt="装飾">
</div>
<!-- mv -->
<section class="sec home__read bg-success">
<div class="container">
<div class="text-center">
<a href="<?php echo $home; ?>/leader/"><img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/top_bnr_4_pc.png" alt="アウトドアリーダー募集"></a>
</div>
<div class="home__read__inner">
<a href="<?php echo $home; ?>/camplist/">
<img src="<?php echo $wp_url; ?>/dist/images/top_bnr_1_pc.png" alt="キャンプ">
<p class="mb-0">現在募集中のキャンプを表示しています！<br>また、こちらからお申し込みもできます。</p>
</a>
<a href="<?php echo $home; ?>/program/">
<img src="<?php echo $wp_url; ?>/dist/images/top_bnr_2_pc.png" alt="Program">
<p class="mb-0">「豊かな人間関係」を育む集団活動の機会を提供するプログラム</p>
</a>
<a href="<?php echo $home; ?>/facility/">
<img src="<?php echo $wp_url; ?>/dist/images/top_bnr_3_pc.png" alt="施設">
<p class="mb-0">ユースサービス大阪が運営しているキャンプ施設をご案内いたします。</p>
</a>
</div>
</div>
</section>
<!-- home__read -->
<section class="sec home__news bg-light">
<img class="img-switch w-100" src="<?php echo $wp_url; ?>/dist/images/bg_read_bottom_pc.png" alt="装飾">
<div class="container">
<div class="home__news__wrap">
<div class="home__news__wrap__list">
<a class="more-txt" href="<?php echo $home; ?>/news/">一覧を見る<i class="fas fa-play-circle text-success ml-1"></i></a>
<h2 class="home__news__wrap__list__ttl"><span><img src="<?php echo $wp_url; ?>/dist/images/ttl_news_pc.png" alt="news"></span></h2>
<ul class="news__list">
<?php
$args = [
    'posts_per_page' => 10,
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$id = get_the_ID();
if (has_post_thumbnail()) {
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
}
$t = get_the_title();
$p = get_the_permalink();
$categories = get_the_category();
$cat_name = $categories[0]->name;
?>
<li class="news__list__inner">
<a href="<?php echo $p; ?>">
<div class="news__list__inner__img">
<img src="<?php echo $thumbnail; ?>" alt="<?php echo $t; ?>">
</div>
<div class="news__list__inner__txt">
<div class="news__list__inner__txt__meta">
<span class="time"><?php the_time('Y.m.d'); ?></span>
<span class="cat"><span><?php echo $cat_name; ?></span></span>
</div>
<h3><?php echo $t; ?></h3>
<?php the_excerpt(); ?>
</div>
</a>
</li>
<?php endforeach; wp_reset_postdata(); ?>
</ul>
<!-- news__list -->
</div>
<div class="home__news__wrap__side">
<div class="mb-4"><a href="<?php echo $home; ?>/beginner/"><img class="w-100" src="<?php echo $wp_url; ?>/dist/images/bnr_beginner.png" alt=""></a></div>
<div class="mb-4"><a href="https://www.facebook.com/yso.or.jp" target="_blank"><img class="w-100" src="<?php echo $wp_url; ?>/dist/images/bnr_facebook.png" alt=""></a></div>
<div><a href="https://www.instagram.com/yso̲camp/" target="_blank"><img class="w-100" src="<?php echo $wp_url; ?>/dist/images/bnr_instagram.png" alt=""></a></div>
</div>
</div>
</div>
<img class="w-100" src="<?php echo $wp_url; ?>/dist/images/bg_circle_pc.png" alt="">
</section>
<!-- home__news -->

<?php get_template_part('templates/slide-camplist'); ?>

<div class="home__gallery">
<div class="home__gallery__list">
<?php for ($i=1; $i <= 10; $i++): ?>
<div><img src="<?php echo $wp_url; ?>/dist/images/loop_<?php echo $i; ?>.png" alt="スライド"></div>
<?php endfor; ?>
</div>
<div class="home__camp__btn">
<a class="btn btn-success" href="<?php echo $home; ?>/gallery/">写真ギャラリーはこちら<i class="fas fa-play-circle"></i></a>
</div>
</div>
<!-- home__gallery -->
<section class="sec home__point">
<div class="container">
<h2 class="text-center mb-5"><img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/ttl_point_pc.png" alt="ポイント"></h2>
<p class="text-center">ユースサービス大阪は、半世紀にわたり蓄積してきたノウハウと豊かな人材を活かし、<br>初めてキャンプに参加するお子さまに安心して参加頂くための取り組みを徹底しています。</p>
<div class="home__point__list">
<div class="home__point__list__inner">
<img src="<?php echo $wp_url; ?>/dist/images/point_img_1_pc.png" alt="ポイント">
<div class="home__point__list__inner__txt">
<h3><img src="<?php echo $wp_url; ?>/dist/images/point1_txt_pc.png" alt="ポイント"></h3>
<p>キャンプに同行するアウトドアリーダーは<br>年18回の徹底した研修を受けております。</p>
</div>
</div>
<!-- home__point__list__inner -->
<div class="home__point__list__inner">
<img src="<?php echo $wp_url; ?>/dist/images/point_img_2_pc.png" alt="ポイント">
<div class="home__point__list__inner__txt">
<h3><img src="<?php echo $wp_url; ?>/dist/images/point2_txt_pc.png" alt="ポイント"></h3>
<p>お子さまの体調や万が一のケガに備えて、<br>看護師を帯同させております。※</p>
</div>
</div>
<!-- home__point__list__inner -->
</div>
<!-- home__point__list -->
<p class="home__point__caution">※帯同無しのキャンプもございます。</p>
<div class="home__camp__btn">
<a class="btn btn-success" href="<?php echo $home; ?>/leader/">アウトドアリーダーとは<i class="fas fa-play-circle"></i></a>
</div>
</div>
</section>
<!-- home__point -->
<section class="sec home__point2 bg-success">
<div class="container">
<h2 class="text-center mb-5"><img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/ttl_point2_pc.png" alt="ポイント"></h2>
<p class="text-center text-white">ユースサービス大阪は、<br class="d-md-none">楽しくグループ活動が体験できるように、<br class="d-md-none">数多くの特色ある事業を企画しています。</p>
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
<!-- home__point2 -->
<div class="sec home__program bg-grid bg-light">
<div class="container">
<div class="home__program__list">
<div class="home__program__list__inner">
<a href="<?php echo $home; ?>/program/">
<img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/program_pc.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/program_pc.png 1x, <?php echo $wp_url; ?>/dist/images/program_pc@2x.png 2x">
</a>
</div>
<div class="home__program__list__inner">
<a href="<?php echo $home; ?>/facility/">
<img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/information_pc.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/information_pc.png 1x, <?php echo $wp_url; ?>/dist/images/information_pc@2x.png 2x">
</a>
</div>
</div>
<p class="text-center mb-0"><img class="img-switch" src="<?php echo $wp_url; ?>/dist/images/agree_pc.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/agree_pc.png 1x, <?php echo $wp_url; ?>/dist/images/agree_pc@2x.png 2x"></p>
</div>
</div>
<?php get_footer();
