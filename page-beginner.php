<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section class="mv__sub beginner">
<img class="w-100" src="<?php echo $wp_url; ?>/dist/images/bg_beginner.png" alt="<?php the_title(); ?>">
<h2 class="mv__sub__ttl">
<img src="<?php echo $wp_url; ?>/dist/images/h1_beginner.png" srcset="<?php echo $wp_url; ?>/dist/images/h1_beginner.png 1x, <?php echo $wp_url; ?>/dist/images/h1_beginner@2x.png 2x" alt="<?php the_title(); ?>">
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
<h2 class="text-center mb-md-5 pb-md-5 mb-4 pb-4"><img src="<?php echo $wp_url; ?>/dist/images/ttl_bg_intoro.png" alt="体験活動を通じた出会いを大切にします"></h2>
<p class="text-md-center mb-0">疑似体験で溢れている現代社会において、子どもの成長に必要な実体験の不足が課題となっています。
<br>そのため、主体的な生活行動が可能になる幼児期（５歳児）から、
<br>集団体験の場や、原体験としての自然の様々な事象との出会い、
<br>生命あるものに直接触れ学ぶことのできる体験活動の場を提供しています。</p>
</div>
<img src="<?php echo $wp_url; ?>/dist/images/beginner_img_right.png" alt="写真">
</section>
<!-- beginner__intoro -->
<section id="menu1" class="sec bg-circle beginner__feature home__news">
<div class="container">
<h2 class="text-center mb-md-5 pb-md-5 mb-4 pb-4"><img src="<?php echo $wp_url; ?>/dist/images/ttl_feature.png" alt="ユースサービス大阪の4つの特徴！"></h2>
<div class="beginner__feature__list">
<div class="beginner__feature__list__inner">
<img src="<?php echo $wp_url; ?>/dist/images/feature_1.png" alt="特長" srcset="<?php echo $wp_url; ?>/dist/images/feature_1.png 1x, <?php echo $wp_url; ?>/dist/images/feature_1@2x.png 2x">
</div>
<div class="beginner__feature__list__inner">
<img src="<?php echo $wp_url; ?>/dist/images/feature_2.png" alt="特長" srcset="<?php echo $wp_url; ?>/dist/images/feature_2.png 1x, <?php echo $wp_url; ?>/dist/images/feature_2@2x.png 2x">
</div>
<div class="beginner__feature__list__inner">
<img src="<?php echo $wp_url; ?>/dist/images/feature_3.png" alt="特長" srcset="<?php echo $wp_url; ?>/dist/images/feature_3.png 1x, <?php echo $wp_url; ?>/dist/images/feature_3@2x.png 2x">
<a href="<?php echo $home; ?>/leader/"></a>
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

