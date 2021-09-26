<?php get_header(); ?>

      <main class="main-contents">
<?php get_template_part( 'parts/breadcrumb' );?>

        <article class="blogPage">
          <div class="blogPage_inner">
            <header class="section_heading">
              <h1 class="section_title"><img src="<?php echo get_template_directory_uri(); ?>/common/img/title/blog.svg" width="257" height="101" alt="BLOG"></h1>
            </header><!-- /.section_heading -->
            <article class="blogCards blogPage-cards">
<?php
if ( have_posts() ):
  while ( have_posts() ) : the_post();
?>

<?php get_template_part( 'parts/content-archive' );?>

<?php
  endwhile;
endif;
?>
            </article><!-- /.blogCards -->
<?php get_template_part( 'parts/pager' );?>
          </div><!-- /.section_inner -->
        </article><!-- /.blogPage -->

<?php get_template_part( 'parts/contactBox' );?>
      </main>

<?php get_footer(); ?>