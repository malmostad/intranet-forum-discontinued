<?php
/**
 * @file
 *   Theme implementation functions for Malmö Stad.
 */

// Theme helper functions
include_once './' . drupal_get_path('theme', 'malmostad') . '/functions/theme-helper-functions.inc';

/**
 * Preprocesses the wrapping HTML.
 *
 * @param array &$variables
 *   Template variables.
 */
function malmostad_preprocess_html(&$vars) {
  // Determine asset url based on environment
  $assets_url = malmostad_localenv() && theme_get_setting('testenv_assets')=='local' ? "//" . theme_get_setting('assetsurl_local') : "//" . theme_get_setting('assetsurl_prod');
  
  // Include assets-3.0 resources as specified in asset documentation

  // malmo.css
  $asset_malmo_css = array(
    '#type' => 'html_tag',
    '#tag' => 'link',
    '#attributes' => array(
      'href' =>  $assets_url . '/malmo.css',
      'rel' => 'stylesheet',
      'type' => 'text/css')
  );
  drupal_add_html_head($asset_malmo_css, 'asset_malmo_css');
 
  // html5shiv-printshiv.js
  $html5shiv_printshiv_js = array(
    '#tag' => 'script',
    '#attributes' => array(
      'src' => $assets_url . 'html5shiv-printshiv.js', 
    ),
    '#prefix' => '<!--[if lte IE 8]>',
    '#suffix' => '</script><![endif]-->',
  );
  drupal_add_html_head($html5shiv_printshiv_js, 'html5shiv_printshiv_js');

  // ie9.css
  $ie9_css = array(
    '#tag' => 'script',
    '#attributes' => array(
      'src' => $assets_url . 'legacy/ie9.css', 
    ),
    '#prefix' => '<!--[if lte IE 8]>',
    '#suffix' => '</script><![endif]-->',
  );
  drupal_add_html_head($ie9_css, 'ie9_css');

  // ie7.css
  $ie7_css = array(
    '#tag' => 'script',
    '#attributes' => array(
      'src' => $assets_url . 'legacy/ie7.css', 
    ),
    '#prefix' => '<!--[if lte IE 8]>',
    '#suffix' => '</script><![endif]-->',
  );
  drupal_add_html_head($ie7_css, 'ie7_css');

  // Add malmo.js at bottom of page
  $data = $assets_url . "/malmo.js";
  $options = array( "type" => "external", "scope" => "footer" );
  drupal_add_js( $data, $options );
}

function malmostad_preprocess_region(&$variables) {
  // TODO - Remove class bigfoot from region template
}