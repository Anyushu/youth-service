<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();

$circle = $wp_url.'/dist/images/icon_circle.png';
$try = $wp_url.'/dist/images/icon_tryangle.png';
$times = $wp_url.'/dist/images/icon_times.png';

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
$camp_txt = get_field('camp_txt');

$imgs = [$thumbnail];
for ($i=1; $i <= 5; $i++) {
    if (get_field('camp_img_'.$i)) {
        $imgs[] = get_field('camp_img_'.$i);
    }
}

if ($camp_status == '受付中') {
    $bg_status = 'circle';
    $status_img = $circle;
    $form_flag = true;
} elseif ($camp_status == '残りわずか') {
    $bg_status = 'try';
    $status_img = $try;
    $form_flag = true;
} elseif ($camp_status == 'キャンセル待ち') {
    $bg_status = 'times';
    $status_img = $times;
    $form_flag = false;
} else {
    $bg_status = 'end';
    $form_flag = false;
}
?>
<section class="sec">
<article class="camplist__post">
<div class="container">
<span class="camplist__post__status <?php echo $bg_status; ?>"><?php
if ($camp_status !== '終了') {
    echo '<img src="'.$status_img.'" alt="アイコン">';
} ?><?php echo $camp_status; ?></span>
<h2 class="camplist__post__ttl"><?php echo $t; ?></h2>
<div class="camplist__post__days">
<span><img src="<?php echo $wp_url; ?>/dist/images/icon_calendar.png" alt="アイコン"><?php echo $camp_day; ?> <?php echo $camp_nights; ?></span>
<span><img src="<?php echo $wp_url; ?>/dist/images/icon_pin.png" alt="アイコン"><?php echo $camp_place; ?></span>
</div>
<p class="camplist__post__ex"><?php echo $camp_txt; ?></p>
</div>

<div class="facility">
<div class="voice__list">
<?php foreach ($imgs as $key => $val): ?>
<div><img src="<?php echo $val; ?>" alt="画像"></div>
<?php endforeach; ?>
</div>
</div>
</article>
</section>

<section class="sec pt-0">
<div class="container">
<h2 class="ttl__h2">
<span class="quicksand">CAMP INFORMATION</span>
<span>キャンプ概要</span>
</h2>
<div class="table-wrap">
<table class="table w-100">
<tbody>
<tr>
<th class="text-nowrap">対象</th>
<td><?php the_field('camp_target'); ?></td>
</tr>
<tr>
<th class="text-nowrap">期間</th>
<td><?php the_field('camp_day'); ?></td>
</tr>
<tr>
<th class="text-nowrap">泊数</th>
<td><?php the_field('camp_nights'); ?></td>
</tr>
<tr>
<th class="text-nowrap">場所</th>
<td><?php the_field('camp_place'); ?></td>
</tr>
<tr>
<th class="text-nowrap">住所</th>
<td><?php the_field('camp_address'); ?></td>
</tr>
<?php if(get_field('camp_hp')): ?>
<tr>
<th class="text-nowrap">施設HP</th>
<td><a href="<?php the_field('camp_hp'); ?>"><?php the_field('camp_hp'); ?></a></td>
</tr>
<?php endif; ?>
<tr>
<th class="text-nowrap">内容</th>
<td><?php the_field('camp_content'); ?></td>
</tr>
<tr>
<th class="text-nowrap">定員</th>
<td><?php the_field('camp_capacity'); ?></td>
</tr>
<tr>
<th class="text-nowrap">参加費用</th>
<td><?php the_field('camp_fee'); ?></td>
</tr>
<tr>
<th class="text-nowrap">食事</th>
<td><?php the_field('camp_meal'); ?></td>
</tr>
<tr>
<th class="text-nowrap">集合時間</th>
<td><?php the_field('camp_meeting_time'); ?></td>
</tr>
<tr>
<th class="text-nowrap">解散時間</th>
<td><?php the_field('camp_dissolution_time'); ?></td>
</tr>
<tr>
<th class="text-nowrap">交通手段</th>
<td><?php the_field('camp_transportation'); ?></td>
</tr>
<?php if(get_field('camp_last_year')): ?>
<tr>
<th class="text-nowrap">昨年の様子</th>
<td><a href="<?php the_field('camp_last_year'); ?>"><?php the_field('camp_last_year'); ?></a></td>
</tr>
<?php endif; ?>
<tr>
<th class="text-nowrap">申し込み方法</th>
<td><?php the_field('camp_apply'); ?></td>
</tr>
<tr>
<th class="text-nowrap">申込受付期間</th>
<td><?php the_field('camp_acceptance_period'); ?></td>
</tr>
<tr>
<th class="text-nowrap">お問い合わせ先</th>
<td><?php the_field('camp_contact'); ?></td>
</tr>
<tr>
<th class="text-nowrap">備考</th>
<td><?php the_field('camp_remarks'); ?></td>
</tr>
</tbody>
</table>
</div>

<?php if ($camp_status == '受付中' || $camp_status == '残りわずか'): ?>
<div class="camplist__post__ssl">
<p>個人情報保護のためにSSLを使用しています。SSLに対応していないブラウザを使用されている方は申込み用紙を印刷してファックスでお送りください。</p>
<span id="ss_gmo_img_wrapper_115-57_image_ja">
<a href="https://jp.globalsign.com/" target="_blank" rel="nofollow">
<img alt="SSL　GMOグローバルサインのサイトシール" border="0" id="ss_img" src="//seal.globalsign.com/SiteSeal/images/gs_noscript_115-57_ja.gif">
</a>
</span>
<script type="text/javascript" src="//seal.globalsign.com/SiteSeal/gmogs_image_115-57_ja.js" defer="defer"></script>
</div>
<?php endif; ?>
<!-- camplist__post__ssl -->
<?php if ($camp_status == '受付中' || $camp_status == '残りわずか'): ?>
<div class="camplist__post__btns">
<div class="mr-md-4 mb-md-0 mb-4">
<p class="text-center small mb-2">ホームページからお申込みの方</p>
<a class="btn btn-secondary" href="#form">参加申込フォームへ<i class="fas fa-play-circle"></i></a>
</div>
<div>
<p class="text-center small mb-2">FAX送信でお申し込みの方</p>
<a class="btn btn-primary" href="<?php echo $home; ?>/pdf/jigyo-mail.pdf" target="_blank">FAX用紙の印刷へ<i class="fas fa-play-circle"></i></a>
</div>
</div>
<!-- camplist__post__btns -->
<?php endif; ?>
<div class="camplist__post__prev">
<a class="btn btn-light" href="<?php echo $home; ?>/camplist/"><i class="fas fa-play-circle text-success"></i>募集中のキャンプ一覧へ戻る</a>
</div>

</div>
</section>
<?php if ($camp_status == '受付中' || $camp_status == '残りわずか'): ?>
<section id="form" class="sec ol__form bg-success camplist__form">
<div class="container">
<h2 class="ttl__h2">
<span class="quicksand">ENTRY FORM</span>
<span>お申し込みフォーム</span>
</h2>
<div class="table-wrap mb-md-5 mb-4">
<table class="table w-100">
<tbody>
<tr>
<th>参加イベント</th>
<td><?php echo $t; ?></td>
</tr>
<tr>
<th>参加イベント</th>
<td><?php echo $camp_day; ?></td>
</tr>
</tbody>
</table>
</div>
<?php echo do_shortcode('[contact-form-7 id="188" title="エントリーフォーム"]'); ?>
</div>
</section>
<!-- ol__form -->
<?php endif; ?>
<?php endwhile; endif; ?>
<?php get_footer();
