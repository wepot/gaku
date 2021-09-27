<?php get_header(); ?>

      <main class="main-contents">
<?php get_template_part( 'parts/breadcrumb' );?>

        <article class="blogPage">
          <div class="blogPage_inner">
            <header class="section_heading">
              <h1 class="section_title"><img src="<?php echo get_template_directory_uri(); ?>/common/img/title/blog.svg" width="257" height="101" alt="BLOG"></h1>
            </header><!-- /.section_heading -->

<?php if (is_category('gaku-blog')) : ?>
            <h2 class="blogcat_title">樂ブログの記事一覧</h2>
<?php elseif (is_category('voice')) : ?>
            <h2 class="blogcat_title">お客様の声の記事一覧</h2>
<?php elseif (is_category('dora-diary')) : ?>
            <h2 class="blogcat_title">ドラ猫の日常の記事一覧</h2>
<?php elseif (is_category('event-record')) : ?>
            <h2 class="blogcat_title">イベント記録の記事一覧</h2>
<?php elseif (is_year()) : ?>
            <h2 class="blogcat_title"><?php the_time("Y年"); ?>の記事一覧</h2>
<?php elseif (is_month()) : ?>
            <h2 class="blogcat_title"><?php the_time("Y年M"); ?>の記事一覧</h2>
<?php endif; ?>

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