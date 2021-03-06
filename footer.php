<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>

</main>

<footer class="footer">

<a class="totop" href="#"><i class="fas fa-chevron-up"></i></a>

<div class="container">
<div class="footer__links">
<div class="footer__links__left">
<a href="<?php echo $home; ?>/about/">
<img src="<?php echo $wp_url; ?>/dist/images/btn_about.png" alt="">
</a>
<a href="<?php echo $home; ?>/recruit/">
<img src="<?php echo $wp_url; ?>/dist/images/btn_recruit.png" alt="">
</a>
<a href="<?php echo $home; ?>/status/login/">
<img src="<?php echo $wp_url; ?>/dist/images/btn_payment.png" alt="">
</a>
</div>
<div class="footer__links__right">
<a href="tel:0665617800">
<img src="<?php echo $wp_url; ?>/dist/images/btn_tel.png" alt="">
</a>
</div>
</div>
<!-- footer__links -->
<div class="footer__about">
<div class="footer__about__fb">
<div class="fb-page" data-href="https://www.facebook.com/yso.or.jp" data-tabs="timeline" data-width="420" data-height="325" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/yso.or.jp" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/yso.or.jp">ユースサービス大阪（一般財団法人大阪府青少年活動財団）</a></blockquote></div>
</div>
<div class="footer__about__logo">
<div class="footer__about__logo__inner">
<a href="<?php echo $home; ?>"><img src="<?php echo $wp_url; ?>/dist/images/logo.png" alt="<?php the_title(); ?>"></a>
<p>ユースサービス大阪<br>〒556-0021<br>大阪市浪速区幸町2-7-3 りそな・アルテ桜川ビル4F</p>
</div>
<p class="footer__about__logo__txt">ユースサービス大阪は、大阪府の出捐により1956年に事業を開始した⻘少年活動の専門団体です。自然体験活動を通して子どもたちが自主性を発揮し、コミュニケーション能力などの「生きる力」を育む「成⻑とふれあい」の機会を提供する非営利型の一般財団法人です。事業運営には専門スタッフの指導のもと、⻘少年育成に関する研修を積んだ大学生のボランティアリーダーが少人数グループ毎に子どもたちを見守り、安全にプログラムを進めますので、キャンプ等が初めてのお子さまでも安心してご参加いただけます。</p>
<div class="footer__about__logo__link">
<a href="<?php echo $home; ?>/pdf/condition.pdf">標識・旅行条件書他</a>
<a href="<?php echo $home; ?>/privacy-policy/">プライバシーポリシー</a>
</div>
<p class="footer__about__logo__small">© 2020 YOUTH SERVICE OSAKA</p>
</div>
</div>
</div>
</footer>

<div class="fixed_btn">
<a class="d-md-none" href="tel:0665617800"><img src="<?php echo $wp_url; ?>/dist/images/btn_fix_tel.png" alt="アイコン"></a>
<a href="https://www.facebook.com/yso.or.jp" target="_blank"><img src="<?php echo $wp_url; ?>/dist/images/btn_instagram.png" alt="アイコン"></a>
<a href="https://www.instagram.com/yso_camp/" target="_blank"><img src="<?php echo $wp_url; ?>/dist/images/btn_facebook.png" alt="アイコン"></a>
</div>

<?php wp_footer(); ?>

</body>
</html>