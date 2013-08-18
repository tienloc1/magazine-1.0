<div class="band navigation">
	<nav class="container primary">
		<div class="sixteen columns">

			<!-- start: Hien thi Menu -->
				<?php wp_nav_menu( array('theme_location' => 'primary-menu',
										 'fallback_cb' => 'alert_menu')); 
				?>
			<!-- end: Hien thi Menu -->

		</div>	
	</nav><!-- end container -->
</div><!-- end band navigation -->