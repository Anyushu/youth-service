<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="mv__sub">
<img class="w-100" src="<?php echo $wp_url; ?>/dist/images/bg_low.png" alt="<?php the_title(); ?>">
<h2 class="mv__sub__ttl">
<img src="<?php echo $wp_url; ?>/dist/images/h1_facility.png" alt="<?php the_title(); ?>">
</h2>
<?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<div id="breadcrumbs"><div class="container">', '</div></div>');
}
?>
</section>

<?php if (have_posts()): while (have_posts()): the_post();
$id = get_the_ID();
if (has_post_thumbnail()) {
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
}
$t = get_the_title();
$p = get_the_permalink();

// acf
$txt = get_field('facility_txt');

$address = get_field('facility_address');
$tel = get_field('facility_tel');
$fee = get_field('facility_fee');
$capacity = get_field('facility_capacity');
$holiday = get_field('facility_holiday');
$program = get_field('facility_program');
$hp = get_field('facility_hp');

$map = get_field('facility_map');

$imgs = [$thumbnail];
for ($i=1; $i <= 5; $i++) {
    if (get_field('facility_img_'.$i)) {
        $imgs[] = get_field('facility_img_'.$i);
    }
}
?>
<div class="sec facility">
<div class="container">
<div class="camplist__info__status">
<h2>吉野宮滝野外学校</h2>
</div>
<p><?php echo $txt; ?></p>
</div>
<div class="voice__list">
<?php foreach ($imgs as $key => $val): ?>
<div><img src="<?php echo $val; ?>" alt="画像"></div>
<?php endforeach; ?>
</div>
</section>

<section class="sec">
<div class="container">
<h2 class="ttl__h2">
<span class="quicksand">facility INFORMATION</span>
<span>施設概要</span>
</h2>
<div class="table-wrap">
<table class="table w-100">
<tbody>
<tr>
<th class="text-nowrap">所在地</th>
<td><?php echo $address; ?></td>
</tr>
<tr>
<th class="text-nowrap">電話番号</th>
<td><a href="tel:<?php echo $tel; ?>"><?php echo $tel; ?></a></td>
</tr>
<tr>
<th class="text-nowrap">利用料金</th>
<td><?php echo $fee; ?></td>
</tr>
<tr>
<th class="text-nowrap">定員</th>
<td><?php echo $capacity; ?></td>
</tr>
<tr>
<th class="text-nowrap">休所日</th>
<td><?php echo $holiday; ?></td>
</tr>
<tr>
<th class="text-nowrap">主なプログラム</th>
<td><?php echo $program; ?></td>
</tr>
<tr>
<th class="text-nowrap">ホームページ</th>
<td><a href="<?php echo $hp; ?>" target="_blank"><?php echo $hp; ?></a></td>
</tr>
</tbody>
</table>
</div>
<!-- table-wrap -->

<div class="facility__map">
<?php if (get_field('facility_gmap_url')): ?>
<a class="more-txt" href="<?php echo get_field('facility_gmap_url'); ?>">GoogleMapで見る<i class="fas fa-play-circle text-success ml-1"></i></a>
<?php endif; ?>
<h3>アクセス<span class="quicksand">ACCESS</span></h3>
<div class="facility__map__inner">
<div class="embed-responsive embed-responsive-21by9 d-md-block d-none">
<iframe class="embed-responsive-item" src="https://www.google.com/maps?q=<?php echo $map['lat']; ?>,<?php echo $map['lng']; ?>&hl=jp&output=embed"></iframe>
</div>
<div class="embed-responsive embed-responsive-4by3 d-md-none d-block">
<iframe class="embed-responsive-item" src="https://www.google.com/maps?q=<?php echo $map['lat']; ?>,<?php echo $map['lng']; ?>&hl=jp&output=embed"></iframe>
</div>
</div>
</div>

<div class="text-center">
<a class="btn btn-primary" href="<?php echo $home; ?>/facility/">一覧に戻る<i class="fas fa-play-circle"></i></a>
</div>
</div>
</section>
<?php endwhile; endif; ?>

<?php get_footer();
