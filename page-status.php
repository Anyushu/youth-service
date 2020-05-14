<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
if (isset($_GET['status-no']) && $_GET['status-code'] && $_GET['status-no'] != null && $_GET['status-code'] != null) {
    $status_no = $_GET['status-no'];
    $status_code = $_GET['status-code'];
} else {
    $status_no = null;
    $status_code = null;
}
?>
<section class="mv__sub login">
<img class="w-100" src="<?php echo $wp_url; ?>/dist/images/bg_low_status.png" alt="<?php the_title(); ?>">
<h2 class="mv__sub__ttl">
<img src="<?php echo $wp_url; ?>/dist/images/h1_login.png" alt="<?php the_title(); ?>">
</h2>
<?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<div id="breadcrumbs"><div class="container text-body">', '</div></div>');
}
?>
</section>

<div class="sec pb-0">
<div class="container">
<p>この度はユースサービス大阪のキャンプにお申し込みいただき誠にありがとうございます。
<br>こちらのページではお申し込みいただきましたキャンプへの入金状況、参加カードの提出状況の確認を行うことができます。</p>
</div>
</div>

<section class="sec login__form">
<div class="container">

<div class="status__wrap">
<h3 class="ttl__h3">確認状況</h3>
<p>ご入金、参加カードのご提出が○になりましたら参加手続き完了となります。
<br>当日集合場所までお越しください。</p>

<?php
if ($status_no !== null && $status_code !== null) {
    $no = '';// 確認番号
    $camp_code = '';// キャンプコード
    $camp_name = '';// キャンプ名
    $camp_fee = '';// ご入金
    $camp_card = '';// 参加カード提出
    $args = [
        'posts_per_page' => 1,
        'post_type' => 'fee_status',
        'title' => ''.$status_no
    ];
    $posts = get_posts($args);
    foreach ($posts as $post): setup_postdata($post);
    $no = get_the_title();
    $camp_code = get_field('status_code');
    $camp_name = get_field('status_camp_name');
    $camp_fee = get_field('status_fee');
    $camp_card = get_field('status_card');
    endforeach;
    wp_reset_postdata();
}
?>

<table class="table w-100 mt-5">
<tbody>
<tr>
<th>確認番号</th>
<td><?php echo $no; ?></td>
</tr>
<tr>
<th>キャンプコード</th>
<td><?php echo $camp_code; ?></td>
</tr>
<tr>
<th>キャンプ名</th>
<td><?php echo $camp_name; ?></td>
</tr>
<tr>
<th>ご入金</th>
<td><?php if ($camp_fee) {
    echo "◯";
} else {
    echo"×";
}  ?></td>
</tr>
<tr>
<th>参加カード提出</th>
<td><?php  if ($camp_card) {
    echo "◯";
} else {
    echo"×";
}  ?></td>
</tr>
</tbody>
</table>
</div>

<div class="login__form__box">
<p class="mb-0"><span class="text-success font-weight-bold">【状況照会ご利用案内】</span>
<br>金融機関への確認、事務処理のため、データ更新にお時間をいただきます。
<br>ご了承のほどよろしくお願いいたします。
<br>※ご入金いただいた次の日からおおむね7営業日を過ぎてもデータ更新が無い場合は、お手数ですが、TEL：06-6561-7800（平日9時半〜18時）まで、ご連絡ください。</p>
</div>

<div class="status__prev">
<a class="btn btn-primary" href="<?php echo $home; ?>/status/login/">別の番号の照会<i class="fas fa-play-circle"></i></a>
<p class="mb-0 mt-3 text-center">
<a class="small text-muted border-bottom" href="<?php echo $home; ?>/">トップぺージへ戻る</a>
</p>
</div>

</div>
</section>
<?php get_footer();
