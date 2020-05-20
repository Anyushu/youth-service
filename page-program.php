<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="mv__sub">
<img class="w-100" src="<?php echo $wp_url; ?>/dist/images/bg_low.png" alt="<?php the_title(); ?>">
<h2 class="mv__sub__ttl">
<img src="<?php echo $wp_url; ?>/dist/images/h1_program.png" alt="<?php the_title(); ?>">
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
<li><a href="#submenu1">「豊かな人間関係」を育む<i class="fas fa-caret-down"></i></a></li>
<li><a href="#submenu2">ハートプログラムとは<i class="fas fa-caret-down"></i></a></li>
<li><a href="#submenu3">オーダーメイド企画・立案<i class="fas fa-caret-down"></i></a></li>
<li><a href="#submenu4">実施の流れ<i class="fas fa-caret-down"></i></a></li>
<li><a href="#submenu5">利用者の声<i class="fas fa-caret-down"></i></a></li>
<li><a href="#submenu6">様々な実施例<i class="fas fa-caret-down"></i></a></li>
</ul>
</div>
</div>
<!-- submenu -->

<section id="submenu1" class="sec program__intoro">
<div class="container">
<h2 class="ttl__h2">
<span class="quicksand">PROGRAM</span>
<span>「豊かな人間関係」を<br class="d-md-none d-inline">育むプログラム</span>
</h2>
<div class="program__intoro__img">
<img src="<?php echo $wp_url; ?>/dist/images/nos_img.png" alt="NOS">
</div>
<p class="mb-0">近年の青少年に最も足りないものは「豊かな人間関係を築く力」と言われています。人と上手く話せない、人を信じることができない、人を傷つけてしまう・・・そのような青少年が年々増え、深刻な社会問題を引き起こす要因の一つになっています。
<br>学校生活や社会生活において、新生活をスタートする場面や、新たな活動を始める際に、新しい環境に適応することができず、不安感の高まりや自信のなさなどから、“新しい一歩”を踏み出せない青少年が増えています。
<br>そのような状況の中、「豊かな人間関係」を育む集団活動の機会を提供し、コミュニケーション能力の習得・向上を目指すために開発されたのが、「ＮＯＳ（エヌ・オー・エス）・能勢アウトドアスクール」の目指す「ハート（ＨＲＴ ヒューマン・リレーション・トレーニング）プログラム」です。</p>
</div>
</section>
<!-- submenu1 -->

<section id="submenu2" class="sec program__hrt bg-success">
<div class="container">
<h2 class="ttl__h2 white">
<span class="quicksand">HRT PROGRAM</span>
<span>ハートプログラムとは</span>
</h2>
<p class="text-white mb-md-5 mb-4">「ハート（ＨＲＴ）」とは、「Human Relation Training」の頭文字をとって名づけられ、当財団が半世紀に渡り蓄積してきたアウトドアプログラムの運営手法に、イニシアティブゲーム※の要素を加えたオリジナルプログラムです。</p>
<div class="program__hrt__inner">
<p>一つひとつのアクティビティを通して、お互いを尊重し、協力し合いながら課題を達成していくことで、豊かな人間関係の築き方を学びます。
<br>吉野宮滝野外学校をメインフィールドに実施しますが、青少年育成に長年携わってきたインストラクターの豊富な知識や経験からなる専門的な指導技術によりプログラム化されているため、<span class="text-success">小学生から、中学・高校生・大学・専門学校生、社会人といった幅広い年齢層</span>に実施されています。</p>
<div class="program__hrt__inner__baloon">※イニシアティブゲーム・・・
<br>一人では解決できない課題に対し、グループのメンバー1人ひとりの能力を出し合って協力しながらその課題を解決に取り組んでいく活動。</div>
<div class="program__hrt__inner__img">
<img src="<?php echo $wp_url; ?>/dist/images/heart_pg_img.png" alt="ハートプログラム">
</div>
</div>
</div>
</section>
<!-- submenu2 -->

