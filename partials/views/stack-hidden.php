<?php

/*
 * TEMPLATE: STACK-HIDDEN
 */

global $block_css, $block_counter;

// increment counter
$block_counter ++ ;

$classes = array(
	'module',
	'log',
	'stack',
);

// Include CSS selectors manually entered thru wp-admin
//if( array_key_exists( 'className', $block ) ) {
    $classes = array_merge( $classes, explode( ' ', $block_css ) );
//}

?>

<?php echo '<div class="'.join( ' ', $classes ).'">'; ?>
	<div class="module-wrap">
		<div class="group bar">
			<div class="left">
				<?php
				echo setup_be_log_code();
				echo setup_be_log_label();
				echo setup_be_log_date();
				echo setup_be_log_user();
				echo setup_be_log_link();
				?>
			</div>
			<div class="right"><?php
				echo '<a class="item expand" id="group_line_expander__'.$block_counter.'">+</a>';
			?></div>
		</div><?php
		// THIS ENTIRE DIV WILL BE HIDDEN ON PAGE LOAD
		echo '<div class="group info hide" id="group_info__'.$block_counter.'">';
			?><div class="group summary"><?php
				echo setup_be_log_title();
				echo setup_be_log_summary();
				echo setup_be_log_info();
				?>
			</div>
			<div class="group innerblock">
				<?php
				echo '<InnerBlocks />';
				?>	
			</div>
		</div>
	</div>
</div>

<?php

// EOF