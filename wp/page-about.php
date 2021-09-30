<?php get_header(); ?>

      <main class="main-contents">
<?php get_template_part( 'parts/breadcrumb' );?>

        <section id="about" class="sec-about01">
          <div class="sec-about01_inner">
            <header class="section_heading">
              <h1 class="section_title"><img src="<?php echo get_template_directory_uri(); ?>/common/img/title/about01.svg" width="257" height="101" alt="GAKUについて"></h1>
            </header><!-- /.section_heading -->
            <h3 class="sec-about01_catch"><img src="<?php echo get_template_directory_uri(); ?>/common/img/about/about-img01.svg" width="370" height="123" alt="隠れ家的な落ち着いた雰囲気の中透明感のある音を奏でるドイツのピアノ[SEILER ザイラー]を弾いてみませんか？"></h3>
            <p class="sec-about01_text">透明感のある音を奏でるドイツのピアノ、SEILER ザイラーを弾いて見ませんか？“樂～ＧＡＫＵ”は隠れ家的な落ち着いたおもむきのある小規模ホールです。音楽のコンサートやリハーサルはもちろん、個展・勉強会・発表会などにもご利用いただけます。北習志野の静かな住宅街の中で緑に囲まれた室内の当サロンでは、喧騒とは無縁の世界で優雅な時間を過ごすことができます。</p>
          </div><!-- /.section_inner -->
        </section><!-- /.sec-about01 -->

        <section class="sec-about02">
          <header class="section_heading">
            <h2 class="section_title"><img src="<?php echo get_template_directory_uri(); ?>/common/img/title/about02.svg" width="257" height="101" alt="施設案内"></h2>
          </header><!-- /.section_heading -->
          <div class="sec-about02_inner">
            <figure class="sec-about02_wrap">
              <div class="sec-about02_img">
                <img src="<?php echo get_template_directory_uri(); ?>/common/img/about/about-img02.jpg" width="300" height="300" alt="">
              </div><!-- /.sec-about02_img -->
              <figcaption>
                <img src="<?php echo get_template_directory_uri(); ?>/common/img/about/about-img03.svg" width="317" height="141" alt="ピアノ：SEILER Grand Piano、面積：約20坪、定員：30名、テーブル：大1/中1/小1">
              </figcaption>
            </figure><!-- /.sec-about02_img -->
          </div><!-- /.sec-about02_inner -->
          <!-- aboutスライダー -->
          <section class="swiper-container aboutSwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide aboutSwiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/common/img/about/swiper-img01.jpg" width="320" height="180" alt="">
              </div>
              <div class="swiper-slide aboutSwiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/common/img/about/swiper-img02.jpg" width="320" height="180" alt="">
              </div>
              <div class="swiper-slide aboutSwiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/common/img/about/swiper-img03.jpg" width="320" height="180" alt="">
              </div>
              <div class="swiper-slide aboutSwiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/common/img/about/swiper-img04.jpg" width="320" height="180" alt="">
              </div>
              <div class="swiper-slide aboutSwiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/common/img/about/swiper-img05.jpg" width="320" height="180" alt="">
              </div>
              <div class="swiper-slide aboutSwiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/common/img/about/swiper-img06.jpg" width="320" height="180" alt="">
              </div>
            </div>
            <div class="swiper-pagination aboutSwiper-pagination"></div>
          </section>
        </section><!-- /.sec-about02 -->
        
<?php get_template_part( 'parts/contactBox' );?>
      </main>

<?php get_footer(); ?>