<div id="menu2" class="mb-n5">
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
<h2 class="text-center mb-md-5 pb-md-5 mb-4 pb-4"><img src="<?php echo $wp_url; ?>/dist/images/ttl_beginner_flow.png" alt="参加までの流れ"></h2>
<div class="beginner__flow__list">
<img class="beginner__flow__list__border" src="<?php echo $wp_url; ?>/dist/images/flow_border.png" alt="ボーダー">
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
<div class="mt-3">
<a class="btn btn-primary" href="<?php echo $home; ?>/camplist/">募集中のキャンプ一覧<i class="fas fa-play-circle"></i></a>
</div>
</div>
</div>
<div class="beginner__flow__list__first__box mt-3 mb-5">
<h4>FAXの場合</h4>
<p>ご希望のキャンプ名、参加者名、フリガナ、郵便番号、住所、電話番号、学年（年齢）、性別をご記入の上、FAXしてください。</p>
</div>
<div class="camplist__info__status__contact">
<div class="camplist__info__status__contact__tel">
<div class="camplist__info__status__contact__tel__left">
<p class="camplist__info__status__contact__tel__left__ttl">なるかわ〜のキャンプ</p>
<p class="camplist__info__status__contact__tel__left__txt">東大阪市立野外活動センター：10:00〜17:30（火曜日以外）</p>
</div>
<div class="camplist__info__status__contact__tel__right">
<a href="tel:072-986-1551"><img src="<?php echo $wp_url; ?>/dist/images/icon_call.png" alt="アイコン"><span>072-986-1551</span></a>
<a class="fax" href="tel:072-986-1550"><img src="<?php echo $wp_url; ?>/dist/images/icon_fax.png" alt="アイコン"><span>072-986-1550</span></a>
</div>
</div>
<!-- camplist__info__status__contact__tel -->
<div class="camplist__info__status__contact__tel">
<div class="camplist__info__status__contact__tel__left">
<p class="camplist__info__status__contact__tel__left__ttl">それ以外のキャンプ</p>
<p class="camplist__info__status__contact__tel__left__txt">ユースサービス大阪事務局：受付時間 9:30～17:00（平日）</p>
</div>
<div class="camplist__info__status__contact__tel__right">
<a href="tel:06-6561-7800"><img src="<?php echo $wp_url; ?>/dist/images/icon_call.png" alt="アイコン"><span>06-6561-7800</span></a>
<a class="fax" href="tel:06-6561-7801"><img src="<?php echo $wp_url; ?>/dist/images/icon_fax.png" alt="アイコン"><span>06-6561-7801</span></a>
</div>
</div>
<!-- camplist__info__status__contact__tel -->
</div>
<!-- camplist__info__status__contact -->
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
<button class="btn btn-primary" data-toggle="modal" data-target="#about-send">お振込先<i class="fas fa-play-circle"></i></button>
<button class="btn btn-primary" data-toggle="modal" data-target="#about-card">参加カードとは<i class="fas fa-play-circle"></i></button>
<button class="btn btn-primary" data-toggle="modal" data-target="#about-cancel">キャンセル料<i class="fas fa-play-circle"></i></button>
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
<br>※持ち物についてのご質問は、<a href="#menu4">「よくあるご質問」</a>もご参照ください。</p>
<p class="text-md-right mb-0"><a class="btn btn-primary" href="<?php echo $home; ?>/news/hogosha/">保護者説明会について<i class="fas fa-play-circle"></i></a></p>
</div>
</div>
<!-- beginner__flow__list__inner lp-->
<div class="beginner__flow__list__inner rp">
<img class="beginner__flow__list__inner__no" src="<?php echo $wp_url; ?>/dist/images/b_flow_no_5.png" alt="no">
<img class="beginner__flow__list__inner__fiveimg" src="<?php echo $wp_url; ?>/dist/images/beginner_flow_pic_1.png" alt="no">
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
<img class="flow_pic" src="<?php echo $wp_url; ?>/dist/images/beginner_flow_pic_2.png" alt="no">
<img class="flow_pic" src="<?php echo $wp_url; ?>/dist/images/beginner_flow_pic_3.png" alt="no">
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

<section id="menu4" class="sec beginner__faq">
<div class="container">
<h2 class="text-center mb-md-5 pb-md-5 mb-4 pb-4"><img src="<?php echo $wp_url; ?>/dist/images/ttl_faq.png" alt="よくある質問"></h2>
<div class="beginner__faq__list">
<div class="beginner__faq__list__first">
<div class="beginner__faq__list__inner">
<div class="beginner__faq__list__inner__ttl active">
<img class="beginner__faq__list__inner__ttl__icon" src="<?php echo $wp_url; ?>/dist/images/icon_q.png" alt="アイコン">
<span>一人での参加は<br>大丈夫でしょうか？</span>
</div>
<div class="beginner__faq__list__inner__ans active">お友達同士でグループ申込みをされる方もおられますが、一人参加の方も少なくはありません。
<br>グループ編成の際には一人参加のお子さまがのびのびと活動できるよう配慮いたしますし、グループには必ずトレーニングを受けたアウトドアリーダーがつき、お友達づくりのサポートをしますので、ご安心ください。</div>
</div>
<!-- beginner__faq__list__inner -->
<div class="beginner__faq__list__inner">
<div class="beginner__faq__list__inner__ttl active">
<img class="beginner__faq__list__inner__ttl__icon" src="<?php echo $wp_url; ?>/dist/images/icon_q.png" alt="アイコン">
<span>一緒に申し込んだお友達と<br>同じグループになれますか？</span>
</div>
<div class="beginner__faq__list__inner__ans active">希望をお伺いし、同じ性別、近い学年であれば一つのグループに2〜3人程度を目処に、なるべく同じグループになるよう調整します。
<br>グループの編成上、どうしても難しい場合は、事前にお電話でご説明、ご相談させていただきます。</div>
</div>
<!-- beginner__faq__list__inner -->
</div>
<!-- beginner__faq__list__first -->
<div class="beginner__faq__list__inner">
<div class="beginner__faq__list__inner__ttl active">
<img class="beginner__faq__list__inner__ttl__icon" src="<?php echo $wp_url; ?>/dist/images/icon_q.png" alt="アイコン">
<span>ユースサービス大阪ってどんな団体ですか？</span>
<div class="beginner__faq__list__inner__ttl__btn active">
<span class="beginner__faq__list__inner__ttl__btn__toggle"></span>
<span class="beginner__faq__list__inner__ttl__btn__txt"></span>
</div>
</div>
<div class="beginner__faq__list__inner__ans active">一般財団法人大阪府青少年活動財団（愛称：ユースサービス大阪）は、青少年健全育成活動を振興し、明日を担う心豊かな青少年の育成を図るため、民間と大阪府によって設立された青少年育成活動の専門団体です。
<br>青少年の体験学習機会の提供、青少年指導者の育成、青少年の抱える課題解決への支援、青少年関係機関・団体との連携協働など、すべての事業は「豊かな人間関係をはぐくむ」ことを企画理念に、青少年が主体的に社会の一員として参画し、成長していくことを願い、公益目的支出計画事業をはじめ様々な青少年健全育成事業を展開している非営利型の法人です。</div>
</div>
<!-- beginner__faq__list__inner -->

