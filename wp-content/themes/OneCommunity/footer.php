<div class="clear"></div>
</div> <!-- #container -->		

		<?php do_action( 'bp_after_container' ); ?>

</div><!-- main -->

		<?php do_action( 'bp_before_footer'   ); ?>

	
<footer>


	
<div class="footer-right"><?php echo of_get_option('t-4', 'All rights reserved by' ); ?> <?php bloginfo( 'name' ); ?></div>

</footer>

<?php if ( is_user_logged_in() ) {
   if ( function_exists( 'bp_is_active' ) ) {
	if ( $notifications = bp_core_get_notifications_for_user( bp_loggedin_user_id() ) ) { ?>
	<div class="notif-container">	
	<?php
	}

	if ( $notifications ) {
		$counter = 0;
		for ( $i = 0, $count = count( $notifications ); $i < $count; ++$i ) {
			$alt = ( 0 == $counter % 2 ) ? ' alt' : ''; ?>
			<div class="my-notification<?php echo $alt ?>"><?php echo $notifications[$i] ?></div>

			<?php
			 $counter++;
			} ?>
	</div><!-- notif-container -->
	<?php
	} else {}
   }
}
?>

<?php wp_footer(); ?>

</body>

</html>