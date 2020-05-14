<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<div class="single__breadcrumb">
<?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<div id="breadcrumbs"><div class="container">', '</div></div>');
}
?>
</div>

<section class="sec">
<div class="container towcolumn">
<div class="main">
<article class="single">
<?php if (have_posts()): while (have_posts()): the_post();
$id = get_the_ID();
if (has_post_thumbnail()) {
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $thumbnail = null;
}
$t = get_the_title();
$p = get_the_permalink();
$categories = get_the_category();
$cat_name = $categories[0]->name; ?>
<div class="news__list__inner__txt__meta">
<span class="time"><?php the_time('Y.m.d'); ?></span>
<span class="cat"><span><?php echo $cat_name; ?></span></span>
</div>
<h2 class="single__ttl"><?php echo $t; ?></h2>
<?php if($thumbnail !== null ): ?>
<figure class="single__thumbnail">
<img src="<?php echo $thumbnail; ?>" alt="<?php echo $t; ?>">
</figure>
<?php endif; ?>
<div class="single__main">
<?php the_content(); ?>
</div>
<div class="blogmain__inner__sns">
<a class="blogmain__inner__sns__fb" href="http://www.facebook.com/share.php?u=<?php echo $p; ?>" target="_blank"><i class="fab fa-facebook-f mr-md-1"></i><span class="d-md-inline d-none">Facebook</span></a>
<a class="blogmain__inner__sns__tw" href="https://twiter.com/share?url=<?php echo $p; ?>" target="_blank"><i class="fab fa-twitter mr-md-1"></i><span class="d-md-inline d-none">Twitter</span></a>
<a class="blogmain__inner__sns__li" href="https://social-plugins.line.me/lineit/share?url=<?php echo $p; ?>" target="_blank"><i class="fab fa-line mr-md-1"></i><span class="d-md-inline d-none">LINE</span></a>
</div>
<div class="single__btn">
<a class="btn btn-primary" href="<?php echo $home; ?>">一覧に戻る<i class="fas fa-play-circle"></i></a>
</div>
<?php endwhile; endif; ?>
</article>
</div>
<?php get_sidebar(); ?>
</div>
</section>
<?php get_footer();