<div class="more-list">
<div class="beginner__faq__list__inner">
<div class="beginner__faq__list__inner__ttl">
<img class="beginner__faq__list__inner__ttl__icon" src="<?php echo $wp_url; ?>/dist/images/icon_q.png" alt="アイコン">
<span>バスの集合・解散場所はどこですか？</span>
<div class="beginner__faq__list__inner__ttl__btn">
<span class="beginner__faq__list__inner__ttl__btn__toggle"></span>
<span class="beginner__faq__list__inner__ttl__btn__txt"></span>
</div>
</div>
<div class="beginner__faq__list__inner__ans">難波ＯＣＡＴ（オーキャット）１Ｆ　正面玄関の団体待合場所です。</div>
</div>
<!-- beginner__faq__list__inner -->
<div class="beginner__faq__list__inner">
<div class="beginner__faq__list__inner__ttl">
<img class="beginner__faq__list__inner__ttl__icon" src="<?php echo $wp_url; ?>/dist/images/icon_q.png" alt="アイコン">
<span>どんなカバンで行けばいいですか？</span>
<div class="beginner__faq__list__inner__ttl__btn">
<span class="beginner__faq__list__inner__ttl__btn__toggle"></span>
<span class="beginner__faq__list__inner__ttl__btn__txt"></span>
</div>
</div>
<div class="beginner__faq__list__inner__ans">リュックサックやスポーツバッグ、ショルダーバッグなどが適当です。
<br>キャンプ場などの施設周辺は段差も多いので、キャスター付きのバッグはかえって不便です。低学年のお子さまは、必ず自分で持てるか確認してください。</div>
</div>
<!-- beginner__faq__list__inner -->
<div class="beginner__faq__list__inner">
<div class="beginner__faq__list__inner__ttl">
<img class="beginner__faq__list__inner__ttl__icon" src="<?php echo $wp_url; ?>/dist/images/icon_q.png" alt="アイコン">
<span>持ち物の「ナップザック」はどんなものがいいですか？</span>
<div class="beginner__faq__list__inner__ttl__btn">
<span class="beginner__faq__list__inner__ttl__btn__toggle"></span>
<span class="beginner__faq__list__inner__ttl__btn__txt"></span>
</div>
</div>
<div class="beginner__faq__list__inner__ans">活動中の移動やハイキングなどの際に、タオルや水筒、軍手などを入れて持ち歩くので、小型で軽量なものが適当です。</div>
</div>
<!-- beginner__faq__list__inner -->
<div class="beginner__faq__list__inner">
<div class="beginner__faq__list__inner__ttl">
<img class="beginner__faq__list__inner__ttl__icon" src="<?php echo $wp_url; ?>/dist/images/icon_q.png" alt="アイコン">
<span>水筒は必要ですか？</span>
<div class="beginner__faq__list__inner__ttl__btn">
<span class="beginner__faq__list__inner__ttl__btn__toggle"></span>
<span class="beginner__faq__list__inner__ttl__btn__txt"></span>
</div>
</div>
<div class="beginner__faq__list__inner__ans">活動中にお茶を入れて使用しますので、必ずご持参ください。
<br>また、ペットボトルは衛生面の心配と、飲み口が小さいのでお茶が入れにくいため、ご遠慮ください。</div>
</div>
<!-- beginner__faq__list__inner -->
<div class="beginner__faq__list__inner">
<div class="beginner__faq__list__inner__ttl">
<img class="beginner__faq__list__inner__ttl__icon" src="<?php echo $wp_url; ?>/dist/images/icon_q.png" alt="アイコン">
<span>持ち物に「牛乳パック」とありますが、何に使いますか？</span>
<div class="beginner__faq__list__inner__ttl__btn">
<span class="beginner__faq__list__inner__ttl__btn__toggle"></span>
<span class="beginner__faq__list__inner__ttl__btn__txt"></span>
</div>
</div>
<div class="beginner__faq__list__inner__ans">アウトドアクッキングの「カートンドッグ」を作る際に使用します。</div>
</div>
<!-- beginner__faq__list__inner -->
<div class="beginner__faq__list__inner">
<div class="beginner__faq__list__inner__ttl">
<img class="beginner__faq__list__inner__ttl__icon" src="<?php echo $wp_url; ?>/dist/images/icon_q.png" alt="アイコン">
<span>替えの運動靴（濡れてもいい靴）はどんなものがいいですか？</span>
<div class="beginner__faq__list__inner__ttl__btn">
<span class="beginner__faq__list__inner__ttl__btn__toggle"></span>
<span class="beginner__faq__list__inner__ttl__btn__txt"></span>
</div>
</div>
<div class="beginner__faq__list__inner__ans">川遊びや海のプログラムで使用します。
<br>
<br>マリンシューズや布製のスニーカーなど、かかとのおおわれたものをご持参ください。
<br>学校の上靴もOKです。
<br>サンダル（クロックス等）は脱げやすく、怪我をしやすいのでご遠慮ください。</div>
</div>
<!-- beginner__faq__list__inner -->
<div class="beginner__faq__list__inner">
<div class="beginner__faq__list__inner__ttl">
<img class="beginner__faq__list__inner__ttl__icon" src="<?php echo $wp_url; ?>/dist/images/icon_q.png" alt="アイコン">
<span>食物アレルギーがあるのですが、大丈夫でしょうか？</span>
<div class="beginner__faq__list__inner__ttl__btn">
<span class="beginner__faq__list__inner__ttl__btn__toggle"></span>
<span class="beginner__faq__list__inner__ttl__btn__txt"></span>
</div>
</div>
<div class="beginner__faq__list__inner__ans">事前に提出いただく「参加カード」に詳しく記入いただければ、できる限り対応いたします。
<br>ただし、除去の制限が多い場合（乳・卵・小麦すべて完全除去など）は、おやつについてはご家庭で食べているものを持参いただいたり、食事メニューが他のお子さまとは別のものになることがあります。ご了承ください。</div>
</div>
<!-- beginner__faq__list__inner -->
<div class="beginner__faq__list__inner">
<div class="beginner__faq__list__inner__ttl">
<img class="beginner__faq__list__inner__ttl__icon" src="<?php echo $wp_url; ?>/dist/images/icon_q.png" alt="アイコン">
<span>夜のトイレ（夜尿対策）や長い髪をくくることなど、生活面で手助けが必要なのですが。</span>
<div class="beginner__faq__list__inner__ttl__btn">
<span class="beginner__faq__list__inner__ttl__btn__toggle"></span>
<span class="beginner__faq__list__inner__ttl__btn__txt"></span>
</div>
</div>
<div class="beginner__faq__list__inner__ans">お子さまに応じて対応いたします。
<br>
<br>事前に提出いただく「参加カード」に内容をご記入ください。担当職員が確認の上、グループ付きの<a href="<?php echo $home; ?>/leader/">アウトドアリーダー</a>がサポートさせていただきます。</div>
</div>
<!-- beginner__faq__list__inner -->
<div class="beginner__faq__list__inner">
<div class="beginner__faq__list__inner__ttl">
<img class="beginner__faq__list__inner__ttl__icon" src="<?php echo $wp_url; ?>/dist/images/icon_q.png" alt="アイコン">
<span>服用薬やぬり薬を持参しますが配慮してもらえますか？</span>
<div class="beginner__faq__list__inner__ttl__btn">
<span class="beginner__faq__list__inner__ttl__btn__toggle"></span>
<span class="beginner__faq__list__inner__ttl__btn__txt"></span>
</div>
</div>
<div class="beginner__faq__list__inner__ans">「参加カード」に薬の内容や飲み方をご記入ください。
<br>集合時に持参された薬の内容を確認し、キャンプ中は同行する職員、グループ付きの<a href="<?php echo $home; ?>/leader/">アウトドアリーダー</a>がお子様に呼びかけをし、必要に応じて服用の有無を確認いたします。
<br>酔い止めの薬が必要な方も、ご持参ください。</div>
</div>
<!-- beginner__faq__list__inner -->
<div class="beginner__faq__list__inner">
<div class="beginner__faq__list__inner__ttl">
<img class="beginner__faq__list__inner__ttl__icon" src="<?php echo $wp_url; ?>/dist/images/icon_q.png" alt="アイコン">
<span>キャンセル料はいつからかかりますか？</span>
<div class="beginner__faq__list__inner__ttl__btn">
<span class="beginner__faq__list__inner__ttl__btn__toggle"></span>
<span class="beginner__faq__list__inner__ttl__btn__txt"></span>
</div>
</div>
<div class="beginner__faq__list__inner__ans">旅行業法の標準旅行業約款に基づいて、事業開始日の前日から数えて２０日目から所定のキャンセル料が発生します。
<br>返金の際の振込手数料はご負担ください。
<br>天災等で事業が実施不可能な場合は中止することがあります。この場合の参加費は全額お返しいたします。
<br>詳しくは<a href="#menu5">「キャンセル料、事業中止について」</a>をご覧ください。</div>
</div>
<!-- beginner__faq__list__inner -->
<div class="beginner__faq__list__inner">
<div class="beginner__faq__list__inner__ttl">
<img class="beginner__faq__list__inner__ttl__icon" src="<?php echo $wp_url; ?>/dist/images/icon_q.png" alt="アイコン">
<span>保護者説明会はありますか？</span>
<div class="beginner__faq__list__inner__ttl__btn">
<span class="beginner__faq__list__inner__ttl__btn__toggle"></span>
<span class="beginner__faq__list__inner__ttl__btn__txt"></span>
</div>
</div>
<div class="beginner__faq__list__inner__ans">イベントのコースによって異なります。
<br>詳細は<a href="#menu3">こちら</a>からご覧ください。</div>
</div>
<!-- beginner__faq__list__inner -->
<div class="beginner__faq__list__inner">
<div class="beginner__faq__list__inner__ttl">
<img class="beginner__faq__list__inner__ttl__icon" src="<?php echo $wp_url; ?>/dist/images/icon_q.png" alt="アイコン">
<span>携帯電話を持たせてもいいですか？</span>
<div class="beginner__faq__list__inner__ttl__btn">
<span class="beginner__faq__list__inner__ttl__btn__toggle"></span>
<span class="beginner__faq__list__inner__ttl__btn__txt"></span>
</div>
</div>
<div class="beginner__faq__list__inner__ans">緊急の場合の連絡先は、あらかじめ参加のご案内でお知らせいたします。
<br>子どもたちが活動に集中できるよう、キャンプ中にお子さまとの電話（携帯電話やメールなど）はご遠慮ください。また、ゲーム機などの持参もお控えください。</div>
</div>
<!-- beginner__faq__list__inner -->
<div class="beginner__faq__list__inner">
<div class="beginner__faq__list__inner__ttl">
<img class="beginner__faq__list__inner__ttl__icon" src="<?php echo $wp_url; ?>/dist/images/icon_q.png" alt="アイコン">
<span>スキーをする時、ウェアの下はどのようなものを着せればいいですか？</span>
<div class="beginner__faq__list__inner__ttl__btn">
<span class="beginner__faq__list__inner__ttl__btn__toggle"></span>
<span class="beginner__faq__list__inner__ttl__btn__txt"></span>
</div>
</div>
<div class="beginner__faq__list__inner__ans">当日のゲレンデの気象条件をみて着用内容を案内いたしますが、
<br>
<br>上：化繊のタートルネックのアンダーシャツにウールのセーターまたは薄手のフリース
<br>下：保温性のあるスパッツまたはジャージのズボン
<br>
<br>※綿１００％のものは汗や雪で濡れると冷たくなりますのでさけてください。
<br>吹雪対策、ネックウォーマーがあれば便利です。（フリース素材で筒状になっているもの）</div>
</div>
<!-- beginner__faq__list__inner -->
<div class="beginner__faq__list__inner">
<div class="beginner__faq__list__inner__ttl">
<img class="beginner__faq__list__inner__ttl__icon" src="<?php echo $wp_url; ?>/dist/images/icon_q.png" alt="アイコン">
<span>スキーの靴下はどのようなものがいいですか？</span>
<div class="beginner__faq__list__inner__ttl__btn">
<span class="beginner__faq__list__inner__ttl__btn__toggle"></span>
<span class="beginner__faq__list__inner__ttl__btn__txt"></span>
</div>
</div>
<div class="beginner__faq__list__inner__ans">スキー専用でなくても大丈夫です。
<br>厚さは普通で、ひざ下丈のものが適当です。短いものは靴ずれの原因になります。雪で濡れることがありますので、いくつか余分にご持参ください。</div>
</div>
<!-- beginner__faq__list__inner -->
<div class="beginner__faq__list__inner">
<div class="beginner__faq__list__inner__ttl">
<img class="beginner__faq__list__inner__ttl__icon" src="<?php echo $wp_url; ?>/dist/images/icon_q.png" alt="アイコン">
<span>自分のスキーを持たせてもいいですか？</span>
<div class="beginner__faq__list__inner__ttl__btn">
<span class="beginner__faq__list__inner__ttl__btn__toggle"></span>
<span class="beginner__faq__list__inner__ttl__btn__txt"></span>
</div>
</div>
<div class="beginner__faq__list__inner__ans">可能ですが、自分で管理する必要があります。
<br>ゲレンデでの管理にも注意が必要ですし、帰宅時のパッキングや宿舎からバスまでの運搬も自分で行う必要があります。そのため、小学生は基本的にレンタルの利用をおすすめしています。</div>
</div>
<!-- beginner__faq__list__inner -->
<div class="beginner__faq__list__inner">
<div class="beginner__faq__list__inner__ttl">
<img class="beginner__faq__list__inner__ttl__icon" src="<?php echo $wp_url; ?>/dist/images/icon_q.png" alt="アイコン">
<span>レッスンのグループ分け方法と、レッスンのようすは？</span>
<div class="beginner__faq__list__inner__ttl__btn">
<span class="beginner__faq__list__inner__ttl__btn__toggle"></span>
<span class="beginner__faq__list__inner__ttl__btn__txt"></span>
</div>
</div>
<div class="beginner__faq__list__inner__ans">子どもたちのすべりを見て小グループを編成します。
<br>
<br>「事業参加カード」の自己申告と学年から、あらかじめ大きく「初めて」「初級」「中級」の班にわけ、キャンプ初日に再度、子どもたちのすべりを見て確認し、小グループを編成します。当財団職員がインストラクターをつとめ、アウトドアリーダーがサポートにあたります。スキーは初めてのお子様も、スキーブーツの履き方、雪の上を歩くところからはじめますので、ご安心ください。</div>
</div>
<!-- beginner__faq__list__inner -->
<div class="beginner__faq__list__inner">
<div class="beginner__faq__list__inner__ttl">
<img class="beginner__faq__list__inner__ttl__icon" src="<?php echo $wp_url; ?>/dist/images/icon_q.png" alt="アイコン">
<span>まったくスキーが初めてですが、大丈夫ですか？「初心者」と「初級」の違いは？</span>
<div class="beginner__faq__list__inner__ttl__btn">
<span class="beginner__faq__list__inner__ttl__btn__toggle"></span>
<span class="beginner__faq__list__inner__ttl__btn__txt"></span>
</div>
</div>
<div class="beginner__faq__list__inner__ans">参加者の半数以上が未経験者、または２回目程度の「初心者」です。
<br>
<br>まずスキー靴の履き方や、雪の上を歩くところから始めます。その後、平らなところで片足スキーつけるなど、段階的に指導していきますので、ご安心ください。
<br>「初級」とは、自分でスキーをはいて、緩やかな斜面でまっすぐすべる、止まることができることを指しています。</div>
</div>
<!-- beginner__faq__list__inner -->
<div class="beginner__faq__list__inner">
<div class="beginner__faq__list__inner__ttl">
<img class="beginner__faq__list__inner__ttl__icon" src="<?php echo $wp_url; ?>/dist/images/icon_q.png" alt="アイコン">
<span>お小遣いはどれくらい持たせればいいですか？</span>
<div class="beginner__faq__list__inner__ttl__btn">
<span class="beginner__faq__list__inner__ttl__btn__toggle"></span>
<span class="beginner__faq__list__inner__ttl__btn__txt"></span>
</div>
</div>
<div class="beginner__faq__list__inner__ans">活動中は必要ありません。
<br>
<br>スキーキャンプでは最終日にお土産を買う時間がありますので、お土産代として必要があれば学年に応じて、ご準備ください。1,000円～2,000円程度が平均です。（1円10円の端数がないようにしてください。活動中は貴重品としてお預かりします）
<br>売店では、300円程度のキーホルダー、600円程度のみやげ菓子（箱入り）などを販売しています。</div>
</div>
<!-- beginner__faq__list__inner -->
<div class="beginner__faq__list__inner">
<div class="beginner__faq__list__inner__ttl">
<img class="beginner__faq__list__inner__ttl__icon" src="<?php echo $wp_url; ?>/dist/images/icon_q.png" alt="アイコン">
<span>スキーキャンプで宿泊するホテルってどんなところですか？</span>
<div class="beginner__faq__list__inner__ttl__btn">
<span class="beginner__faq__list__inner__ttl__btn__toggle"></span>
<span class="beginner__faq__list__inner__ttl__btn__txt"></span>
</div>
</div>
<div class="beginner__faq__list__inner__ans">林間学校などの団体を専門に受け入れている大型の宿舎です。
<br>
<br>和室にグループごとで宿泊します。朝食はバイキング、昼食はホテルに戻ってカレーや炊き込みご飯など。夕食はグループで鍋料理を作りながら楽しみます。
<br>
<br>「パークホテル白樺館」は<a href="http://www.hachikougen.co.jp/#shirakabakan" target="_blank">こちら</a>からご覧になれます。</div>
</div>
<!-- beginner__faq__list__inner -->
<div class="beginner__faq__list__inner">
<div class="beginner__faq__list__inner__ttl">
<img class="beginner__faq__list__inner__ttl__icon" src="<?php echo $wp_url; ?>/dist/images/icon_q.png" alt="アイコン">
<span>荷物の準備のときに気をつけたほうがいいことは？</span>
<div class="beginner__faq__list__inner__ttl__btn">
<span class="beginner__faq__list__inner__ttl__btn__toggle"></span>
<span class="beginner__faq__list__inner__ttl__btn__txt"></span>
</div>
</div>
<div class="beginner__faq__list__inner__ans">お子様と一緒に準備してください。
<br>キャンプでは、自分の身の回りのことを自分ですることになります。特に低学年のお子様の荷造りを、保護者の方だけでされてしまうと、子どもは自分が何をいくつ持ってきたのか、どこに入っているのかわかりません。お子様と一緒に確認しながら準備をすることで、キャンプへの意識を高め、自立への第一歩にもなります。（持ち物にはかならず名前をご記入ください。）</div>
</div>
<!-- beginner__faq__list__inner -->
</div>
<!-- more-list -->
</div>
<!-- beginner__faq__list -->
<div class="text-center mt-5">
<button class="btn btn-primary more">さらによくある質問を見る<i class="fas fa-play-circle"></i></button>
</div>
</div>
</section>
<!-- menu4 -->

