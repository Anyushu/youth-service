<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section class="mv__sub">
<img class="w-100" src="<?php echo $wp_url; ?>/dist/images/bg_low.png" alt="<?php the_title(); ?>">
<h2 class="mv__sub__ttl">
<img src="<?php echo $wp_url; ?>/dist/images/h1_gallery.png" alt="<?php the_title(); ?>">
</h2>
<?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<div id="breadcrumbs"><div class="container">', '</div></div>');
}
?>
</section>

<section class="sec">
<div class="container towcolumn">
<div class="main">
<ul class="gallery__list">
<?php if (have_posts()): while (have_posts()): the_post();
$id = get_the_ID();
if (has_post_thumbnail()) {
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
}
$t = get_the_title();
$p = get_the_permalink();
$gallery_year = get_field('gallery_year');
$gallery_days = get_field('gallery_days');
$gallery_camp_url = get_field('gallery_camp_url');
?>
<li class="gallery__list__inner">
<div class="gallery__list__inner__thumbnail"><img src="<?php echo $thumbnail; ?>" alt="<?php echo $t; ?>"></div>
<p class="gallery__list__inner__year"><?php echo $gallery_year; ?></p>
<p class="gallery__list__inner__ttl"><?php echo $t; ?></p>
<p class="gallery__list__inner__days"><i class="far fa-calendar-alt text-success mr-2"></i><?php echo $gallery_days; ?></p>
<div class="gallery__list__inner__btns">
<a class="btn btn-secondary" href="<?php echo $gallery_camp_url; ?>">キャンプの様子<i class="fas fa-play-circle"></i></a>
<a class="btn btn-primary" href="<?php echo $p; ?>">参加者専用写真コーナー<i class="fas fa-play-circle"></i></a>
</div>
</li>
<?php endwhile; endif; ?>
</ul>
<?php if (function_exists('wp_pagenavi')) {
    wp_pagenavi();
} ?>
</div>
<?php get_sidebar('gallery'); ?>
</div>
</section>
<?php get_footer();
