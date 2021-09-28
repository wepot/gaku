<?php
/*
Template Name: お問い合わせ各種ページテンプレート
*/
?>
<?php get_header(); ?>
      <main class="main-contents">
<?php get_template_part( 'parts/breadcrumb' );?>
<?php if (is_page('inquiry')) : ?>
        <section id="inquiry" class="sec-inquiry01">
          <header class="section_heading">
            <h1 class="section_title"><img src="<?php echo get_template_directory_uri(); ?>/common/img/title/inquiry01.svg" width="299" height="101" alt="ご予約・お問い合わせ"></h1>
          </header><!-- /.section_heading -->
          <p class="sec-inquiry01_text">当店へのご予約はお問い合わせフォーム、またはメールにて受け付けております。</p>
        </section><!-- /.sec-inquiry01 -->

        <section class="sec-inquiry02">
          <header class="section_heading">
            <h1 class="section_title"><img src="<?php echo get_template_directory_uri(); ?>/common/img/title/inquiry02.svg" width="269" height="101" alt="お申し込みについて"></h1>
          </header><!-- /.section_heading -->
          <div class="sec-inquiry02_wrap">
            <ul class="sec-inquiry02_list">
              <li>予約後10日以内に予約金（利用料金の半額）をお支払い願います。</li>
              <li>残金は当日精算となります。</li>
              <li>お問い合わせフォームをご利用の際は必要事項を記載の上送信ボタンを押してください。</li>
            </ul><!-- /.sec-inquiry02_list -->
            <p class="sec-inquiry02_caption">※お申込者様の都合によるキャンセルの場合、予約金は返金できません。</p>
          </div><!-- /.sec-inquiry02_wrap -->
<?php endif; ?>


          <section class="inquiryForm">
            <?php if (is_page('confirm')) : ?>
              <header class="inqform_heading">
                <h2>※入力内容をご確認ください※</h2>
              </header><!-- /.inqform_heading -->
            <?php elseif (is_page('thanks')) : ?>
              <header class="inqform_heading">
                <h2>送信完了</h2>
              </header><!-- /.inqform_heading -->
            <?php endif; ?>

<?php echo do_shortcode('[mwform_formkey key="167"]'); ?>

          </section><!-- /.inquiryForm -->
        </section><!-- /.sec-inquiry02 -->

<?php get_template_part( 'parts/contactBox' );?>
      </main>
      
<?php get_footer(); ?>