<section id="menu5" class="sec beginner__cancel bg-success">
<div class="container">
<div class="beginner__cancel__wrap">
<h2 class="text-center mb-5"><img src="<?php echo $wp_url; ?>/dist/images/ttl_cancel.png" alt="キャンセル"></h2>
<p class="mb-5">キャンプお申込み後、お客様の都合により参加を取り消させる場合は、参加費に対してお一人様につき下表の料率で取り消し料を申し受けます。なお、還付に際しての振込手数料はご負担願います。</p>
<div class="table-wrap">
<table class="table w-100">
<tbody>
<tr>
<th>①<span class="text-warning">20日目</span>にあたる日<span class="small">※</span><br>
以降の解除（②～⑥を除く）</th>
<td>日帰り旅行以外…旅行代金の20％<br>
日帰り旅行（夜行含む）…無　　料</td>
</tr>
<tr>
<th>②<span class="text-warning">10日目</span>にあたる日<span class="small">※</span><br>
以降の解除（③～⑥を除く）</th>
<td>日帰り旅行以外…旅行代金の20％<br>
日帰り旅行（夜行含む）…旅行代金の20％</td>
</tr>
<tr>
<th>③<span class="text-warning">7日目</span>にあたる日<span class="small">※</span><br>
以降の解除（④～⑥を除く）</th>
<td>日帰り旅行以外…旅行代金の30％<br>
日帰り旅行（夜行含む）…旅行代金の30％</td>
</tr>
<tr>
<th>④旅行開始日の<span class="text-warning">前日</span>の解除</th>
<td>日帰り旅行以外…旅行代金の40％<br>
日帰り旅行（夜行含む）…旅行代金の40％</td>
</tr>
<tr>
<th>⑤旅行開始<span class="text-warning">当日</span>の解除</th>
<td>日帰り旅行以外…旅行代金の50％<br>
日帰り旅行（夜行含む）…旅行代金の50％</td>
</tr>
<tr>
<th>⑥旅行<span class="text-warning">開始後</span>の解除<br>
または<span class="text-warning">無連絡</span>不参加</th>
<td>日帰り旅行以外…旅行代金の100％<br>
日帰り旅行（夜行含む）…旅行代金の100％</td>
</tr>
</tbody>
</table>
</div>
<p class="text-muted small mt-3 mb-md-5 mb-4">※旅行開始日の前日から起算してさかのぼって計算します。</p>
<h3 class="ttl__h3 pt-5">事業中止の判断について</h3>
<p>暴風警報等発令の場合は、以下のとおり事業の運営と中止を判断いたします。
<br>天災等による中止の場合の参加費は、全額お返しいたします。</p>
<div class="beginner__cancel__wrap__table">
<h3 class="table-wrap--ttl">事業前日まで</h3>
<div class="table-wrap">
<table class="table w-100">
<tbody>
<tr>
<th>事業の中止または、延期・変更が予想される事業実施の前日まで</th>
<td>事務局で詳細情報を確認し、場合により参加者の方に 事前確認の連絡を取らせていただきます。</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- beginner__cancel__wrap__table -->
<h3 class="table-wrap--ttl">事業当日（原則として）</h3>
<div class="table-wrap">
<table class="table w-100">
<tbody>
<tr>
<th>午前7時現在<br>
警報発令されている場合</th>
<td>日帰りの場合…事業中止<br>
1泊の場合…午前10時判断</td>
</tr>
<tr>
<th>午前10時現在<br>
警報が<span class="text-warning">解除された場合</span></th>
<td>日帰りの場合…事業中止<br>
1泊の場合…午前10時判断</td>
</tr>
<tr>
<th>午前10時現在<br>
警報発令されている場合</th>
<td>1泊の場合…事業中止</td>
</tr>
</tbody>
</table>
</div>
<p class="text-muted small mt-3 mb-5">※２泊以上の事業等においては、午後や翌日からの集合をご案内し、期間を短縮し実施する場合も あります。その際は個別にお知らせいたします。</p>
<p class="mb-0">天災地変、戦乱、暴動、運送・宿泊機関等のサービス提供の中止、官公署の命令その他の財団の関与し得ない事由が生じた場合において、事業の安全かつ円滑な実施が不可能となり、又は不可能となるおそれが極めて大きいときは、上記要件と同様の判断とします。</p>
</div>
<!-- beginner__cancel__wrap -->
</div>
</section>

