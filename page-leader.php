<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="mv__sub">
<img class="w-100" src="<?php echo $wp_url; ?>/dist/images/bg_low.png" alt="<?php the_title(); ?>">
<h2 class="mv__sub__ttl">
<img src="<?php echo $wp_url; ?>/dist/images/h1_ol.png" alt="<?php the_title(); ?>">
</h2>
<?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<div id="breadcrumbs"><div class="container">', '</div></div>');
}
?>
</section>

<div class="submenu">
<div class="container">
<ul class="submenu__list mb-0">
<li><a href="#submenu1">リーダーたちの声<i class="fas fa-caret-down"></i></a></li>
<li><a href="#submenu2">活動の魅力<i class="fas fa-caret-down"></i></a></li>
<li><a href="#submenu3">活動場所<i class="fas fa-caret-down"></i></a></li>
<li><a href="#submenu4">募集要項<i class="fas fa-caret-down"></i></a></li>
<li><a href="#submenu5">お問い合わせ<i class="fas fa-caret-down"></i></a></li>
<li><a href="#submenu6">年間スケジュール<i class="fas fa-caret-down"></i></a></li>
</ul>
</div>
</div>
<!-- submenu -->

<section class="sec intoro">
<div class="container">
<div class="intoro__wrap">
<div class="intoro__wrap__img order-md-last">
<img src="<?php echo $wp_url; ?>/dist/images/ol_intoro_img_1.png" alt="アウトドアリーダーとは">
</div>
<div class="intoro__wrap__txt order-md-first">
<h3><img src="<?php echo $wp_url; ?>/dist/images/ttl_ol_1.png" alt="アウトドアリーダーとは"></h3>
<p>これは、ダミーです。吾輩は猫である。名前はまだ無い。どこで生れたかとんと見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。吾輩はここで始めて人間というものを見た。しかもあとで聞くとそれは書生という人間中で一番獰悪な種族であったそうだ。この書生というのは時々我々を捕えて煮て食うという話である。(200文字以内)</p>
</div>
</div>
<!-- intoro__wrap -->
<div class="intoro__imgs">
<img src="<?php echo $wp_url; ?>/dist/images/ol_intoro_img_2.png" alt="写真">
<img src="<?php echo $wp_url; ?>/dist/images/ol_intoro_img_3.png" alt="写真">
<img src="<?php echo $wp_url; ?>/dist/images/ol_intoro_img_4.png" alt="写真">
<img src="<?php echo $wp_url; ?>/dist/images/ol_intoro_img_5.png" alt="写真">
</div>
<div class="intoro__wrap">
<div class="intoro__wrap__img">
<img src="<?php echo $wp_url; ?>/dist/images/ol_intoro_img_6.png" alt="アウトドアリーダーとは">
</div>
<div class="intoro__wrap__txt">
<h3><img src="<?php echo $wp_url; ?>/dist/images/ttl_ol_2.png" alt="アウトドアリーダーとは"></h3>
<p>これは、ダミーです。吾輩は猫である。名前はまだ無い。どこで生れたかとんと見当がつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。吾輩はここで始めて人間というものを見た。しかもあとで聞くとそれは書生という人間中で一番獰悪な種族であったそうだ。この書生というのは時々我々を捕えて煮て食うという話である。(200文字以内)</p>
</div>
</div>
<!-- intoro__wrap -->
</div>
</section>
<!-- intoro -->

<section id="submenu1" class="sec voice bg-success">
<div class="container">
<h2 class="ttl__h2 white">
<span class="quicksand">VOICE</span>
<span>リーダーたちの声</span>
</h2>
</div>
<div class="voice__list">
<?php
$args = [
    'posts_per_page' => 10,
    'post_type' => 'voice',
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$t = get_the_title();
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'medium');
}
$school = get_field('ol_school');
$grade = get_field('ol_grade');
$ttl = get_field('ol_voice_ttl');
$txt = get_field('ol_voice_txt');
$nick_name = get_field('ol_name');
?>
<div class="voice__list__inner">
<div class="voice__list__inner__img"><img src="<?php echo $i; ?>" alt="<?php echo $t; ?>"></div>
<h3><?php echo $ttl; ?></h3>
<p><?php echo $txt; ?></p>
<div class="voice__list__inner__meta">
<p class="voice__list__inner__meta__name"><?php echo $nick_name; ?></p>
<span class="voice__list__inner__meta__school"><?php echo $school; ?></span>
<span class="voice__list__inner__meta__grade"><?php echo $grade; ?></span>
</div>
</div>
<?php endforeach; wp_reset_postdata(); ?>
</div>
<!-- voice__list -->
</section>
<!-- voice -->

