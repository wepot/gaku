<?php get_header(); ?>

      <main class="main-contents">
<?php get_template_part( 'parts/breadcrumb' );?>
        <section class="singlePage">
          <header class="section_heading">
            <h2 class="section_title"><img src="<?php echo get_template_directory_uri(); ?>/common/img/title/live.svg" width="257" height="101" alt="イベント情報"></h2>
          </header><!-- /.section_heading -->
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
                <div class="liveDetail">
<?php
// 画像の値を取得
$img_field = get_field('main_image');
if($img_field){ 
?>
                  <figure class="liveDetail_img">
                    <img src="<?php echo esc_url($img_field['url']) ?>" alt="" width="600" height="337">
                  </figure>
<?php } ?>
                  <p class="liveDetail_date">日時：<?php $date = get_field('event_date'); if( $date ){ echo $date; }?></p>
                  <p class="liveDetail_starting">開始時間：<?php $start = get_field('start_time'); if( $start ){ echo $start; }?> － <?php $end = get_field('end_time'); if( $end ){ echo $end; }?></p>
                  <p class="liveDetail_text"><?php $detail = get_field('event_detail'); if( $detail ){ echo $detail; }?></p>
                </div><!-- /.liveDetail -->
                <div class="blog-meta">
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