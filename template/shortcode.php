<?php
// shortdode calling
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
	
	
// XTEC ************ AFEGIT - Resetting the query breaks the loading of posts in main page
// 2021.09.14 @aginard
// 2022.04.11 @aginard
    if (is_page()) {
// ************ FI

	wp_reset_query();

// XTEC ************ AFEGIT - Resetting the query breaks the loading of posts in main page
// 2021.09.14 @aginard
// 2022.04.11 @aginard
    }
// ************ FI

    return ob_get_clean();
}
?>
