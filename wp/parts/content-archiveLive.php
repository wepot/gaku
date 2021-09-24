              <article class="liveMedia_item">
                <a class="liveMedia_wrap" href="<?php the_permalink(); ?>">
                  <figure class="liveMedia_img">
<?php
if (has_post_thumbnail() ) {
  the_post_thumbnail('img192');
} else {
  echo '<img src="' . esc_url(get_template_directory_uri()) . '/common/img/blog/blog-img01.jpg" alt="" width="192" height="108">';
}
?>
                  </figure>
                  <div class="liveMedia_body">
                    <p class="liveMedia_date"><time datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time></p>
                    <p class="liveMedia_text"><?php the_title(); ?></p>
                  </div>
                </a>
              </article>