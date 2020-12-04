<?php

$z = get_field( 'log_show' );
	
//echo get_field( 'log_state' );
// GET VARIABLES
// ###########################################################
$out = ''; // initialize variable

 // DATE
if( in_array( 'log_date', $z ) ) {
	$out .= setup_be_log_date();
}

// TIME
if( in_array( 'log_time', $z ) ) {
	$out .= setup_be_log_time();
}

// CODE
if( in_array( 'log_code', $z ) ) {
	$out .= setup_be_log_code();
}

// LABEL
if( in_array( 'log_label', $z ) ) {
	$out .= setup_be_log_label();
}

// TITLE
if( in_array( 'log_title', $z ) ) {
	$out .= setup_be_log_title();
}

// SUMMARY
if( in_array( 'log_summary', $z ) ) {
	$out .= setup_be_log_summary();
}

// INFO
if( in_array( 'log_info', $z ) ) {
	$out .= setup_be_log_info();
}

// CTA Term
if( in_array( 'log_cta_term', $z ) ) {
	//$out .= setup_be_log_info();
}

// USER
if( in_array( 'log_user', $z ) ) {
	$out .= setup_be_log_user();
}

// LINK EXTERNAL
if( in_array( 'log_link', $z ) ) {
	$out .= '<div>'.setup_be_log_link_external_dynamic().'</div>';
}

// LINK INTERNAL
if( in_array( 'log_link_internal', $z ) ) {
	$out .= '<div>'.setup_be_log_link().'</div>';
}

// INNERBLOCK
if( in_array( 'log_innerblock', $z ) ) {

	$libo = get_field( 'log_innerblock_options' );

	/*
		show : Show
		nested : Nested
		collapse : Nested Collapse
	*/

	$out .= '<div class="group innerblock"><InnerBlocks /></div>';
}

/*

IF $OUT IS EMPTY, SHOW AN INDICATOR THAT THE BLOCK IS IN THE WP-CONTENT
ALSO ADD THE TEMPLATE NAME BEING USED

*/


// SPEC
/*if( in_array( 'log_filter_spec', $z ) ) {

	if( get_field( 'log_code_display' ) == 'show' ) {
		$out .= setup_be_log_code();
	}

	if( get_field( 'log_label_display' ) == 'show' ) {
		$out .= setup_be_log_label();
	}

	if( get_field( 'log_user_display' ) == 'show' ) {
		$out .= setup_be_log_user();
	}
	//$out .= .setup_be_log_user();
}

// DATE
if( in_array( 'log_filter_date', $z ) ) {
	$out .= setup_be_log_date().setup_be_log_time();
}

// INFO
if( in_array( 'log_filter_info', $z ) ) {
	$out .= setup_be_log_title().setup_be_log_summary().setup_be_log_info();
}

// LINK
if( in_array( 'log_filter_link', $z ) ) {
	$out .= '<div>'.setup_be_log_link().'</div><div>'.setup_be_log_link_external_dynamic().'</div>';
}*/

// INNERBLOCK
/*if( in_array( 'log_filter_innerblock', $z ) ) {

	// get field contents
	$ib_checker = get_field( 'log_display_innerblock' );
	$ib_checker_ex = get_field( 'log_expanded_innerblock' );

	// initialize variable
	$ib_var = '<div class="group innerblock"><InnerBlocks /></div>';


	// check if we're to show InnerBlocks in WP-ADMIN
	if( is_admin() && is_user_logged_in() ) {

		if( in_array( 'show_admin', $ib_checker ) ) {

			$val_inner_block = $ib_var;

		} else {

			$val_inner_block = '';

		}

	} else {
		
		// LIVE user is NOT logged in
		if( in_array( 'show_live', $ib_checker ) ) {

			if( $ib_checker_ex == 'show' ) {

				// SHOW INNERBLOCK OUTSIDE THE HIDDEN DIV

				$innerblock_expanded = $ib_var;
				
				$val_inner_block = '';

			} elseif( $ib_checker_ex == 'collapse' ) {

				// COLLAPSABLE

				$innerblock_expanded = '';
				
				$val_inner_block = '<div class="left"><a class="item expand" id="group_line_ib_expander__'.$block_counter.'">CLICK TO EXPAND</a></div>
									<div class="group info hide" id="group_info_ib__'.$block_counter.'">'.$ib_var.'</div>';

			} else {

				// just show InnerBlock inside the hidden div
				$innerblock_expanded = '';
				
				$val_inner_block = $ib_var;

			}	

		} else {

			$val_inner_block = '';

		}

	}

}*/


echo '<div class="'.join( ' ', $classes ).'"><div class="module-wrap">'.$out.'</div></div>';