<!-- Modal -->
<div class="modal fade" id="about-card" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<h3 class="ttl__h3">参加カードとは</h3>
<p>お子さまの健康面・心身の状態を把握し、安全で安心な活動を行うために提出をいただいております。また、グループ編成を行う際にも活用させていただきます。保護者の方からいただいた留意事項を十分に把握し、キャンプを進めてまいりますので、担当職員への要望・配慮事項などについても、お気軽にご記入ください。
<br>（例）
<br>・食事内容などのアレルギーがある場合
<br>・活動に配慮が必要な健康上の条件（ぜんそく、アトピーなど）
<br>・集団生活に参加する上で気になること、その他アウトドアリーダーに伝えたいこと　
<br>・緊急連絡先（日中つながりやすい電話番号）を必ず入れるようにしてください。
<br>
<br>キャンプの集合時にも必ず、保護者の方にお子さまの当日の健康状態を確認させていただきます。
<br>また、解散時には期間中のお子さまの活動の様子をお伝えいたします。
<br>
<br>※詳しくは、<a href="#menu4" data-dismiss="modal">「よくあるご質問」</a>に掲載していますので、ご参照ください。</p>
<p class="mb-0 mt-4 p-4 bg-light">当財団の個人情報保護規程に基づき、個人情報を取り扱います。キャンプ終了後、参加カードは完全に破棄し、個人情報は運営上必要な事務連絡に限り使用いたします。また、キャンプ中に撮影した写真は、情報誌やチラシ、ホームページなどに掲載させていただくことがありますので、ご了承ください。<a href="<?php echo $home; ?>/privacy-policy/">詳しくはこちら</a></p>
</div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="about-send" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<h3 class="ttl__h3">お振込先</h3>
<p><span class="font-weight-bold text-success">【お振込先】</span>
<br>・三井住友銀行　大阪公務部　普通預金　No.804　（名義）一般財団法人大阪府青少年活動財団
<br>・りそな銀行　大手支店　普通預金　　No.0239309　（名義）一般財団法人大阪府青少年活動財団
<br>・三菱ＵＦＪ銀行　谷町支店　普通預金　No.0514060　（名義）一般財団法人大阪府青少年活動財団
<br>・ゆうちょ銀行　No.00900-1-23101　（名義）一般財団法人大阪府青少年活動財団
<br>※ゆうちょダイレクトをご利用の場合は、記号の「-1」を省略
<br>
<br><span class="font-weight-bold text-success">【なるかわキャンプのお振込先】</span>
<br>・関西みらい銀行　枚岡支店　普通預金 No.591082　（名義）一般財団法人大阪府青少年活動財団</p>
</div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="about-cancel" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<h3 class="ttl__h3">キャンセル料金</h3>
<p>キャンプ開始日の前日から起算してさかのぼって20日目（日帰りキャンプの場合は、10日目）にあたる日。
<br>以後、標準国内旅行業約款に基づき、期間ごとに定めたキャンセル料を頂戴しております。
<br>
<br>※詳しくは、<a href="#menu5" data-dismiss="modal">「キャンセル料について」</a>に掲載していますので、ご参照ください。</p>
</div>
</div>
</div>
</div>
<?php get_footer();
