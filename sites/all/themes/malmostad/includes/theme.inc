<?php

/**
 * @file
 * Malmö stad theme functions
 */


/**
 * Asset button with text linking to url
 */
function theme_asset_button_link( $vars ) {
	$url = $vars['url'];
	$text = $vars['text'];

	$button = '<button class="btn">' . 
            	$text . 
            '</button>';
  $options = array( 'html' => true );
  $output = l( $button, $url, $options );

  return $output;
}