<section id="submenu3" class="sec program__custom bg-info bg-grid">
<div class="container">
<h2 class="ttl__h2">
<span class="quicksand">custom-made</span>
<span>オーダーメイド<br class="d-md-none d-inline">企画・立案</span>
</h2>
<p>ハートプログラム（ＨＲＴ）には最短で半日のプログラムから長期では数年にわたるプログラムまで、対象のニーズに合わせて様々なプログラムを組むことが可能です。</p>
<div class="program__custom__menu">
<div class="program__custom__menu__inner red">
<img class="program__custom__menu__inner__icon" src="<?php echo $wp_url; ?>/dist/images/icon_check_red.png" alt="アイコン">
<div class="program__custom__menu__inner__img">
<img src="<?php echo $wp_url; ?>/dist/images/icon_love.png" alt="アイコン">
</div>
<p><span>豊かな心を</span>育てる</p>
<h3>ハートプログラム</h3>
</div>
<!-- program__custom__menu__inner -->
<div class="program__custom__menu__inner yellow">
<img class="program__custom__menu__inner__icon" src="<?php echo $wp_url; ?>/dist/images/icon_check_yellow.png" alt="アイコン">
<div class="program__custom__menu__inner__img">
<img src="<?php echo $wp_url; ?>/dist/images/icon_house.png" alt="アイコン">
</div>
<p><span>豊かな感性を</span>育てる</p>
<h3>環境プログラム</h3>
</div>
<!-- program__custom__menu__inner -->
<div class="program__custom__menu__inner blue">
<img class="program__custom__menu__inner__icon" src="<?php echo $wp_url; ?>/dist/images/icon_check_blue.png" alt="アイコン">
<div class="program__custom__menu__inner__img">
<img src="<?php echo $wp_url; ?>/dist/images/icon_compass.png" alt="アイコン">
</div>
<p><span>生きる力を</span>育てる</p>
<h3>アウトドアプログラム</h3>
</div>
<!-- program__custom__menu__inner -->
</div>
<!-- program__custom__menu -->

