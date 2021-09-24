<?php get_header(); ?>

      <main class="main-contents">
<?php get_template_part( 'parts/breadcrumb' );?>
        <section class="singlePage">
          <header class="section_heading">
            <h2 class="section_title"><img src="<?php echo get_template_directory_uri(); ?>/common/img/title/blog.svg" width="257" height="101" alt="BLOG"></h2>
          </header><!-- /.section_headding -->
          <div class="singlePage_inner">
<?php
if( have_posts() ):
  while ( have_posts() ) : the_post();
?>
            <div class="singlePage_wrap">
              <article class="blog-article blogBox">
                <header class="blog_header">
                  <h1><?php the_title(); ?></h1>
                </header><!-- /.blog_header -->
                <?php the_content(); ?>
                <div class="blog-address">
                  <p class="blog-address01">コンサート・ピアノサロン<br>樂～ＧＡＫＵ<br>〒274-0815<br>千葉県船橋市西習志野4-2-1<br>電話番号：090-4200-8819<br>メールアドレス：dora_antiquecafe@yahoo.co.jp</p>
                  <p class="blog-address02">Facebookはこちら<br><a href="http://bit.ly/29rF7u5" target="_blank" rel="noopener noreferrer" class="blog-address02_link">http://bit.ly/29rF7u5</a></p>
                </div><!-- /.blog-address -->
                <div class="blog-meta">
                  <p class="blog-meta_tag">テーマ：<?php $postcat = get_the_category();
  echo $postcat[0]->name; ?></p>
                  <p class="blog-meta_date"><time datetime="<?php the_time('Y.m.d'); ?>">投稿日時：<?php the_time('Y.m.d'); ?></time></p>
                </div>
<?php
  endwhile;
endif;
?>
              </article><!-- /.blog -->
              <div class="blog_pager">
<?php if (get_previous_post()): ?>
	<p class="blog_pager-pn blog_pager-prev"><?php previous_post_link( '%link', '前の記事' ); ?></p>
<?php endif; ?>
<?php if (get_next_post()): ?>
	<p class="blog_pager-pn blog_pager-next"><?php next_post_link( '%link', '次の記事' ); ?></p>
<?php endif; ?>
              </div><!-- /.blog_pager -->
            </div><!-- /.singlePage_wrap -->
<?php get_sidebar(); ?>
          </div><!-- /.singlePage_inner -->
        </section><!-- /.singlePage -->

<?php get_template_part( 'parts/contactBox' );?>
      </main>

<?php get_footer(); ?>