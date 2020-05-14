<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section class="mv__sub beginner">
<img class="w-100" src="<?php echo $wp_url; ?>/dist/images/bg_beginner.png" srcset="<?php echo $wp_url; ?>/dist/images/bg_beginner.png 1x, <?php echo $wp_url; ?>/dist/images/bg_beginner@2x.png 2x" alt="<?php the_title(); ?>">
<h2 class="mv__sub__ttl">
<img src="<?php echo $wp_url; ?>/dist/images/h1_beginner.png" alt="<?php the_title(); ?>">
</h2>
<div class="beginner__menu">
<div class="beginner__menu__inner">
<a href="#menu1"><img src="<?php echo $wp_url; ?>/dist/images/anchor_1.png" alt="メニュー" srcset="<?php echo $wp_url; ?>/dist/images/anchor_1.png 1x, <?php echo $wp_url; ?>/dist/images/anchor_1@2x.png 2x"></a>
</div>
<div class="beginner__menu__inner">
<a href="#menu2"><img src="<?php echo $wp_url; ?>/dist/images/anchor_2.png" alt="メニュー" srcset="<?php echo $wp_url; ?>/dist/images/anchor_2.png 1x, <?php echo $wp_url; ?>/dist/images/anchor_2@2x.png 2x"></a>
</div>
<div class="beginner__menu__inner">
<a href="#menu3"><img src="<?php echo $wp_url; ?>/dist/images/anchor_3.png" alt="メニュー" srcset="<?php echo $wp_url; ?>/dist/images/anchor_3.png 1x, <?php echo $wp_url; ?>/dist/images/anchor_3@2x.png 2x"></a>
</div>
<div class="beginner__menu__inner">
<a href="#menu4"><img src="<?php echo $wp_url; ?>/dist/images/anchor_4.png" alt="メニュー" srcset="<?php echo $wp_url; ?>/dist/images/anchor_4.png 1x, <?php echo $wp_url; ?>/dist/images/anchor_4@2x.png 2x"></a>
</div>
<div class="beginner__menu__inner">
<a href="#menu5"><img src="<?php echo $wp_url; ?>/dist/images/anchor_5.png" alt="メニュー" srcset="<?php echo $wp_url; ?>/dist/images/anchor_5.png 1x, <?php echo $wp_url; ?>/dist/images/anchor_5@2x.png 2x"></a>
</div>
</div>
<!-- beginner__menu -->
</section>

<section class="beginner__intoro position-relative">
<img src="<?php echo $wp_url; ?>/dist/images/beginner_img_left.png" alt="写真">
<div class="container">
<h2 class="text-center mb-5 pb-5"><img src="<?php echo $wp_url; ?>/dist/images/ttl_bg_intoro.png" alt="体験活動を通じた出会いを大切にします"></h2>
<p class="text-center mb-0">疑似体験で溢れている現代社会にあって、子どもの成長に必要な実体験の不足が課題となっています。
<br>そのため、主体的な生活行動が可能になる幼児期（５歳児）から、
<br>集団体験の場や、原体験としての自然の様々な事象との出会い、
<br>生命あるものに直接触れ学ぶことのできる体験活動の場を提供しています。</p>
</div>
<img src="<?php echo $wp_url; ?>/dist/images/beginner_img_right.png" alt="写真">
</section>
<!-- beginner__intoro -->
<section id="menu1" class="sec bg-circle beginner__feature home__news">
<div class="container">
<h2 class="text-center mb-5 pb-5"><img src="<?php echo $wp_url; ?>/dist/images/ttl_feature.png" alt="ユースサービス大阪の4つの特徴！"></h2>
<div class="beginner__feature__list">
<div class="beginner__feature__list__inner">
<img src="<?php echo $wp_url; ?>/dist/images/feature_1.png" alt="特長" srcset="<?php echo $wp_url; ?>/dist/images/feature_1.png 1x, <?php echo $wp_url; ?>/dist/images/feature_1@2x.png 2x">
</div>
<div class="beginner__feature__list__inner">
<img src="<?php echo $wp_url; ?>/dist/images/feature_2.png" alt="特長" srcset="<?php echo $wp_url; ?>/dist/images/feature_2.png 1x, <?php echo $wp_url; ?>/dist/images/feature_2@2x.png 2x">
</div>
<div class="beginner__feature__list__inner">
<img src="<?php echo $wp_url; ?>/dist/images/feature_3.png" alt="特長" srcset="<?php echo $wp_url; ?>/dist/images/feature_3.png 1x, <?php echo $wp_url; ?>/dist/images/feature_3@2x.png 2x">
<a href="<?php $home; ?>/leader/"></a>
</div>
<div class="beginner__feature__list__inner">
<img src="<?php echo $wp_url; ?>/dist/images/feature_4.png" alt="特長" srcset="<?php echo $wp_url; ?>/dist/images/feature_4.png 1x, <?php echo $wp_url; ?>/dist/images/feature_4@2x.png 2x">
</div>
</div>
<!-- beginner__feature__list -->
</div>
<img class="w-100" src="<?php echo $wp_url; ?>/dist/images/bg_circle_pc.png" alt="">
</section>
<!-- menu1 -->

