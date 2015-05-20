<?php
/**
 * The default sidebar lists categories, up to 2 levels deep.
 */

$leftNav = count( get_post_meta( $post->ID, "left-nav" ) );
?>
<div id="sidebar" class="widget-area" role="complementary">
	<aside id="categories" class="widget">
		<h3 class="widget-title">About the jQuery Foundation</h3>
		<ul>
			<?php if ( $leftNav === 1 ) { // About page navigation ?>
			<li><a href="/about/history/">History</a></li>
			<li><a href="/about/board/">Board of Directors</a></li>
			<li><a href="/about/team/">Team</a></li>
			<li><a href="/about/support/">Support</a></li>
			<li><a href="https://brand.jquery.org/" target="_blank">Brand Guide</a></li>
			<?php } ?>
		</ul>
	</aside>
</div>
