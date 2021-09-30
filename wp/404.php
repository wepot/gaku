<?php get_header(); ?>
      <main class="main-contents">
<?php get_template_part( 'parts/breadcrumb' );?>
        <section class="notFound">
          <header class="section_heading">
            <h2 class="section_title"><img src="<?php echo get_template_directory_uri(); ?>/common/img/title/404.svg" alt="" width="257" height="101"></h2>
          </header>
          <p class="notFound_text">申し訳ございません。<br>指定されたページがみつかりませんでした。</p>
          <div class="cta_btn02 notFound_btn">
            <a href="<?php echo home_url(); ?>" class="button01">TOPページへ戻る</a>
          </div><!-- /.notFound_btn -->
        </section>
      </main>

<?php get_footer(); ?>