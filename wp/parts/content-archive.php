              <article class="blogCards_item">
                <a class="blogCard" href="<?php the_permalink(); ?>">
                  <figure class="blogCard_img">
<?php
if (has_post_thumbnail() ) {
  the_post_thumbnail('imgBlog');
} else {
  echo '<img src="' . esc_url(get_template_directory_uri()) . '/common/img/blog/blog-img01.jpg" alt="" width="330" height="186">';
}
?>
                  </figure>
                  <div class="blogCard_body">
                    <p class="blogCard_date"><time datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time></p>
                    <p class="blogCard_text"><?php the_excerpt(); ?></p>
                  </div>
                </a>
              </article><!-- /.blogCards_item -->