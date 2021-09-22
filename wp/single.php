<?php get_header(); ?>

      <main class="main-contents">
        <section class="singlePage">
          <header class="section_heading">
            <h2 class="section_title"><img src="<?php echo get_template_directory_uri(); ?>/common/img/title/blog.svg" width="257" height="101" alt="BLOG"></h2>
          </header><!-- /.section_headding -->
          <div class="singlePage_inner">
            <div class="singlePage_wrap">
              <article class="blog-article blogBox">
                <header class="blog_header">
                  <h1>コンサートタイトルが入りますサンプルテキストサンプルテキスト</h1>
                </header><!-- /.blog_header -->
                <figure>
                  <img src="/img/blog/single-img01.jpg" width="600" height="337" alt="">
                </figure>
                <p>来週月曜日開催の珈琲とpiano。<br>お陰様で満席となりました。<br>ありがとうございます。</p>
                <p>2回目の珈琲イベントは『雨』と題しましたが、<br>いまのところの予報では、ピーカン<br>熱くなりそうです</p>
                <p>涼しいお部屋で珈琲とデザートなんてステキ！<br>追記として2品目のお菓子をご紹介致します。<br>エスプレッソ“ロマーノ”</p>

                <div class="blog-address">
                  <p class="blog-address01">コンサート・ピアノサロン<br>樂～ＧＡＫＵ<br>〒274-0815<br>千葉県船橋市西習志野4-2-1<br>電話番号：090-4200-8819<br>メールアドレス：dora_antiquecafe@yahoo.co.jp</p>
                  <p class="blog-address02">Facebookはこちら<br><a href="http://bit.ly/29rF7u5" target="_blank" rel="noopener noreferrer" class="blog-address02_link">http://bit.ly/29rF7u5</a></p>
                </div><!-- /.blog-address -->
                <div class="blog-meta">
                  <p class="blog-meta_tag">テーマ：イベント記録</p>
                  <p class="blog-meta_date"><time datetime="">投稿日時：MMMM.YY.DD</time></p>
                </div>
              </article><!-- /.blog -->
              <div class="blog_pager">
                <p><a href="前の記事のリンク" rel="prev">前の記事</a></p>
                <p><a href="次の記事のリンク" rel="next">次の記事</a></p>
              </div><!-- /.blog_pager -->
            </div><!-- /.singlePage_wrap -->
<?php get_sidebar(); ?>
          </div><!-- /.singlePage_inner -->
        </section><!-- /.singlePage -->
        <section class="contactBox">
          <div class="contactBox_wrap">
            <ul class="contactBox_list">
              <li class="contactBox_item">
                <a href="/live/">
                  <figure class="contactBox_img01">
                    <img src="/img/icon/live.png" width="45" height="46" alt="">
                  </figure>
                  <p class="contactBox_text">コンサート<br>情報一覧</p>
                </a>
              </li><!-- /.contactBox_item -->
              <li class="contactBox_item">
                <a href="/blog/">
                  <figure class="contactBox_img02">
                    <img src="/img/icon/blog.png" width="58" height="49" alt="">
                  </figure>
                  <p class="contactBox_text contactBox_text02">Blog一覧</p>
                </a>
              </li><!-- /.contactBox_item -->
              <li class="contactBox_item">
                <a href="/inquiry/">
                  <figure class="contactBox_img03">
                    <img src="/img/icon/mail.png" width="58" height="40" alt="">
                  </figure>
                  <p class="contactBox_text contactBox_text02">お問い合わせ</p>
                </a>
              </li><!-- /.contactBox_item -->
            </ul><!-- /.contactBox_list -->
          </div><!-- /.contactBox_wrap -->
        </section><!-- /.contactBox -->
      </main>

<?php get_footer(); ?>