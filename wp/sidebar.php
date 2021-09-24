          <aside class="sideMenu">
            <div class="sideMenu_btn">
              <a href="<?php echo esc_url(home_url('')); ?>/live/" class="button01">コンサート情報一覧</a>
            </div>
            <div class="sideMenu_btn">
              <a href="<?php echo esc_url(home_url('')); ?>/blog/" class="button01">ブログ一覧</a>
            </div>
            <div class="sideMenu_wrap">
              <div class="sideMenu_list">
                <h3 class="sideMenu_title">テーマ</h3>
                <ul>
                  <li class="sideMenu_item"><a href="<?php echo esc_url(home_url('')); ?>/blog/gaku-blog/">樂ブログ (105)</a></li>
                  <li class="sideMenu_item"><a href="<?php echo esc_url(home_url('')); ?>/blog/voice/">お客様の声 (7)</a></li>
                  <li class="sideMenu_item"><a href="<?php echo esc_url(home_url('')); ?>/blog/dora-diary/">ドラ猫の日常 (118)</a></li>
                  <li class="sideMenu_item"><a href="<?php echo esc_url(home_url('')); ?>/blog/event-record/">イベント記録 (82)</a></li>
                </ul>
              </div><!-- /.sideMenu_list -->
            </div><!-- /.sideMenu_wrap -->
            <div class="sideMenu_wrap">
              <div class="sideMenu_list">
                <h3 class="sideMenu_title">月別</h3>
                <ul>
                  <li class="sideMenu_archiveitem"><a href="/">2021年8月(10)</a></li>
                  <li class="sideMenu_archiveitem"><a href="/ ">2021年9月(10)</a></li>
                  <li class="sideMenu_archiveitem"><a href="/ ">2021年10月(10)</a></li>
                </ul>
              </div>
            </div>
            <?php dynamic_sidebar('side-widget'); ?>
          </aside>