<section id="submenu2" class="sec attraction bg-grid bg-info">
<div class="container">
<h2 class="ttl__h2">
<span class="quicksand">attraction</span>
<span>活動の魅力</span>
</h2>
<div class="attraction__list">
<div class="attraction__list__inner"><img src="<?php echo $wp_url; ?>/dist/images/attraction_1.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/attraction_1.png 1x, <?php echo $wp_url; ?>/dist/images/attraction_1@2x.png 2x"></div>
<div class="attraction__list__inner"><img src="<?php echo $wp_url; ?>/dist/images/attraction_2.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/attraction_2.png 1x, <?php echo $wp_url; ?>/dist/images/attraction_2@2x.png 2x"></div>
<div class="attraction__list__inner"><img src="<?php echo $wp_url; ?>/dist/images/attraction_3.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/attraction_3.png 1x, <?php echo $wp_url; ?>/dist/images/attraction_3@2x.png 2x"></div>
<div class="attraction__list__inner"><img src="<?php echo $wp_url; ?>/dist/images/attraction_4.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/attraction_4.png 1x, <?php echo $wp_url; ?>/dist/images/attraction_4@2x.png 2x"></div>
</div>
</div>
</section>
<!-- attraction -->

<section id="submenu3" class="sec place bg-success">
<div class="container">
<h2 class="ttl__h2 white">
<span class="quicksand">place</span>
<span>活動場所</span>
</h2>
</div>
<div class="voice__list place__list">
<?php
$args = [
    'posts_per_page' => 10,
    'post_type' => 'palce',
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$t = get_the_title();
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
}
$url = get_field('ol_url');
?>
<div class="place__list__inner">
<div class="place__list__inner__img"><img src="<?php echo $i; ?>" alt="<?php echo $t; ?>"></div>
<div class="place__list__inner__txt">
<h3><?php echo $t; ?></h3>
<p><?php echo strip_tags(get_the_content()); ?></p>
<div class="place__list__inner__link"><a class="more-txt" href="<?php echo $url; ?>" target="_blank">詳しく見る<i class="fas fa-play-circle text-success ml-1"></i></a></div>
</div>
</div>
<?php endforeach; wp_reset_postdata(); ?>
</div>
<!-- place__list -->
<div class="container">
<div class="place__box">
<h3 class="ttl__h3">その他の活動場所</h3>
<p class="mb-0">ユースサービス大阪が運営している施設以外の場所へ出かけ、様々なキャンプを実施しています。
YMCA阿南海洋センター・国立淡路⻘少年交流の家・大阪府立⻘少年海洋センター・尼崎市立美方高原自然の家（兵庫県香美町）・ハチ高原（兵庫県養父市）・国立妙高⻘少年自然の家（新潟県妙高市）・大阪府立大型児童館「ビッグバン」・国立乗鞍⻘少年交流の家（岐⾩県高⼭市） など</p>
</div>
</div>
</section>
<!-- place -->

