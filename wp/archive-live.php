<?php get_header(); ?>

      <main class="main-contents">
<?php get_template_part( 'parts/breadcrumb' );?>
      <article class="livePage">
        <div class="livePage_inner">
          <header class="section_heading">
            <h1 class="section_title"><img src="<?php echo get_template_directory_uri(); ?>/common/img/title/live.svg" width="257" height="101" alt="イベント情報"></h1>
          </header><!-- /.section_heading -->
          <article class="liveMedia livePage-media">

<?php
if ( have_posts() ):
  while ( have_posts() ) : the_post();
?>

<?php get_template_part( 'parts/content-archiveLive' );?>

<?php endwhile;?>
          </article><!-- /.liveMedia -->
          <!------- ページャー ------->
<?php 
set_query_var( 'paging_query', $wp_query ); 
get_template_part( 'parts/pager' );
?>

<?php else : ?>
          <p class="livePage-media_noEvent">現在、イベントに関するお知らせはありません。</p>
<?php endif;?>

        </div><!-- /.section_inner -->
      </article><!-- /.top-live -->

<?php get_template_part( 'parts/contactBox' );?>
      </main>

<?php get_footer(); ?>