<div id="menu2">
<?php get_template_part('templates/slide-camplist'); ?>
</div>
<!-- menu2 -->

<div class="beginner__loop beginner__loop__1">
<?php for ($i=1; $i <= 9; $i++): ?>
<div><img src="<?php echo $wp_url; ?>/dist/images/beginner_loop_top_<?php echo $i; ?>.png" alt="スライド"></div>
<?php endfor; ?>
</div>
<div class="beginner__loop beginner__loop__2">
<?php for ($i=1; $i <= 9; $i++): ?>
<div><img src="<?php echo $wp_url; ?>/dist/images/beginner_loop_bottom_<?php echo $i; ?>.png" alt="スライド"></div>
<?php endfor; ?>
</div>

<section id="menu3" class="sec bg-success beginner__flow">
<div class="container">
<h2 class="text-center mb-5 pb-5"><img src="<?php echo $wp_url; ?>/dist/images/ttl_beginner_flow.png" alt="参加までの流れ"></h2>
<div class="beginner__flow__list">
<div class="beginner__flow__list__first beginner__flow__list__inner">
<img class="beginner__flow__list__inner__no" src="<?php echo $wp_url; ?>/dist/images/b_flow_no_1.png" alt="no">
<h3 class="beginner__flow__list__ttl"><img src="<?php echo $wp_url; ?>/dist/images/ttl_beginner_flow_1.png" alt="参加のお申し込み"></h3>
<p class="text-center mb-5">電話、FAX、ホームページの申込画面よりお申込みください。</p>
<div class="beginner__flow__list__first__box">
<div class="d-md-flex justify-content-between align-items-center">
<div>
<h4>ホームページからの場合</h4>
<p>募集中のキャンプ一覧から、ご希望のキャンプ<br class="d-md-inline d-none">コースを選んでください。</p>
</div>
<div>
<a class="btn btn-primary" href="<?php echo $home; ?>/camplist/">募集中のキャンプ一覧<i class="fas fa-play-circle"></i></a>
</div>
</div>
</div>
<div class="beginner__flow__list__first__box mt-3">
<h4>FAXの場合</h4>
<p>ご希望のキャンプ名、参加者名、フリガナ、郵便番号、住所、電話番号、学年（年齢）、性別をご記入の上、FAXしてください。</p>
</div>
</div>
<!-- beginner__flow__list__inner beginner__flow__list__first -->
<div class="beginner__flow__list__inner lp">
<img class="beginner__flow__list__inner__no" src="<?php echo $wp_url; ?>/dist/images/b_flow_no_2.png" alt="no">
<div class="beginner__flow__list__inner__content">
<h3 class="beginner__flow__list__ttl"><img src="<?php echo $wp_url; ?>/dist/images/ttl_beginner_flow_2.png" alt="参加のお申し込み"></h3>
<p class="mb-0">参加のご案内をキャンプ実施の約１ヶ月前にはご自宅へ郵送いたします。
<br>※グループでお申込みの場合、代表者のご自宅へまとめて郵送を希望される場合は、お申し付けください。</p>
</div>
</div>
<!-- beginner__flow__list__inner lp-->
<div class="beginner__flow__list__inner rp">
<img class="beginner__flow__list__inner__no" src="<?php echo $wp_url; ?>/dist/images/b_flow_no_3.png" alt="no">
<div class="beginner__flow__list__inner__content">
<h3 class="beginner__flow__list__ttl"><img src="<?php echo $wp_url; ?>/dist/images/ttl_beginner_flow_3.png" alt="参加のお申し込み"></h3>
<div class="beginner__flow__list__inner__content__step">
<div class="beginner__flow__list__inner__content__step__inner">
<h4 class="text-center"><img src="<?php echo $wp_url; ?>/dist/images/step_1.png" alt="STEP1"></h4>
<div class="text-center"><img src="<?php echo $wp_url; ?>/dist/images/icon_atm.png" alt="アイコン"></div>
<p class="text-center mb-0"><span class="d-block font-weight-bold">「参加費」</span>をお振込みください。</p>
</div>
<div class="beginner__flow__list__inner__content__step__inner">
<h4 class="text-center"><img src="<?php echo $wp_url; ?>/dist/images/step_2.png" alt="STEP2"></h4>
<div class="text-center"><img src="<?php echo $wp_url; ?>/dist/images/icon_bc.png" alt="アイコン"></div>
<p class="text-center mb-0"><span class="d-block font-weight-bold">「参加カード」</span>を返信ください。</p>
</div>
<div class="beginner__flow__list__inner__content__step__inner">
<h4 class="text-center"><img src="<?php echo $wp_url; ?>/dist/images/step_3.png" alt="STEP3"></h4>
<div class="text-center"><img src="<?php echo $wp_url; ?>/dist/images/icon_laptop.png" alt="アイコン"></div>
<p class="text-center mb-0"><span class="d-block font-weight-bold">「WEB登録」</span>をご登録ください。</p>
</div>
</div>
<p class="my-3">これで手続き完了です！<br>確認させていただく点がある方のみ、こちらからご連絡いたします。</p>
<div class="d-md-flex justify-content-between align-items-center">
<a class="btn btn-primary" href="">お振込先<i class="fas fa-play-circle"></i></a>
<a class="btn btn-primary" href="">参加カードとは<i class="fas fa-play-circle"></i></a>
<a class="btn btn-primary" href="">キャンセル料<i class="fas fa-play-circle"></i></a>
</div>
</div>
</div>
<!-- beginner__flow__list__inner rp-->
<div class="beginner__flow__list__inner lp">
<img class="beginner__flow__list__inner__no" src="<?php echo $wp_url; ?>/dist/images/b_flow_no_4.png" alt="no">
<div class="beginner__flow__list__inner__content">
<h3 class="beginner__flow__list__ttl"><img src="<?php echo $wp_url; ?>/dist/images/ttl_beginner_flow_4.png" alt="参加のお申し込み"></h3>
<p>安心してお子さまを送り出していただくために、参加コースによっては保護者の方へのキャンププログラムや持ち物についての説明会を実施しております。
<br>参加は自由ですが、お子さまが初めてキャンプに参加する場合には、ご参加をお勧めしております。
<br>もちろん、お電話で質問をいただいても大丈夫です。
<br>
<br>※持ち物についてのご質問は、<a href="">「よくあるご質問」</a>もご参照ください。</p>
<p class="text-md-right mb-0"><a class="btn btn-primary" href="">保護者説明会について<i class="fas fa-play-circle"></i></a></p>
</div>
</div>
<!-- beginner__flow__list__inner lp-->
<div class="beginner__flow__list__inner rp">
<img class="beginner__flow__list__inner__no" src="<?php echo $wp_url; ?>/dist/images/b_flow_no_5.png" alt="no">
<div class="beginner__flow__list__inner__content">
<h3 class="beginner__flow__list__ttl"><img src="<?php echo $wp_url; ?>/dist/images/ttl_beginner_flow_5.png" alt="参加のお申し込み"></h3>
<p class="mb-0">各コースの集合場所へお越しください。担当職員、キャンプリーダーがお待ちしています！
<br>また、期間中は<a href="https://www.facebook.com/yso.or.jp" target="_blank">フェイスブック</a>にて1日1回程度、キャンプの様子を投稿いたします。</p>
</div>
</div>
<!-- beginner__flow__list__inner rp-->
<div class="beginner__flow__list__inner lp">
<img class="beginner__flow__list__inner__no" src="<?php echo $wp_url; ?>/dist/images/b_flow_no_6.png" alt="no">
<div class="beginner__flow__list__inner__content">
<h3 class="beginner__flow__list__ttl"><img src="<?php echo $wp_url; ?>/dist/images/ttl_beginner_flow_6.png" alt="参加のお申し込み"></h3>
<p>キャンプにご参加いただいた方のみが閲覧できる、キャンプ中の写真をホームページで公開します。
<br>「ユーザー名」「パスワード」を後日「WEB登録」でご登録いただいたメールアドレスへお知らせいたします。公開期間中は自由にホームページから閲覧・ダウンロードしていただけます。</p>
<p class="text-md-right mb-0"><a class="btn btn-primary" href="<?php echo $home; ?>/gallery/">写真ギャラリーを見る<i class="fas fa-play-circle"></i></a></p>
</div>
</div>
<!-- beginner__flow__list__inner lp-->
</div>
<!-- beginner__flow__list -->
</div>
</section>
<!-- menu3 -->
<div class="home__gallery">
<div class="home__gallery__list">
<?php for ($i=1; $i <= 10; $i++): ?>
<div><img src="<?php echo $wp_url; ?>/dist/images/loop_<?php echo $i; ?>.png" alt="スライド"></div>
<?php endfor; ?>
</div>
</div>
<!-- home__gallery -->

<?php get_footer();
