<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$circle = $wp_url.'/dist/images/icon_circle.png';
$try = $wp_url.'/dist/images/icon_tryangle.png';
$times = $wp_url.'/dist/images/icon_times.png';
?>

<section class="sec home__camp bg-success">

<div class="container">
<h2 class="text-center mb-4"><img src="<?php echo $wp_url; ?>/dist/images/ttl_camp_pc.png" alt="キャンプ"></h2>
<p class="text-white mb-5 text-center">新しいキャンプなどをどんどん企画し、<br>発信していきます。</p>
</div>

<div class="home__camp__slide camplist">
<?php
$args = [
  'posts_per_page' => 12,
  'post_type' => 'camplist',
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
$days = '';
$cat_name = '';
$categories = get_the_terms($id, 'camplist_cat');
if (is_array($categories)) {
    foreach ($categories as $key => $cat) {
        if ($cat->parent !== 0) {
            $days = $cat->name;
        } else {
            $cat_name = $cat->name;
        }
    }
}
$camp_status = get_field('camp_status');
$camp_target = get_field('camp_target');
$camp_day = get_field('camp_day');
$camp_nights = get_field('camp_nights');
$camp_place = get_field('camp_place');

if ($camp_status == '受付中') {
    $bg_status = 'circle';
    $status_img = $circle;
} elseif ($camp_status == '残りわずか') {
    $bg_status = 'try';
    $status_img = $try;
} elseif ($camp_status == 'キャンセル待ち') {
    $bg_status = 'times';
    $status_img = $times;
} else {
    $bg_status = 'end';
}
?>
<div class="camplist__inner">
<div class="camplist__inner__tag">
<img src="<?php echo $wp_url; ?>/dist/images/tag_camp.png" alt="タグ">
</div>
<div class="camplist__inner__img">
<img src="<?php echo $thumbnail; ?>" alt="<?php echo $t; ?>">
</div>
<div class="camplist__inner__info">
<span class="camplist__inner__info__status <?php echo $bg_status; ?>"><?php
if ($camp_status !== '終了') {
    echo '<img src="'.$status_img.'" alt="アイコン">';
} ?><?php echo $camp_status; ?></span>
<p class="camplist__inner__info__meta">
<span><?php echo $days; ?></span>
<span><?php echo $cat_name; ?></span>
</p>
<h3 class="camplist__inner__info__ttl"><?php echo $t; ?></h3>
<ul class="camplist__inner__info__type">
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_kids.png" alt="アイコン"><?php echo $camp_target; ?></li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_calendar.png" alt="アイコン"><?php echo $camp_day; ?></li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_bed.png" alt="アイコン"><?php echo $camp_nights; ?></li>
<li><img src="<?php echo $wp_url; ?>/dist/images/icon_pin.png" alt="アイコン"><?php echo $camp_place; ?></li>
</ul>
<div class="camplist__inner__info__btn">
<a class="more-txt" href="<?php echo $p; ?>">詳しく見る<i class="fas fa-play-circle text-success ml-1"></i></a>
</div>
</div>
</div>
<!-- camplist__inner -->
<?php endforeach; wp_reset_postdata(); ?>
</div>
<!-- home__camp__slide -->
<div class="conteiner">
<div class="home__camp__btn">
<a class="btn btn-warning" href="<?php echo $home; ?>/camplist/">募集中キャンプ一覧を見てみる<i class="fas fa-play-circle"></i></a>
</div>
<p class="home__camp__blank"><a href="<?php echo $home; ?>/camplist_cat/end/">過去に実施したキャンプはこちら</a></p>
</div>
</section>
<!-- home__camp -->
