<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="mv__sub">
<img class="w-100" src="<?php echo $wp_url; ?>/dist/images/bg_low.png" alt="<?php the_title(); ?>">
<h2 class="mv__sub__ttl">
<img src="<?php echo $wp_url; ?>/dist/images/h1_recruit.png" alt="<?php the_title(); ?>">
</h2>
<?php
if (function_exists('yoast_breadcrumb')) {
yoast_breadcrumb('<div id="breadcrumbs"><div class="container">', '</div></div>');
}
?>
</section>

<div class="submenu">
<div class="container">
<ul class="submenu__list">
<li><a href="#submenu1">募集要項<i class="fas fa-caret-down"></i></a></li>
<li><a href="#submenu2">応募書類<i class="fas fa-caret-down"></i></a></li>
<li><a href="#submenu3">採用スケジュール<i class="fas fa-caret-down"></i></a></li>
<li><a href="#submenu4">提出先・お問い合わせ<i class="fas fa-caret-down"></i></a></li>
</ul>
<p class="mb-0">当財団では、このたび、次代を担うこころ豊かな青少年をはぐくむ当財団の設立趣旨に賛同し、情熱を持って共に活動いただける、チャレンジ精神旺盛な意欲のある人材を募集します。</p>
</div>
</div>

<section id="submenu1" class="sec outline">
<div class="container">
<h2 class="ttl__h2">
<span class="quicksand">OUTLINE</span>
<span>募集要項</span>
</h2>
<div class="table-wrap">
<table class="table w-100">
<tr>
<th>雇用形態</th>
<td>契約職員（正規職員への転換制度あり）<br>
六箇月間の試用期間中の勤務成績と適性により転換採用試験を行い、正規職員採用を判定します。</td>
</tr>
<tr>
<th>募集人数</th>
<td>若干名</td>
</tr>
<tr>
<th>採用期日</th>
<td>令和2(2020)年4月1日（水）</td>
</tr>
<tr>
<th>契約期間</th>
<td>令和2(2020)年4月1日（水）～令和3(2021)年3月31日（水）<br>
※ただし採用後六箇月間の勤務成績と適性により正規職員転換採用試験を行います。</td>
</tr>
<tr>
<th>勤務場所</th>
<td>当財団事務局及び運営青少年活動施設</td>
</tr>
<tr>
<th>従事業務</th>
<td>青少年健全育成事業の実施に係る業務及び施設管理運営業務</td>
</tr>
<tr>
<th>応募条件</th>
<td>令和2(2020)年3月に四年制大学を卒業見込み、または既卒の方で、普通自動車運転免許を有する方</td>
</tr>
<tr>
<th>選考方法</th>
<td>書類選考のうえ、筆記（一般常識、小論文）及び面接試験</td>
</tr>
<tr>
<th>勤務形態</th>
<td>週休２日制（ローテーション勤務、部所により年間変形労働制）</td>
</tr>
<tr>
<th>有給休暇</th>
<td>労働基準法に定める通り</td>
</tr>
<tr>
<th>有給休暇</th>
<td>基本給180,000円<br>
※ただし試用期間後正規職員に転換すれば、200,000円程度<br>
昇給あり<br>
賞与あり（ただし業績による）<br>
退職金なし（ただし、正規職員転換後はあり）<br>
社会保険あり<br>
労働保険あり<br>
通勤手当あり（上限月額50,000円）<br>
試用期間六箇月</td>
</tr>
</table>
</div>
</div>
</section>
<!-- outline -->
<section id="submenu2" class="sec documents bg-success">
<div class="container">
<h2 class="ttl__h2 white">
<span class="quicksand">documents</span>
<span>応募書類</span>
</h2>
<div class="documents__list">
<div class="documents__list__inner">
<div class="documents__list__inner__check"><img src="<?php echo $wp_url; ?>/dist/images/icon_check.png" alt="アイコン"></div>
<div class="documents__list__inner__img"><img src="<?php echo $wp_url; ?>/dist/images/icon_doc_1.png" alt=""></div>
<h3>自筆による履歴書</h3>
<p>自己紹介書のあるもの、最近六箇月以内撮影の写真添付のこと</p>
</div>
<!-- documents__list__inner -->
<div class="documents__list__inner">
<div class="documents__list__inner__check"><img src="<?php echo $wp_url; ?>/dist/images/icon_check.png" alt="アイコン"></div>
<div class="documents__list__inner__img"><img src="<?php echo $wp_url; ?>/dist/images/icon_doc_2.png" alt=""></div>
<h3>最終学校の卒業証明書<br>又は卒業見込証明書</h3>
</div>
<!-- documents__list__inner -->
<div class="documents__list__inner">
<div class="documents__list__inner__check"><img src="<?php echo $wp_url; ?>/dist/images/icon_check.png" alt="アイコン"></div>
<div class="documents__list__inner__img"><img src="<?php echo $wp_url; ?>/dist/images/icon_doc_3.png" alt=""></div>
<h3>自動車運転免許証の写し</h3>
</div>
<!-- documents__list__inner -->
<div class="documents__list__inner">
<div class="documents__list__inner__check"><img src="<?php echo $wp_url; ?>/dist/images/icon_check.png" alt="アイコン"></div>
<div class="documents__list__inner__img"><img src="<?php echo $wp_url; ?>/dist/images/icon_doc_4.png" alt=""></div>
<h3>職務経歴書</h3>
<p>前職のあった者</p>
</div>
<!-- documents__list__inner -->
<div class="documents__list__inner">
<div class="documents__list__inner__check"><img src="<?php echo $wp_url; ?>/dist/images/icon_check.png" alt="アイコン"></div>
<div class="documents__list__inner__img"><img src="<?php echo $wp_url; ?>/dist/images/icon_doc_5.png" alt=""></div>
<h3>健康診断書</h3>
<p>最近三箇月以内に実施したもの</p>
</div>
<!-- documents__list__inner -->
<div class="documents__list__inner">
<div class="documents__list__inner__check"><img src="<?php echo $wp_url; ?>/dist/images/icon_check.png" alt="アイコン"></div>
<div class="documents__list__inner__img"><img src="<?php echo $wp_url; ?>/dist/images/icon_doc_6.png" alt=""></div>
<h3>履歴書記載資格を<br>証する書類の写し</h3>
</div>
<!-- documents__list__inner -->
</div>
<!-- documents__list -->
<p class="mb-0 mt-4 text-white">※応募書類は返却いたしませんので予めご了承ください。
<br>なお、応募書類に記載されている個人情報は当該採用試験以外の目的に使用されることはありません。</p>
</div>
</section>
<!-- documents -->
<section id="submenu3" class="sec schedule">
<div class="container">
<h2 class="ttl__h2">
<span class="quicksand">Schedule</span>
<span>採用スケジュール</span>
</h2>
<div class="schedule__danger">
<p><img src="<?php echo $wp_url; ?>/dist/images/icon_check_red.png" alt="アイコン">今回の募集は終了いたしました</p>
</div>
<!-- schedule__danger -->
<div class="table-wrap">
<table class="table w-100">
<tr>
<th>応募受付</th>
<td>令和元(2019)年9月2日(月)～9月13日（金）午後5時まで（必着）<br>
受験を希望する方は、あらかじめ電話連絡のうえ応募書類をご持参、または郵送ください。</td>
</tr>
<tr>
<th>採用試験</th>
<td>令和元(2019)年9月21日(土)大阪市内で実施<br>
（時間・場所等は応募者に後日詳細を通知）</td>
</tr>
<tr>
<th>結果発表</th>
<td>令和元(2019)年9月27日(金)結果発送（書留）</td>
</tr>
</table>
</div>
</div>
</section>
<!-- schedule -->
<section id="submenu4" class="sec entry bg-success">
<div class="container">
<h2 class="ttl__h2 white">
<span class="quicksand">ENTRY / contact</span>
<span>提出先・お問い合わせ先</span>
</h2>
<div class="entry__contact">
<p>一般財団法人大阪府青少年活動財団 経営企画部（担当：三枝）
<br>〒556-0021 大阪市浪速区幸町2丁目7－3 りそな・アルテ桜川ビル4階 <a href="https://goo.gl/maps/5d7y7g85jbZhK1cG8" target="_blank">Google Mapで見る</a></p>
<p class="entry__contact__tel"><a href="tel:0665617676"><img src="<?php echo $wp_url; ?>/dist/images/recruit_tel.png" alt="電話"></a></p>
<div class="entry__contact__link">
<div class="entry__contact__link__left"><img src="<?php echo $wp_url; ?>/dist/images/icon_fax.png" alt="FAX"><span>06-6561-7801</span></div>
<div class="entry__contact__link__right"><img src="<?php echo $wp_url; ?>/dist/images/icon_mail.png" alt="mail"><a class="more-txt" href="mailto:soumu@yso.or.jp">メールをする<i class="fas fa-play-circle text-success ml-1"></i></a></div>
</div>
</div>
<!-- entry__contact -->
</div>
</section>
<?php get_footer();
