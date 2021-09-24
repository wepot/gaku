          <aside class="sideMenu">
            <div class="sideMenu_btn">
              <a href="<?php echo esc_url(home_url('')); ?>/live/" class="button01">コンサート情報一覧</a>
            </div>
            <div class="sideMenu_btn">
              <a href="<?php echo esc_url(home_url('')); ?>/blog/" class="button01">ブログ一覧</a>
            </div>
<?php dynamic_sidebar('side-widget'); ?>
          </aside>