<div class="program__custom__content red">
<div class="program__custom__content__inner">
<img class="program__custom__content__inner__icon" src="<?php echo $wp_url; ?>/dist/images/icon_love.png" alt="アイコン">
<h3>ハートプログラム<br class="d-md-none d-inline">の導入例</h3>
<div class="program__custom__content__inner__box">
<div class="program__custom__content__inner__box__txt">
<h4>プログラムのポイント</h4>
<p class="mb-0">グループに与えられた課題を協力して達成していく過程で、個々が頑張り抜くことやグループでの協力のあり方を学び、課題達成の喜びを知ります。人間関係の基本となるコミュニケーションのあり方を体験的に理解し、基礎的なコミュニケーション技術を習得します。</p>
</div>
<div class="program__custom__content__inner__box__img">
<img src="<?php echo $wp_url; ?>/dist/images/custom_img_1.png" alt="プログラムのポイント">
</div>
</div>
<!-- program__custom__content__inner__box -->
<div class="program__custom__content__inner__flow">
<h4>プログラムの流れ</h4>
<ol>
<li>新しい人間関係の緊張をときほぐす</li>
<li>お互いをよく知る</li>
<li>協力・チームワークを学ぶ</li>
<li>自分に気づく</li>
</ol>
</div>
<!-- program__custom__content__inner__flow -->
<div class="program__custom__content__inner__kouka">
<h4>実施の効果</h4>
<p>特に新入生・新クラスのスタート段階で実施することで、チームやクラスづくりを円滑に行える下地（良い人間関係）をつくることが期待できます。</p>
</div>
<!-- program__custom__content__inner__kouka -->
<div class="program__custom__content__inner__timeline">
<h4>プログラム例</h4>
<ul class="about__history__timeline">
<li>
<p class="timeline-date">1日目</p>
<div class="timeline-content">
<p class="font-weight-bold">緊張をほぐそう<span class="text-danger">（ハートプログラム Part1）</span></p>
<p>課題解決する中で、メンバーグループ内のコミュニケーションの大切さを体験的に学びます。聴き方・伝え方を体験的に学びます。</p>
</div>
</li>
<li>
<p class="timeline-date">2日目</p>
<div class="timeline-content">
<p class="font-weight-bold">仲間と挑戦・信頼関係を築こう・自分を見つめよう<span class="text-danger">（ハートプログラム Part2）</span><br>
野外料理でチームづくり・ディスカバリーウォーク</p>
<p>身体的接触を通してグループ内の結びつきを強めます。協力・チームワークについて学びます。集団の一員としての自分を見つめる機会とします。</p>
</div>
</li>
<li>
<p class="timeline-date">3日目</p>
<div class="timeline-content">
<p class="font-weight-bold">ふりかえり・まとめ</p>
<p>体験をふりかえり、学んだこと、今の思いを分かち合い、次へと発展させます。</p>
</div>
</li>
</ul>
</div>
<!-- program__custom__content__inner__timeline -->
</div>
</div>
<!-- program__custom__content -->
<div class="program__custom__content yellow">
<div class="program__custom__content__inner">
<img class="program__custom__content__inner__icon" src="<?php echo $wp_url; ?>/dist/images/icon_house.png" alt="アイコン">
<h3>環境プログラムの導入例</h3>
<div class="program__custom__content__inner__box">
<div class="program__custom__content__inner__box__txt">
<h4>プログラムのポイント</h4>
<p class="mb-0">多様な自然環境と触れ合うことで、感性を養い、自然の素材を使った「もの作り」などにより、創造性を育みます。グループで協力して課題に取り組んでいく過程で、仲間の大切に気づき、達成の喜びを知ります。</p>
</div>
<div class="program__custom__content__inner__box__img">
<img src="<?php echo $wp_url; ?>/dist/images/custom_img_2.png" alt="プログラムのポイント">
</div>
</div>
<!-- program__custom__content__inner__box -->
<div class="program__custom__content__inner__flow">
<h4>プログラムの流れ</h4>
<ol>
<li>新しい環境に慣れ緊張をときほぐす</li>
<li>協力・チームワークを学ぶ</li>
<li>各グループ目標の設定</li>
<li>もの作りの体験</li>
<li>ふりかえりと分かち合い</li>
</ol>
</div>
<!-- program__custom__content__inner__flow -->
<div class="program__custom__content__inner__kouka">
<h4>実施の効果</h4>
<p>課題解決する過程での、様々な困難や障がいに打ち勝った自信、一人では成し遂げられないことをグループで達成する経験、一人ひとりがベストを尽くすことなど、実社会で経験する様々なことを２泊３日の短時間で凝縮させ、身体と心で体感します。</p>
</div>
<!-- program__custom__content__inner__kouka -->
<div class="program__custom__content__inner__timeline">
<h4>プログラム例</h4>
<ul class="about__history__timeline">
<li>
<p class="timeline-date">1日目</p>
<div class="timeline-content">
<p class="font-weight-bold">仲間を知ろう<span class="text-warning">（ハートプログラム Part1）</span></p>
<p>課題解決する中で、メンバーグループ内のコミュニケーションの大切さを体験的に学びます。聴き方・伝え方を体験的に学びます。</p>
</div>
</li>
<li>
<p class="timeline-date">2日目</p>
<div class="timeline-content">
<p class="font-weight-bold">仲間と挑戦・信頼関係を築こう<span class="text-warning">（ハートプログラム Part2）</span><br>
ダッジオーブン料理に挑戦・もの作り体験・キャンプファイヤー</p>
<p>グループ内の信頼関係を協力して一つのことをやり遂げることで達成感を味わいます。</p>
</div>
</li>
<li>
<p class="timeline-date">3日目</p>
<div class="timeline-content">
<p class="font-weight-bold">ふりかえり・まとめ</p>
<p>体験をふりかえり、学んだこと、今の思いを分かち合い、次へと発展させます。</p>
</div>
</li>
</ul>
</div>
<!-- program__custom__content__inner__timeline -->
</div>
</div>
<!-- program__custom__content -->
<div class="program__custom__content blue">
<div class="program__custom__content__inner">
<img class="program__custom__content__inner__icon" src="<?php echo $wp_url; ?>/dist/images/icon_compass.png" alt="アイコン">
<h3>アウトドアプログラムの導入例</h3>
<div class="program__custom__content__inner__box">
<div class="program__custom__content__inner__box__txt">
<h4>プログラムのポイント</h4>
<p class="mb-0">自然の中での様々な活動を体験し、「人を育む」効果的なプログラム企画の力を養います。キャンプ活動の基礎技術を習得し、野外活動の指導者としての理論も学び、資質を高めます。</p>
</div>
<div class="program__custom__content__inner__box__img">
<img src="<?php echo $wp_url; ?>/dist/images/custom_img_3.png" alt="プログラムのポイント">
</div>
</div>
<!-- program__custom__content__inner__box -->
<div class="program__custom__content__inner__flow">
<h4>プログラムの流れ</h4>
<ol>
<li>アウトドアプログラムの体験</li>
<li>コミュニケーション能力を高める</li>
<li>プログラムの企画に挑戦</li>
<li>ふりかえりと分かち合い</li>
</ol>
</div>
<!-- program__custom__content__inner__flow -->
<div class="program__custom__content__inner__kouka">
<h4>実施の効果</h4>
<p>養成カリキュラムの内容は、他者や自然との関わり方、ホランティア精神、指導者としての責任など、人としての生き方全般に関わる内容で、受講生に大きな影響を与えます。</p>
<p class="mb-0">※このプログラム例は、<a href="https://camping.or.jp/" target="_blank">公益社団法人日本キャンプ協会</a>「キャンプインストラクター」養成カリキュラムに基づいて実施しています。</p>
</div>
<!-- program__custom__content__inner__kouka -->
<div class="program__custom__content__inner__timeline">
<h4>プログラム例</h4>
<ul class="about__history__timeline">
<li>
<p class="timeline-date">1日目</p>
<div class="timeline-content">
<p class="font-weight-bold"><span class="blue">ハートプログラム Part1</span></p>
<p>講義「ボランティア論」、野外料理実習１、講義と実習「救急救命法」、ボランティアについての理解、安全への意識を高める、応急処置法を学ぶ</p>
</div>
</li>
<li>
<p class="timeline-date">2日目</p>
<div class="timeline-content">
<p>自然観察実習、ロープワーク実習、テント設営実習、自然体感ゲーム実習、野外料理実習２、天体観察実習、キャンプファイヤー実習、野営実習、野外活動の基礎技術全般を学ぶ、キャンプファイヤープログラムの企画実習、テントでの宿泊体験</p>
</div>
</li>
<li>
<p class="timeline-date">3日目</p>
<div class="timeline-content">
<p>講義「地図とコンパス」、オリエンテーリング実習、プログラムの企画立案実習、ふりかえり・まとめ、地図の知識、地形の読み方、コンパスの使い方、その技術を活用するオリエンテーリング実習指導者としての意識を高めます。</p>
</div>
</li>
</ul>
</div>
<!-- program__custom__content__inner__timeline -->
</div>
</div>
<!-- program__custom__content -->
</div>
</section>
<!-- submenu3 -->

