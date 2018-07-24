<?php
add_shortcode( 'TABS_R', 'TABS_R_ShortCode' );
function TABS_R_ShortCode( $Id ) {
	ob_start();
	if(!isset($Id['id']))
	{
		$WPSM_Tabs_ID = "";
	}
	else
	{
		$WPSM_Tabs_ID = $Id['id'];
	}
	require("content.php");

	// XTEC MODIFICAT - Change wp_reset_query to wp_reset_postdata to prevent errors with loop inside loop. - 2018.07.24 @adriagarrido
	wp_reset_postdata();
    return ob_get_clean();
}
?>
