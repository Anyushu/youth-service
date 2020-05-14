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

<div class="sec facility">
<div class="container">
<div class="facility__list">
<?php if (have_posts()): while (have_posts()): the_post();
$id = get_the_ID();
if (has_post_thumbnail()) {
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
}
$t = get_the_title();
$p = get_the_permalink();
$address = get_field('facility_address');
?>
<div class="facility__list__inner">
<a href="<?php echo $p; ?>">
<div class="facility__list__inner__thumbnail"><img src="<?php echo $thumbnail; ?>" alt="<?php echo $t; ?>"></div>
<div class="facility__list__inner__txt">
<p class="facility__list__inner__txt__ttl"><?php echo $t; ?></p>
<p class="facility__list__inner__txt__address"><i class="fas fa-map-marker-alt text-success mr-2"></i><?php echo $address; ?></p>
</div>
</a>
</div>
<!-- facility__list__inner -->
<?php endwhile; endif; ?>
</div>
<!-- facility__list -->
<?php if (function_exists('wp_pagenavi')) {
    wp_pagenavi();
} ?>
</div>
</div>

<?php get_footer();