<section id="submenu4" class="sec olrecruit">
<div class="container">
<h2 class="ttl__h2">
<span class="quicksand">RECRUIT</span>
<span>募集要項</span>
</h2>
<div class="table-wrap">
<table class="table w-100">
<tr>
<th class="text-md-nowrap">対象者</th>
<td>原則として、4年制大学の1〜2年生の方で、子どもとの関わり方、キャン
プや自然などに興味のある方。（基本的に大学卒業時まで活動できる方）</td>
</tr>
<tr>
<th class="text-md-nowrap">募集人数</th>
<td>ユースリーダー40名程度<br>
なるかわリーダー25名程度</td>
</tr>
<tr>
<th class="text-md-nowrap">必要経費</th>
<td>ユニフォーム貸与、活動中の食事・交通費を⽀給いたします。</td>
</tr>
<tr>
<th class="text-md-nowrap">活動場所</th>
<td>
<ul>
<li><a href="http://www.yso-yoshinomiyataki.jp/index.html" target="_blank">吉野宮滝野外学校（奈良県吉野町）</a></li>
<li><a href="http://camp-narukawa.com/" target="_blank">東大阪市立野外活動センター『自由の森なるかわ』（大阪府東大阪市）</a></li>
<li><a href="http://shizen.osaka-yha.or.jp/" target="_blank">大阪府立少年自然の家（大阪府⾙塚市）</a></li>
<li><a href="https://www.yso.or.jp/minoh.html" target="_blank">箕⾯市立⻘少年教学の森野外活動センター（大阪府箕⾯市）</a></li>
<li><a href="https://www.bigbang-osaka.or.jp/" target="_blank">大阪府立大型児童館ビッグバン（大阪府堺市）</a></li>
<li><a href="https://www.osakaymca.or.jp/outdoor/anan/index.html" target="_blank">ＹＭＣＡ阿南海洋センター（徳島県阿南市）</a></li>
<li><a href="http://awaji.niye.go.jp" target="_blank">国立淡路⻘少年交流の家（兵庫県南あわじ市）</a></li>
<li><a href="http://www.osaka-kaiyo.com/" target="_blank">大阪府立⻘少年海洋センター（大阪府岬町）</a></li>
<!-- <li><a href="" target="_blank">兵庫県立いえしま自然体験センター（兵庫県姫路市）</a></li> -->
<!-- <li><a href="" target="_blank">国立妙高⻘少年自然の家（新潟県妙高市）</a></li> -->
<li><a href="https://norikura.niye.go.jp/norikura/" target="_blank">国立乗鞍⻘少年交流の家（岐⾩県高⼭市）</a></li>
<li><a href="https://www.hachi-hachikita.co.jp/hachi/index.html" target="_blank">ハチ高原スキー場（兵庫県養父市）</a>など</li>
</ul>
</td>
</tr>
<tr>
<th class="text-md-nowrap">研修制度</th>
<td>年間を通して宿泊研修、日帰り研修を実施します。</td>
</tr>
<tr>
<th class="text-md-nowrap">保険の加入</th>
<td>ボランティア活動保険に加入します。（加入費は当財団負担）</td>
</tr>
<tr>
<th class="text-md-nowrap">応募方法</th>
<td>下記の受付は終了いたしました。ご興味のある方はお電話でお問い合わせください。<br>
<br>
まずは下記説明会（ガイダンス）へお越しください！（所要時間：30分〜1時間程度）<br>
お好きな日、お好きな時間にお越しください。<br>
活動を紹介する写真などを見ながら、現在活動中のリーダーが詳しく説明し、応募を受け付けます。<br>
<br>
<s>【ガイダンス】<br>
日程：<br>
4/18（⽊）18：30〜21：00<br>
4/19（金）18：30〜21：00<br>
4/21（日）10：00〜16：30<br>
4/26（金）18：30〜21：00<br>
会場：<a href="https://osakademanabu.com/namba/access" target="_blank">難波市⺠学習センター</a> 第１研修室（なんばＯＣＡＴビル4階）<br>
</s><br>
説明会（ガイダンス）に来られない方で、活動に興味がある方は下記までお問い合わせください。
【ユースサービス大阪事務局】
大阪市浪速区幸町2丁目7−3 りそな・アルテ桜川ビル4階（阪神なんば線／地下鉄千日前線「桜川」駅すぐ）</td>
</tr>
<tr>
<th class="text-md-nowrap">アウトドアリーダー募集チラシ</th>
<td>受付は終了いたしました。ご興味のある方はお電話でお問い合わせください。<br>
<span class="d-inline-block mr-1 mt-3">
<a href="<?php echo $home; ?>/pdf/leader_aa.pdf" target="_blank">
<img src="<?php echo $wp_url; ?>/dist/images/tirashi_1.png" alt="アウトドアリーダー募集チラシ"><span class="small d-block text-center text-muted">クリックで拡大</span></span></a>
<span class="d-inline-block">
<a href="<?php echo $home; ?>/pdf/leader_bb.pdf" target="_blank">
<img src="<?php echo $wp_url; ?>/dist/images/tirashi_2.png" alt="アウトドアリーダー募集チラシ"><span class="small d-block text-center text-muted">クリックで拡大</span></span></a>
</td>
</tr>
<tr>
<th class="text-md-nowrap">アウトドアリーダー用Instagram</th>
<td><a href="https://www.instagram.com/yso̲camp/" target="_blank">Instagramへ</a></td>
</tr>
</table>
</div>
<!-- table-wrap -->
</div>
</section>
<!-- olrecruit -->

