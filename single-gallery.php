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

<section class="sec gallery__post">
<div class="container">
<?php if (have_posts()): while (have_posts()): the_post();
$id = get_the_ID();
if (has_post_thumbnail()) {
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
}
$t = get_the_title();
$p = get_the_permalink();
$gallery_days = get_field('gallery_days');
$gallery_zip = get_field('gallery_zip');
$gallery_pics = SCF::get('gallery_pics');
?>
<h2 class="gallery__post__ttl"><?php echo $t; ?></h2>
<?php if (!post_password_required($id)): ?>
<p class="gallery__list__inner__days text-md-center"><i class="far fa-calendar-alt text-success mr-2"></i><?php echo $gallery_days; ?></p>
<div class="gallery__post__pics">
<?php foreach ($gallery_pics as $key => $val): ?>
<div><img src="<?php echo wp_get_attachment_url($val['gallery_img']); ?>" alt="画像"></div>
<?php endforeach; ?>
</div>
<?php if($gallery_zip): ?>
<div class="gallery__post__dl">
<a class="btn btn-secondary" href="<?php echo $gallery_zip; ?>">写真一括ダウンロード（ZIP）</a>
<p class="small">※スマホでのダウンロードはできませんので、予めご了承くださいませ。</p>
</div>
<?php endif; ?>
<?php else: ?>
<?php echo get_the_password_form(); ?>
<?php endif; ?>
<div class="gallery__post__prev">
<a class="btn btn-primary" href="<?php echo $home; ?>/gallery/">一覧に戻る<i class="fas fa-play-circle"></i></a>
</div>
<?php endwhile; endif; ?>
</div>
</section>
<?php get_footer();
