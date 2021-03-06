<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();

$send_url = $home.'/status/';
if (isset($_GET['status-no']) && $_GET['status-code'] && $_GET['status-no'] != null && $_GET['status-code'] != null) {
    $status_no = $_GET['status-no'];
    $status_code = $_GET['status-code'];
    $camp_code = '';// キャンプコード
    $camp_name = '';// キャンプ名
    $camp_fee = '';// ご入金
    $camp_card = '';// 参加カード提出
    $args = [
        'posts_per_page' => 1,
        'post_type' => 'fee_status',
        'meta_query' => [
            [
                'key' => 'status_num',
                'value' => $status_no,
            ],
            [
                'key' => 'status_code',
                'value' => $status_code,
            ]
        ]
    ];
    $posts = get_posts($args);
    if (count($posts) === 0) {
        $flag = false;
    } else {
        $flag = true;
    }
    wp_reset_postdata();
    if ($flag) {
        header('Location: '.$send_url.'?status-no='.$status_no.'&status-code='.$status_code);
        exit;
    }
}

get_header(); ?>
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
<br>こちらのページではお申し込みいただきましたキャンプへの入金状況、参加カードの提出状況の確認を行うことができます。
<br>「発送内容についてのご案内」に記載の『確認番号』と『キャンプコード』をご入力いただき、下の「照会」ボタンをクリックしてください。</p>
</div>
</div>

<section class="sec login__form">
<div class="container">
<div class="login__form__wrap">
<form class="login__form__inner" action="" method="get">
<h3 class="ttl__h3">提出確認フォーム</h3>
<?php if(isset($flag)): ?>
<div class="my-3 text-danger">確認番号とキャンプコードをご確認の上再度ご入力ください。</div>
<?php endif; ?>
<div class="ol__form__table">
<table class="table table-borderless w-100">
<tbody>
<tr>
<th>確認番号<span class="badge badge-pill badge-success">必須</span></th>
<td><input type="text" name="status-no" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="確認番号をご入力して下さい。" required></td>
</tr>
<tr>
<th>キャンプコード<span class="badge badge-pill badge-success">必須</span></th>
<td><input type="text" name="status-code" value="" size="40" class="form-control" aria-required="true" aria-invalid="false" placeholder="キャンプコードをご入力して下さい。" required></td>
</tr>
</tbody>
</table>
</div>
<div class="login__form__inner__submit">
<button class="btn btn-primary" type="submit">照会を行う<i class="fas fa-play-circle"></i></button>
</div>
</form>
</div>
<!-- login__form__wrap -->
<div class="login__form__box">
<p class="mb-0"><span class="text-success font-weight-bold">【確認番号、キャンプコードをお忘れの方】</span>
<br>確認番号、キャンプコードをお忘れの場合、下記までお問合せください。
<br>ユースサービス大阪事務局：平日9時半〜18時（TEL 06-6561-7800）</p>
</div>
</div>
</section>
<?php get_footer();
