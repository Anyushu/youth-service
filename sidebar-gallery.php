<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<aside class="side">

<div class="sidebar">
<h3 class="sidebar__ttl">アーカイブ<span>archive</span></h3>
<ul>
<?php
wp_get_archives('type=monthly&post_type=gallery&after=<i class="fas fa-chevron-right text-success"></i>');
?>
</ul>
</div>

<?php if (is_active_sidebar('sidebar')) {
    dynamic_sidebar('sidebar');
} ?>
</aside>
