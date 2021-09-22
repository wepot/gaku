<?php if (paginate_links() ) : //ページが1ページ以上あれば以下を表示 ?>
              <!------- ページャー ------->
              <div class="pager">
                <div class="pager_inner">
<?php
echo
paginate_links(
array(
'end_size' => 1,
'mid_size' => 1,
'show_all' => false,
'prev_next' => true,
'prev_text' => '',
'next_text' => '',
)
);
?>
                </div><!-- /.pager_inner -->
              </div><!-- /.pager -->
<?php endif; ?>