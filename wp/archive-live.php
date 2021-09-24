<?php get_header(); ?>

      <main class="main-contents">
<?php get_template_part( 'parts/breadcrumb' );?>
      <article class="livePage">
        <div class="livePage_inner">
          <header class="section_heading">
            <h1 class="section_title"><img src="<?php echo get_template_directory_uri(); ?>/common/img/title/live.svg" width="257" height="101" alt="イベント情報"></h1>
          </header><!-- /.section_headding -->
          <article class="liveMedia livePage-media">
<?php
if ( have_posts() ):
  while ( have_posts() ) : the_post();
?>

<?php get_template_part( 'parts/content-archiveLive' );?>

<?php
  endwhile;
endif;
?>
          </article><!-- /.liveMedia -->
          <!------- ページャー ------->
<?php get_template_part( 'parts/pager' );?>
        </div><!-- /.section_inner -->
      </article><!-- /.top-live -->

<?php get_template_part( 'parts/contactBox' );?>
      </main>

<?php get_footer(); ?>