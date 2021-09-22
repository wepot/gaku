<!-- パンくずリスト -->
<?php if( !(is_home() || is_front_page() )): ?>
<div class="breadcrumb-area">
<?php
if ( function_exists( 'bcn_display' ) ) {
bcn_display();
}
?>
</div>
<?php endif; ?>