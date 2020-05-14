<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section class="mv__sub">
<img class="w-100" src="<?php echo $wp_url; ?>/dist/images/bg_low.png" alt="<?php the_title(); ?>">
<h2 class="mv__sub__ttl">
<img src="<?php echo $wp_url; ?>/dist/images/h1_news.png" alt="<?php the_title(); ?>">
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
<ul class="news__list">
<?php if (have_posts()): while (have_posts()): the_post();
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
<!-- news__list__inner -->
<?php endwhile; endif; ?>
</ul>
<?php if (function_exists('wp_pagenavi')) {
    wp_pagenavi();
} ?>
</div>
<?php get_sidebar(); ?>
</div>
</section>
<?php get_footer();
