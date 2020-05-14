<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();

$circle = $wp_url.'/dist/images/icon_circle.png';
$try = $wp_url.'/dist/images/icon_tryangle.png';
$times = $wp_url.'/dist/images/icon_times.png';

$fullpath = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

get_header(); ?>
<section class="mv__sub">
<img class="w-100" src="<?php echo $wp_url; ?>/dist/images/bg_low.png" alt="<?php the_title(); ?>">
<h2 class="mv__sub__ttl">
<img src="<?php echo $wp_url; ?>/dist/images/h1_camplist.png" alt="<?php the_title(); ?>">
</h2>
<?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<div id="breadcrumbs"><div class="container">', '</div></div>');
}
?>
</section>

<div class="sec pb-0">
<div class="container">
<p class="text-center">ユースサービス大阪では、子どもたちの自然体験キャンプ、スキーキャンプ、ファミリーキャンプなど、
<br>年間を通して様々なイベントを開催しています。</p>
</div>
</div>

<section class="sec camplist__info__status">
<div class="container">
<h2>お申し込み状況</h2>
<div class="camplist__info__status__list">
<span class="circle"><img src="<?php echo $circle; ?>" alt="アイコン">受付中</span>
<span class="try"><img src="<?php echo $try; ?>" alt="アイコン">残りわずか</span>
<span class="times"><img src="<?php echo $times; ?>" alt="アイコン">キャンセル待ち</span>
<span class="end">終了</span>
</div>
<div class="camplist__info__status__contact">
<p class="font-weight-bold">最新の空き状況は下記へお問い合わせください。</p>
<div class="camplist__info__status__contact__tel">
<div class="camplist__info__status__contact__tel__left">
<p class="camplist__info__status__contact__tel__left__ttl">なるかわ〜のキャンプ</p>
<p class="camplist__info__status__contact__tel__left__txt">東大阪市立野外活動センター：10:00〜17:30（火曜日以外）</p>
</div>
<div class="camplist__info__status__contact__tel__right">
<a href="tel:072-986-1551"><img src="<?php echo $wp_url; ?>/dist/images/icon_call.png" alt="アイコン"><span>072-986-1551</span></a>
</div>
</div>
<!-- camplist__info__status__contact__tel -->
<div class="camplist__info__status__contact__tel">
<div class="camplist__info__status__contact__tel__left">
<p class="camplist__info__status__contact__tel__left__ttl">それ以外のキャンプ</p>
<p class="camplist__info__status__contact__tel__left__txt">ユースサービス大阪事務局：受付時間 9:30～17:00（平日）</p>
</div>
<div class="camplist__info__status__contact__tel__right">
<a href="tel:06-6561-7800"><img src="<?php echo $wp_url; ?>/dist/images/icon_call.png" alt="アイコン"><span>06-6561-7800</span></a>
</div>
</div>
<!-- camplist__info__status__contact__tel -->
</div>
<!-- camplist__info__status__contact -->
</div>
</section>

<img class="w-100" src="<?php echo $wp_url; ?>/dist/images/bg_circle_pc.png" alt="背景">

<section class="sec bg-success pt-0">
<div class="container">
<h2 class="text-center mb-4"><img src="<?php echo $wp_url; ?>/dist/images/ttl_camp_pc.png" alt=""></h2>

<div class="camplist__sort">
<div class="camplist__sort__left">
<label for="input-days" class="text-white">開催時期</label>
<?php
$args = ['parent'=>'3'];
$terms = get_terms('camplist_cat', $args);
?>
<select id="input-days" class="form-control send-url">
<option value="">選択して下さい</option>
<?php foreach ($terms as $key => $val): ?>
<option value="<?php echo get_term_link($val); ?>" <?php if ($fullpath == get_term_link($val)) {
    echo "selected";
} ?> ><?php echo $val->name; ?></option>
<?php endforeach; ?>
</select>
</div>
<div class="camplist__sort__right">
<label for="input-cats" class="text-white">カテゴリー</label>
<?php
$args = ['exclude_tree'=>'3'];
$terms = get_terms('camplist_cat', $args);
?>
<select id="input-cats" class="form-control send-url">
<option value="">選択して下さい</option>
<?php foreach ($terms as $key => $val): ?>
<option value="<?php echo get_term_link($val); ?>" <?php if ($fullpath == get_term_link($val)) {
    echo "selected";
} ?> ><?php echo $val->name; ?></option>
<?php endforeach; ?>
</select>
</div>
</div>

<div class="camplist">
<?php
if (have_posts()): while (have_posts()): the_post();
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
<?php endwhile; endif; ?>
</div>
<!-- camplist -->
<div class="home__camp__btn">
<a class="btn btn-warning" href="">終了したキャンプを見る<i class="fas fa-play-circle"></i></a>
</div>
</div>
</section>

<?php get_footer();