<section id="submenu5" class="sec ol__form bg-success">
<div class="container">
<h2 class="ttl__h2">
<span class="quicksand">CONTACT</span>
<span>お問い合わせフォーム</span>
</h2>
<?php echo do_shortcode('[contact-form-7 id="36" title="アウトリーダー"]'); ?>
</div>
</section>
<!-- ol__form -->

<section id="submenu6" class="sec schedule">
<div class="container">
<h2 class="ttl__h2">
<span class="quicksand">schedule</span>
<span>年間スケジュール</span>
</h2>
<div class="table-wrap">
<table class="table w-100">
<tr>
<th class="text-nowrap">4月</th>
<td>新人リーダー募集活動（リーダーガイダンス）<br>
主催キャンプ実施<br>
キャンプ場利用対応</td>
</tr>
<tr>
<th class="text-nowrap">5月</th>
<td>5月研修（組織別実務研修、テントサイト開設準備）<br>
主催キャンプ実施<br>
キャンプ場利用対応<br>
理論研修</td>
</tr>
<tr>
<th class="text-nowrap">6月</th>
<td>6月研修（組織別実務研修、新人リーダー研修、救急法）<br>
主催キャンプ実施<br>
キャンプ場利用対応</td>
</tr>
<tr>
<th class="text-nowrap">7月</th>
<td>7月研修（夏期事業研修、新人リーダー委嘱式）<br>
主催キャンプ実施<br>
キャンプ場利用対応</td>
</tr>
<tr>
<th class="text-nowrap">8月</th>
<td>8月研修（夏期シーズンの振り返り）<br>
主催キャンプ実施<br>
キャンプ場利用対応</td>
</tr>
<tr>
<th class="text-nowrap">9月</th>
<td>9月研修（ケーススタディ）<br>
主催キャンプ実施<br>
キャンプ場利用対応</td>
</tr>
<tr>
<th class="text-nowrap">10月</th>
<td>理論研修<br>
主催キャンプ実施<br>
キャンプ場利用対応</td>
</tr>
<tr>
<th class="text-nowrap">11月</th>
<td>11月研修（運営施設合同研修）<br>
主催キャンプ実施<br>
キャンプ場利用対応</td>
</tr>
<tr>
<th class="text-nowrap">12月</th>
<td>12月研修（冬期事業研修、スキー研修、キャンプ場内整備）<br>
公開講座（リスクマネジメント）<br>
主催キャンプ実施<br>
キャンプ場利用対応</td>
</tr>
<tr>
<th class="text-nowrap">1月</th>
<td>1月研修（グループワーク）<br>
主催キャンプ実施<br>
キャンプ場利用対応<br>
理論研修</td>
</tr>
<tr>
<th class="text-nowrap">2月</th>
<td>2月研修（自然観察技術、プログラム企画）<br>
主催キャンプ実施<br>
キャンプ場利用対応</td>
</tr>
<tr>
<th class="text-nowrap">3月</th>
<td>3月研修（ランクアップ研修）<br>
4年生卒業式<br>
主催キャンプ実施<br>
キャンプ場利用対応</td>
</tr>
</table>
</div>
</div>
</section>
<!-- schedule -->
<?php get_footer();
