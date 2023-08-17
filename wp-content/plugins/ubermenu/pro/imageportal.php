<?php

add_shortcode( 'ubermenu_image_portal' , 'ubermenu_image_portal_shortcode' );
function ubermenu_image_portal_shortcode( $atts ){
	extract( shortcode_atts(
		[
			'class' => '',
			'select' => '',
		], $atts , 'ubermenu_image_portal' )
	);

	return ubermenu_image_portal( $select, $class );
}
function ubermenu_image_portal( $select, $class = '' ){
	if( !$select ){
		return '<!-- UberMenu Image Portal: No items selects -->';
	}

	$atts = ubermenu_html_atts([
		'class' => 'ubermenu-image-portal '.$class,
		'data-ubermenu-portal-select' => $select,
	]);
	return "<!-- UberMenu Image Portal --><div $atts></div><!-- End UberMenu Image Portal -->";
}