<section id="submenu4" class="sec program__flow">
<div class="container">
<h2 class="ttl__h2">
<span class="quicksand">FLOW</span>
<span>実施の流れ</span>
</h2>
<div class="program__flow__list">
<div class="program__flow__list__inner">
<div class="program__flow__list__inner__no"><img src="<?php echo $wp_url; ?>/dist/images/flow_no_1.png" alt="1"></div>
<div class="program__flow__list__inner__txt">
<h3>プランミーティング</h3>
<p>事前に団体側の要望、人数、状況などを聞き、目標を明確にします。
<br>その目標達成に適したアクティビティをオーダーメイドで組み合わせて、オリジナル企画をつくります。</p>
</div>
<div class="program__flow__list__inner__img">
<img src="<?php echo $wp_url; ?>/dist/images/flow_img_1.png" alt="プランミーティング">
</div>
</div>
<!-- program__flow__list__inner -->
<div class="program__flow__list__inner">
<div class="program__flow__list__inner__no"><img src="<?php echo $wp_url; ?>/dist/images/flow_no_2.png" alt="2"></div>
<div class="program__flow__list__inner__txt">
<h3>確認ミーティング</h3>
<p>プログラム当日、団体側とインストラクターとの顔合わせ、スケジュールや参加者の状態のチェックをします。</p>
</div>
<div class="program__flow__list__inner__img">
<img src="<?php echo $wp_url; ?>/dist/images/flow_img_2.png" alt="確認ミーティング">
</div>
</div>
<!-- program__flow__list__inner -->
<div class="program__flow__list__inner three">
<div class="program__flow__list__inner__no"><img src="<?php echo $wp_url; ?>/dist/images/flow_no_3.png" alt="3"></div>
<div class="program__flow__list__inner__txt">
<h3>プログラムの実施</h3>
<div class="program__flow__list__inner__txt__list">
<div class="program__flow__list__inner__txt__list__left">
<h4>アイスブレイキング</h4>
<p>ウォーミングアップのためのアクティビティ。<br>自分の周りに「様々な人がいる」ことを認識し他者を尊重することを学びます。</p>
</div>
<div class="program__flow__list__inner__txt__list__right">
<img src="<?php echo $wp_url; ?>/dist/images/flow_img_3.png" alt="アイスブレイキング">
</div>
</div>
<div class="program__flow__list__inner__txt__list">
<div class="program__flow__list__inner__txt__list__left">
<h4>チームビルディング</h4>
<p>参加者の緊張がほぐれてきたら、楽しみながらチームづくりをする<br>自分の周りに「様々な人がいる」ことを認識し他者を尊重することを学びます。</p>
</div>
<div class="program__flow__list__inner__txt__list__right">
<img src="<?php echo $wp_url; ?>/dist/images/flow_img_4.png" alt="チームビルディング">
</div>
</div>
<div class="program__flow__list__inner__txt__list">
<div class="program__flow__list__inner__txt__list__left">
<h4>チームチャレンジ</h4>
<p>全員の協力が必要な課題を与え、それぞれが自分の役割を果すことで、課題が達成できることを学びます。<br>仲間を信頼し応援することで、さらに大きな達成感を味わいます。</p>
</div>
<div class="program__flow__list__inner__txt__list__right">
<img src="<?php echo $wp_url; ?>/dist/images/flow_img_5.png" alt="チームチャレンジ">
</div>
</div>
</div>
</div>
<!-- program__flow__list__inner -->
<div class="program__flow__list__inner">
<div class="program__flow__list__inner__no"><img src="<?php echo $wp_url; ?>/dist/images/flow_no_4.png" alt="4"></div>
<div class="program__flow__list__inner__txt">
<h3>ふりかえり</h3>
<p>参加者にその日の活動の感想を書いたり話したりしてもらい、インストラクターがまとめ、次回の活動に活かします。</p>
</div>
<div class="program__flow__list__inner__img">
<img src="<?php echo $wp_url; ?>/dist/images/flow_img_6.png" alt="ふりかえり">
</div>
</div>
<!-- program__flow__list__inner -->
<div class="program__flow__list__inner">
<div class="program__flow__list__inner__no"><img src="<?php echo $wp_url; ?>/dist/images/flow_no_5.png" alt="5"></div>
<div class="program__flow__list__inner__txt">
<h3>評価ミーティング</h3>
<p>団体側とインストラクターでその日の活動の評価を行い、それぞれの意味を再認識し、今後の活動に活かしてもらいます。</p>
</div>
<div class="program__flow__list__inner__img">
<img src="<?php echo $wp_url; ?>/dist/images/flow_img_7.png" alt="評価ミーティング">
</div>
</div>
<!-- program__flow__list__inner -->
</div>
<!-- program__flow__list -->
<div class="program__flow__box">
<div class="program__flow__box__inner">
<h3 class="ttl__h3">インストラクターの役割</h3>
<p>はじめはインストラクターがリードしてプログラムを進めていきますが、次第にチームのコミュニケーションができてきたら、インストラクターは最低限のメッセージを出すだけにとどめ、参加者がどのようにして意見を出し合い、協力し合ってその課題を達成していくかを見守ります。「待つこと」により自主性や協調性、コミュニケーション力などの様々な能力を引き出します。</p>
<p>複数のインストラクターが、数々のアクティビティを展開する上で、「三つの約束」を共通設定しています。</p>
<div class="program__custom__content__inner__flow my-4">
<ol>
<li>話を聴いてルールを守ろう</li>
<li>積極的に取り組もう</li>
<li>他の人を傷つけない</li>
</ol>
</div>
<p>これらの三つの約束に、実施団体の目標、集団の約束、狙いとする事項などを連動させます。インストラクターは、各アクティビティを実施する中で、参加者一人ひとりの持ち味を「引き出す」ため、できる限り、時間の許す限り、参加者からの反応を「待ちます」。
<br>また、綿密な展開スケジュールを組み立てていますが、参加者の状況に応じて予定の内容を刻々と「変化させて」行います。そのため他のクラスや、隣のグループと実施内容や展開方法が、ゴールと異なっていることもあります。</p>
</div>
</div>
<!-- program__flow__box -->
</div>
</section>
<!-- submenu4 -->
<section id="submenu5" class="sec program__voice bg-success">
<div class="container">
<h2 class="ttl__h2 white">
<span class="quicksand">VOICE</span>
<span>利用者の声</span>
</h2>
<h3 class="ttl-h4">引率者の声</h3>
</div>
<div class="voice__list">
<div class="voice__list__inner">
<div class="text-center mb-3"><img class="mx-auto" src="<?php echo $wp_url; ?>/dist/images/icon_teacher.png" alt="アイコン"></div>
<p>失敗から学ぶことが大事。人間関係のこじれや問題が起きたとき、それを修復する「チャンス」と考えるか「逃げる」かでその後の人間関係の築き方が大きく変わる、ということがわかった。</p>
<div class="voice__list__inner__meta">
<p class="voice__list__inner__meta__name">（大学教員）</p>
</div>
</div>
<div class="voice__list__inner">
<div class="text-center mb-3"><img class="mx-auto" src="<?php echo $wp_url; ?>/dist/images/icon_teacher.png" alt="アイコン"></div>
<p>この合宿を通して、数年来の人間関係が改善された生徒や、普段前に出ない生徒が周囲の手助けを積極的に行っていた。また、周囲も頼りにしていた。</p>
<div class="voice__list__inner__meta">
<p class="voice__list__inner__meta__name">（高校教員）</p>
</div>
</div>
<div class="voice__list__inner">
<div class="text-center mb-3"><img class="mx-auto" src="<?php echo $wp_url; ?>/dist/images/icon_teacher.png" alt="アイコン"></div>
<p>学校生活ではあまり表に出たがらない生徒が、アクティビティーの中で意見を出してグループをリードする姿があちこちで見られたことが非常に意義深かった。自分の意見を表明することの大切さを全員が学んだ。</p>
<div class="voice__list__inner__meta">
<p class="voice__list__inner__meta__name">（高校教員）</p>
</div>
</div>
</div>
<!-- voice__list -->
</section>
<!-- program__voice -->
<section class="sec program__voice2">
<div class="container">
<h3 class="ttl-h4">参加者の声</h3>
</div>
<div class="voice__list">
<div class="voice__list__inner">
<div class="text-center mb-3"><img class="mx-auto" src="<?php echo $wp_url; ?>/dist/images/icon_student.png" alt="アイコン"></div>
<p>最初は、皆と協力するのが苦手なわたしにとってゆううつな時間でした。でも徐々に身体を動かしていくことによって、他人と協力することの大切さ、人と人が意見を交わして生まれる温かさが、なんとなくわかったような気がします。ハートプログラムが終わった時には、皆が心の底から笑えたような気がしました。人と人との意見の交換がこんなに温かいものだということを知りました。</p>
<div class="voice__list__inner__meta">
<p class="voice__list__inner__meta__name">（中学生）</p>
</div>
</div>
<div class="voice__list__inner">
<div class="text-center mb-3"><img class="mx-auto" src="<?php echo $wp_url; ?>/dist/images/icon_student.png" alt="アイコン"></div>
<p>３日間でこんなに信頼できる友達ができてよかった。自分自身を振り返ることができ、自分のやるべきこと、自分に合っていることなど理解できた。先輩は本当に私たちのことを考えてくれているのだと感じた。私は先輩みたいになりたいと思った。</p>
<div class="voice__list__inner__meta">
<p class="voice__list__inner__meta__name">（新入生体験学習参加学生）</p>
</div>
</div>
<div class="voice__list__inner">
<div class="text-center mb-3"><img class="mx-auto" src="<?php echo $wp_url; ?>/dist/images/icon_student.png" alt="アイコン"></div>
<p>失敗したのも、成功したのも、考えて→意見を出し合って→実行しての繰り返しがあったからだと思う。本当は心で思っていることを声に出していければいいな、と思う。</p>
<div class="voice__list__inner__meta">
<p class="voice__list__inner__meta__name">（企業研修参加者）</p>
</div>
</div>
</div>
<!-- voice__list -->
</section>
<!-- submenu5 -->
<section id="submenu6" class="sec program__case">
<div class="container">
<h2 class="ttl__h2">
<span class="quicksand">CASE</span>
<span>様々な実施例</span>
</h2>
<p>ハートプログラム（ＨＲＴ）は、多様なニーズにお応えできます。小学生から、中学・高校生・大学・専門学校生、社会人といった幅広い年齢層に実施されています。</p>
<div class="program__case__list">
<div class="program__case__list__inner">
<div class="program__case__list__inner__wrap">
<div class="program__case__list__inner__wrap-icon"><img src="<?php echo $wp_url; ?>/dist/images/icon_camping.png" alt="アイコン"></div>
<h3 class="program__case__list__inner__wrap-ttl">新入生・新入社員<br>オリエンテーション合宿研修</h3>
<p>大学、専門学校、企業などにおける「導入教育」として、入学・入社後の早い時期に自然環境豊かなフィールドで１～２泊の合宿生活を送り、ハートプログラムやアウトドアプログラムを通して、人間関係づくりに取り組んでいます。</p>
</div>
</div>
<!-- program__case__list__inner -->
<div class="program__case__list__inner">
<div class="program__case__list__inner__wrap">
<div class="program__case__list__inner__wrap-icon"><img src="<?php echo $wp_url; ?>/dist/images/icon_school.png" alt="アイコン"></div>
<h3 class="program__case__list__inner__wrap-ttl">中一ギャップを<br>解消するための学校行事</h3>
<p>期待と共に不安感を抱えて「一つの中学校」に進学した新中学一年生を対象に、不安感を解消し、これからの中学校生活に早期に慣れるため、クラス担任と共に「クラス内での豊かな人間関係」を築く機会として、「ハートプログラム」を、学校や校外学習などで実施しています。</p>
</div>
</div>
<!-- program__case__list__inner -->
<div class="program__case__list__inner">
<div class="program__case__list__inner__wrap">
<div class="program__case__list__inner__wrap-icon"><img src="<?php echo $wp_url; ?>/dist/images/icon_finance.png" alt="アイコン"></div>
<h3 class="program__case__list__inner__wrap-ttl">学校でのクラス委員、<br>クラブ主将、クラブの選手</h3>
<p>意欲ある生徒・学生に対し、集団体験活動を提供し、チームワークを高め、リーダーシップ発揮を目指すことで、よりよい学校づくりに意欲的に取り組む学内リーダーを養成しています。</p>
</div>
</div>
<!-- program__case__list__inner -->
<div class="program__case__list__inner">
<div class="program__case__list__inner__wrap">
<div class="program__case__list__inner__wrap-icon"><img src="<?php echo $wp_url; ?>/dist/images/icon_review.png" alt="アイコン"></div>
<h3 class="program__case__list__inner__wrap-ttl">児童・生徒とのコミュニケーション<br>を豊かにする能力を学ぶ研修</h3>
<p>教員初任者研修、同じ中学校区の小中教員合同研修、人権教育を推進する立場の教職員などに対し、児童・生徒の理解を深め、よりよい人間関係作りの手法を体験的に学びます。</p>
</div>
</div>
<!-- program__case__list__inner -->
</div>
<!-- program__case__list -->
</div>
</section>
<!-- submenu6 -->
<?php get_footer();
