<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="mv__sub">
<img class="w-100" src="<?php echo $wp_url; ?>/dist/images/bg_low.png" alt="<?php the_title(); ?>">
<h2 class="mv__sub__ttl">
<img src="<?php echo $wp_url; ?>/dist/images/h1_about.png" alt="<?php the_title(); ?>">
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
<li><a href="#submenu1">団体概要<i class="fas fa-caret-down"></i></a></li>
<li><a href="#submenu2">アクセス<i class="fas fa-caret-down"></i></a></li>
<li><a href="#submenu3">事業概要<i class="fas fa-caret-down"></i></a></li>
<li><a href="#submenu4">沿革<i class="fas fa-caret-down"></i></a></li>
<li><a href="#submenu5">賛助会員について<i class="fas fa-caret-down"></i></a></li>
</ul>
</div>
</div>
<!-- submenu -->
<section id="submenu1" class="sec about__outline">
<div class="container">
<h2 class="ttl__h2">
<span class="quicksand">OUTLINE</span>
<span>団体概要</span>
</h2>
<div class="table-wrap about">
<table class="table w-100">
<tr>
<th>団体名</th>
<td>一般財団法人大阪府⻘少年活動財団（愛称：ユースサービス大阪）</td>
</tr>
<tr>
<th>事務所住所</th>
<td>〒556-0021&nbsp;&nbsp;大阪市浪速区幸町2丁7番3号 りそな・アルテ桜川ビル4F</td>
</tr>
<tr>
<th>連絡先</th>
<td><span class="font-weight-bold text-success">【事務局】</span><br>
<span class="font-weight-bold">経営企画部 企画総務課</span><br>
TEL：06-6561-7676&nbsp;&nbsp;/&nbsp;&nbsp;FAX：06-6561-7801<br>
<br>
<span class="font-weight-bold">育成事業部 事業推進課</span><br>
TEL：06-6561-7800&nbsp;&nbsp;/&nbsp;&nbsp;FAX：06-6561-7801<br>
<br>
<span class="font-weight-bold text-success">【キャンプ場】</span><br>
<span class="font-weight-bold">吉野宮滝野外学校</span><br>
〒639-3443&nbsp;&nbsp;奈良県吉野郡吉野町宮滝101-1<br>
TEL：0746-39-9136<br>
<br>
<span class="font-weight-bold">箕⾯市立⻘少年教学の森野外活動センター</span><br>
〒562-0005&nbsp;&nbsp;箕⾯市新稲2-257-3<br>
TEL：072-722-8110&nbsp;&nbsp;/&nbsp;&nbsp;FAX：072-722-5766<br>
<br>
<span class="font-weight-bold">東大阪立野外活動センター</span><br>
〒579-8061&nbsp;&nbsp;東大阪市六万寺町1-1668<br>
TEL：072-986-1551&nbsp;&nbsp;/&nbsp;&nbsp;FAX：072-986-1550<br>
<br>
<span class="font-weight-bold">大阪府立少年自然の家</span><br>
〒597-0102&nbsp;&nbsp;⾙塚市⽊積字秋⼭⻑尾3350<br>
TEL：072-478-8331&nbsp;&nbsp;/&nbsp;&nbsp;FAX：072-478-8335<br>
<br>
<span class="font-weight-bold text-success">【貸会議室等】</span><br>
<span class="font-weight-bold">大阪府立男⼥共同参画・⻘少年センター</span><br>
〒540-0008&nbsp;&nbsp;大阪市中央区大手前1-3-49<br>
TEL：06-6910-8500&nbsp;&nbsp;/&nbsp;&nbsp;FAX：06-6910-8775</td>
</tr>
<tr>
<th>アクセス</th>
<td><span class="font-weight-bold text-success">【事務局】</span><br>
地下鉄千日前線「桜川」駅 ①番出口よりすぐ<br>
<a href="#submenu2">アクセス方法の詳細はコチラ ></a></td>
</tr>
<tr>
<th>設立年月日</th>
<td>1966年（昭和41年）2月28日</td>
</tr>
<tr>
<th>基本財産</th>
<td>1億100万円</td>
</tr>
<tr>
<th>定款</th>
<td><a href="<?php echo $home; ?>/pdf/teikan.pdf" target="_blank">定款（PDF 216KB）</a></td>
</tr>
<tr>
<th>URL</th>
<td><a href="<?php echo $home; ?>/">http://www.yso.or.jp</a></td>
</tr>
<tr>
<th>評議員名簿<br>（評議員：6名）</th>
<td>片岡 弘尚（特定非営利活動法人ナック 副理事⻑）<br>
⻲井 順一（特定非営利活動法人みち 福祉作業所りんどう 指導員）<br>
佐和 宏士（公益財団法人毎日新聞大阪社会事業団 事務局⻑）<br>
新家 庸子（一般社団法人ガールスカウト大阪府連盟 前連盟⻑）<br>
錦織 一郎（学校法人大阪⼥学院 理事⻑）<br>
中⼭ 羊奈（公益財団法人大阪ＹＷＣＡ 常務理事・総幹事）</td>
</tr>
<tr>
<th>役員名簿<br>
（顧問：4名、理事：9名、監事：2名）</th>
<td><span class="font-weight-bold text-success">■ 顧問</span><br>
井村 雅代（一般財団法人井村シンクロクラブ 代表理事）<br>
尾崎 裕 （大阪商工会議所会頭）<br>
有吉 伸人（日本放送協会大阪放送局⻑）<br>
平岡 英信（学校法人清風学園 理事⻑）<br>
<br>
<span class="font-weight-bold text-success">■ 理事</span><br>
【代表理事】永吉 宏英（一般財団法人大阪府⻘少年活動財団 理事⻑）<br>
【代表理事】中野 泰孝（一般財団法人大阪府⻘少年活動財団 専務理事）<br>
今井 正裕（一般財団法人大阪府⻘少年活動財団 理事兼吉野宮滝野外学校部⻑）<br>
前垣 益⼰（一般財団法人大阪府⻘少年活動財団 中期計画推進担当兼指定管理施設応募担当理事）<br>
一村 ⼩百合（関⻄福祉科学大学 社会福祉学部社会福祉学科 准教授）<br>
中島 清治 （瑞⽊総合法律事務所 代表弁護士）<br>
⻄⽥ 法一 （公益財団法人大阪交通災害遺族会 事務局次⻑）<br>
福島 広明（日本放送協会大阪放送局 制作部⻑）<br>
二葉 智代（子どもの権利条約関⻄ネットワーク 共同副代表）<br>
<br>
<span class="font-weight-bold text-success">■ 監事</span><br>
竹川 清（竹川清公認会計士・税理士事務所 所⻑）<br>
末岡 祥弘（学校法人大阪ＹＭＣＡ理事⻑）<br>
</td>
</tr>
<!-- <tr>
<th>役員報酬について</th>
<td><a href="">役員報酬表を見る</a></td>
</tr> -->
</table>
</div>
</div>
</section>
<!-- about__outline -->
<section id="submenu2" class="sec about__access bg-info bg-grid">
<div class="container">
<h2 class="ttl__h2">
<span class="quicksand">access</span>
<span>アクセス</span>
</h2>
<div class="about__access__map">
<div class="about__access__map__inner">
<div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.4379474605853!2d135.48572741471682!3d34.66889479242978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e79c67d0c021%3A0x4faa032619857d35!2z44Om44O844K544K144O844OT44K55aSn6Ziq77yI5LiA6Iis6LKh5Zuj5rOV5Lq65aSn6Ziq5bqc6Z2S5bCR5bm05rS75YuV6LKh5Zuj77yJ!5e0!3m2!1sja!2sjp!4v1589181986207!5m2!1sja!2sjp"></iframe>
</div>
<p class="mt-3 mb-0 text-right"><a class="more-txt" href="https://goo.gl/maps/PF6eXwBVZoF7Vc8c7" target="_blank">Google Mapで見る<i class="fas fa-play-circle text-success ml-1"></i></a></p>
</div>
<div class="about__access__map__inner">
<div>
<img src="<?php echo $wp_url; ?>/dist/images/map.png" alt="地図">
</div>
<p class="mt-3 mb-0 text-right">クッリクで拡大します</p>
</div>
</div>
<!-- about__access__map -->
<div class="about__access__info">
<p>〒556-0021  大阪市浪速区幸町2丁目7-3 りそな・アルテ桜川ビル４F
<br>TEL （経営企画部）06-6561-7676 （育成事業部）06-6561-7800
<br>FAX （部共通）06-6561-7801</p>
<p class="mb-0"><span class="font-weight-bold text-success">【最寄駅】</span>
<br>地下鉄千日前線「桜川」駅下車①番出口すぐ
<br>阪神電車「桜川」駅下車③番出口すぐ</p>
</div>
<!-- about__access__info -->
<div class="about__access__other">
<h3 class="ttl__h3">その他の所在地</h3>
<div class="about__access__other__inner">
<p><span class="font-weight-bold text-success">吉野宮滝野外学校</span>
<br>〒639-3443 奈良県吉野郡吉野町宮滝101-1<span class="tel">TEL 0746-39-9136</span></p>
<p><a class="more-txt" href="http://www.yso-yoshinomiyataki.jp/index.html" target="_blank">詳しく見る<i class="fas fa-play-circle text-success ml-1"></i></a></p>
</div>
<div class="about__access__other__inner">
<p><span class="font-weight-bold text-success">箕⾯市立⻘少年教学の森野外活動センター</span>
<br>〒562-0005 箕⾯市新稲2-257-3<span class="tel">TEL 072-722-8110</span></p>
<p><a class="more-txt" href="https://www.yso.or.jp/minoh.html" target="_blank">詳しく見る<i class="fas fa-play-circle text-success ml-1"></i></a></p>
</div>
<div class="about__access__other__inner">
<p><span class="font-weight-bold text-success">東大阪市立野外活動センター「自由の森なるかわ」</span>
<br>〒579-8061 東大阪市六万寺町1-1668<span class="tel">TEL 072-986-1551</span></p>
<p><a class="more-txt" href="http://camp-narukawa.com/" target="_blank">詳しく見る<i class="fas fa-play-circle text-success ml-1"></i></a></p>
</div>
<div class="about__access__other__inner">
<p><span class="font-weight-bold text-success">大阪府立少年自然の家</span>
<br>〒597-0102 ⾙塚市⽊積字秋⼭⻑尾3350<span class="tel">TEL 072-478-8331</span></p>
<p><a class="more-txt" href="http://shizen.osaka-yha.or.jp/" target="_blank">詳しく見る<i class="fas fa-play-circle text-success ml-1"></i></a></p>
</div>
<div class="about__access__other__inner">
<p><span class="font-weight-bold text-success">大阪府立男⼥共同参画・⻘少年センター（ドーンセンター）</span>
<br>〒540-0008 大阪市中央区大手前1-3-49<span class="tel">TEL 06-6910-8500</span></p>
<p><a class="more-txt" href="https://www.dawncenter.jp/" target="_blank">詳しく見る<i class="fas fa-play-circle text-success ml-1"></i></a></p>
</div>
</div>
<!-- about__access__other -->
</div>
</section>
<!-- about__access -->
<section id="submenu3" class="sec about__business">
<div class="container">
<h2 class="ttl__h2">
<span class="quicksand">business</span>
<span>事業概要</span>
</h2>
<div class="table-wrap about">
<table class="table w-100">
<tr>
<th>事業計画<br>令和2年（2020）年度</th>
<td><a href="<?php $home; ?>/pdf/2020yso-campplan01.pdf" target="_blank">2020年度事業計画（PDF 254KB）</a><br>
<a href="<?php $home; ?>/pdf/2020yso-campplan02.pdf" target="_blank">2020年度事業計画《資料編》（PDF 375KB）</a><br>
<a href="<?php $home; ?>/pdf/2020yso-campplan03.pdf" target="_blank">2020年度収⽀予算書（PDF 102KB）</a></td>
</tr>
<tr>
<th>事業計画<br>平成31（2019）年度</th>
<td><a href="<?php $home; ?>/pdf/2019yso-campplan01.pdf" target="_blank">2019年度事業計画（PDF 254KB）</a><br>
<a href="<?php $home; ?>/pdf/2019yso-campplan02.pdf" target="_blank">2019年度事業計画《資料編》（PDF 375KB）</a><br>
<a href="<?php $home; ?>/pdf/2019yso-campplan03.pdf" target="_blank">2019年度収⽀予算書（PDF 102KB）</a></td>
</tr>
<tr>
<th>事業報告<br>
平成30（2018）年度</th>
<td><a href="<?php $home; ?>/pdf/2018-01_report01.pdf" target="_blank">2018年度事業報告（PDF 1,174KB）</a><br>
<a href="<?php $home; ?>/pdf/2018-01_report02.pdf" target="_blank">2018年度事業報告《資料編》（PDF 484KB）</a><br>
<a href="<?php $home; ?>/pdf/2018-02_BS.pdf" target="_blank">2018年度貸借対照表（PDF 100KB）</a><br>
<a href="<?php $home; ?>/pdf/2018-03_PL.pdf" target="_blank">2018年度正味財産増減計算書（PDF 125KB）</a><br>
<a href="<?php $home; ?>/pdf/2018-04_PLB.pdf" target="_blank">2018年度正味財産増減計算書内訳書（PDF 250KB）</a><br>
<a href="<?php $home; ?>/pdf/2018-05_NFS.pdf" target="_blank">2018年度財務諸表に対する注記（PDF 127KB）</a><br>
<a href="<?php $home; ?>/pdf/2018-06_SA.pdf" target="_blank">2018年度附属明細書（PDF 962KB）</a><br>
<a href="<?php $home; ?>/pdf/2018-07_PUB.pdf" target="_blank">2018年度公益目的⽀出計画実施報告書（PDF 64KB）</a></td>
</tr>
<tr>
<th>平成29（2017）年度</th>
<td><a href="<?php $home; ?>/pdf/2017-01_BS.pdf" target="_blank">2017年度貸借対照表（PDF 127KB）</a></td>
</tr>
<tr>
<th>平成28（2016）年度</th>
<td><a href="<?php $home; ?>/pdf/2016-03closebook.pdf" target="_blank">2016年度貸借対照表（PDF 99KB）</a></td>
</tr>
<tr>
<th>平成27（2015）年度</th>
<td><a href="<?php $home; ?>/pdf/2015kessan01.pdf" target="_blank">2015年度貸借対照表（PDF 119KB）</a></td>
</tr>
<tr>
<th>平成26（2014）年度</th>
<td><a href="<?php $home; ?>/pdf/2014kessan01.pdf" target="_blank">2014年度貸借対照表（PDF 114KB）</a></td>
</tr>
</table>
</div>
<!-- table-wrap about -->
</div>
</section>
<!-- about__business -->
<section id="submenu4" class="sec about__history bg-success">
<div class="container">
<h2 class="ttl__h2 white">
<span class="quicksand">history</span>
<span>沿革</span>
</h2>
<ul class="about__history__timeline">
<li>
<p class="timeline-date">1957.04（S32）</p>
<div class="timeline-content">
<p>大阪府⻘少年映画鑑賞協会設立</p>
</div>
</li>
<li>
<p class="timeline-date">1960.01（S35）</p>
<div class="timeline-content">
<p>大阪府⻘少年⽂化協会設立（⻘少年映画鑑賞協会を発展的に解消）</p>
</div>
</li>
<li>
<p class="timeline-date">1961.03（S36）</p>
<div class="timeline-content">
<p>財団法人大阪府厚生会館設立</p>
</div>
</li>
<li>
<p class="timeline-date">1966.02（S41）</p>
<div class="timeline-content">
<p>財団法人大阪⻘少年活動振興協会設立（野外活動協会、⻘少年⽂化協会を発展的に解消）</p>
</div>
</li>
<li>
<p class="timeline-date">1967.04（S42）</p>
<div class="timeline-content">
<p>大阪府総合⻘少年野外活動センター開所</p>
</div>
</li>
<li>
<p class="timeline-date">1969.02（S44）</p>
<div class="timeline-content">
<p>財団法人大阪府⻘少年会館設立（厚生会館を⻘少年会館に名称変更）</p>
</div>
</li>
<li>
<p class="timeline-date">1975.07（S50）</p>
<div class="timeline-content">
<p>大阪府立⻘少年海洋センター開所</p>
</div>
</li>
<li>
<p class="timeline-date">1991.04（H03）</p>
<div class="timeline-content">
<p>財団発足25周年を契機に、愛称「ユースサービス大阪」を設ける</p>
</div>
</li>
<li>
<p class="timeline-date">1993.04（H05）</p>
<div class="timeline-content">
<p>財団法人大阪府⻘少年活動財団設立（大阪⻘少年活動振興協会と大阪府⻘少年会館を統合）</p>
</div>
</li>
<li>
<p class="timeline-date">1999.04（H11）</p>
<div class="timeline-content">
<p>財団法人大阪府こども会育成連合会の事務局運営を開始</p>
</div>
</li>
<li>
<p class="timeline-date">2003.04（H15）</p>
<div class="timeline-content">
<p>箕⾯市立⻘少年教学の森野外活動センターの運営を受託</p>
</div>
</li>
<li>
<p class="timeline-date">2006.04（H18）</p>
<div class="timeline-content">
<p>大阪府立⻘少年会館、大阪府立総合⻘少年野外活動センター、及び大阪府立⻘少年海洋センターの運営を指定管理に移管する。</p>
<p>箕⾯市立⻘少年教学の森野外活動センター及び東大阪市立野外活動センターの指定管理者となる。</p>
</div>
</li>
<li>
<p class="timeline-date">2009.03（H21）</p>
<div class="timeline-content">
<p>紀泉高原キャンプ場の閉鎖に伴い管理運営委託を終了</p>
</div>
</li>
<li>
<p class="timeline-date">2009.06（H21）</p>
<div class="timeline-content">
<p>大阪府立⻘少年会館の閉鎖に伴い事務局を大阪府森之宮庁舎に移転</p>
</div>
</li>
<li>
<p class="timeline-date">2010.04（H22）</p>
<div class="timeline-content">
<p>吉野宮滝野外学校開校</p>
</div>
</li>
<li>
<p class="timeline-date">2011.02（H23）</p>
<div class="timeline-content">
<p>事務局を大阪市浪速区幸町2丁目7-3 りそな・アルテ桜川ビル4Fに移転</p>
</div>
</li>
<li>
<p class="timeline-date">2011.04（H23）</p>
<div class="timeline-content">
<p>大阪府立少年自然の家及び大阪府立男⼥共同参画・⻘少年センターの共同指定管理者となる</p>
</div>
</li>
<li>
<p class="timeline-date">2011.09（H23）</p>
<div class="timeline-content">
<p>公益法人制度改革に伴い、非営利型の法人「一般財団法人大阪府⻘少年活動財団」に変更</p>
</div>
</li>
</ul>
</div>
</section>
<!-- about__history -->
<section id="submenu5" class="sec about__member">
<div class="container">
<h2 class="ttl__h2">
<span class="quicksand">Supporting member</span>
<span>賛助会員について</span>
</h2>
<p>近年、社会環境が急速に変化するなか、⻘少年をめぐる問題は社会的関心事となり、次代を担う⻘少年をこころ豊かでたくましく育む健全育成の役割は、ますます重要となっています。
<br>当財団では、これら事業趣旨に賛同していただき、ご⽀援・ご協力を得るための賛助会員制度を設けています。
<br>会費は、課題を持つ⻘少年の⽀援事業等の諸事業など、時代の要請に即し、社会的要請度の高い諸事業に活用させていただきます。</p>
<div class="about__member__inner">
<div class="about__member__inner__wrap">
<div class="about__member__inner__wrap__left order-md-last">
<img src="<?php echo $wp_url; ?>/dist/images/hagukunnde.png" alt="はぐくんでみらいえ">
</div>
<div class="about__member__inner__wrap__right order-md-first">
<h3 class="ttl__h3">賛助会費充当事業報告書</h3>
<p>「はぐくんでみらいへ」をスローガンに掲げ、豊かな人間関係づくりをめざすハート（HRT:HumanRelationTraining）プログラムや子ども達の「生きる力」を育む自然体験活動、また青少年の抱える課題解決に向けた自立支援事業など、全ての事業は「子ども達一人ひとりが尊重されること」を基本とし、これまでに培ってきた青少年育成の理論をもとに、青少年の主体的な参加と成長を願い、取り組みを進めております。</p>
<div class="mt-md-4 mt-3 text-md-left text-center">
<a class="btn btn-primary" href="<?php $home; ?>/pdf/sanjohoukoku.pdf" target="_blank">報告書を読む<i class="fas fa-play-circle"></i></a>
</div>
</div>
</div>
<!-- about__member__inner__wrap -->
</div>
<!-- about__member__inner -->
<div class="about__member__inner">
<div class="about__member__inner__wrap flex-none">
<div class="about__member__inner__wrap__content">
<h3 class="ttl__h3">賛助会費</h3>
<div class="about__member__inner__wrap__content__price">
<div>
<h4><span class="text-success">法人</span>年会費</h4>
<p>1口<span>10,000円</span></p>
</div>
<div>
<h4><span class="text-success">個人</span>年会費</h4>
<p>1口<span>5,000円</span></p>
</div>
</div>
<!-- about__member__inner__wrap__content__price -->
<div class="about__member__inner__wrap__content__txt">
<h4>【賛助会費のお振込先】</h4>
<ul>
<li>三井住友銀行大阪公務部普通No.８０４</li>
<li>三菱ＵＦＪ銀行谷町⽀店普通No.５１４０６０</li>
<li>りそな銀行大手⽀店普通No.２３９３０９</li>
</ul>
<ul>
<li>ゆうちょ銀行口座番号記号００９００−１−２３１０１<br>口座名義・加入者名一般財団法人大阪府⻘少年活動財団</li>
</ul>
</div>
<div class="about__member__inner__wrap__content__txt">
<h4>【充当事業例】</h4>
<ul>
<li>⻘少年活動リーダーの養成</li>
<li>障がい者のためのマリンスポーツ</li>
<li>自閉症児のためのキャンプ</li>
</ul>
<ul>
<li>社会的自立⽀援のための講習</li>
<li>⻘少年自立⽀援のためのキャンプ</li>
</ul>
</div>
</div>
</div>
<!-- about__member__inner__wrap -->
</div>
<!-- about__member__inner -->
</div>
</section>
<?php get_footer();
