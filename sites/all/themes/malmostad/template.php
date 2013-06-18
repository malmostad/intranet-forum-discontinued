<?php
/**
 * @file
 *   Theme implementation functions for Malmö Stad.
 */

// Theme helper functions
require_once './' . drupal_get_path('theme', 'malmostad') . '/functions/theme-helper-functions.inc';


/********************************
 *        ASSETS
 **/


/**
 * Preprocesses the wrapping HTML.
 *
 * @param array &$variables
 *   Template variables.
 */
function malmostad_preprocess_html(&$vars) {
  // Assets config
  require_once './' . drupal_get_path('theme', 'malmostad') . '/config/assets-config.inc';
  
  // Determine asset url based on environment
  $assets_url = malmostad_localenv( $assets_config ) && $assets_config['testenv_assets']=='local' ? "//" . $assets_config['assetsurl_local'] : "//" . $assets_config['assetsurl_prod'];
  
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



/********************************
 *        ADVANCED FORUM
 **/


/**
 * Overriding advanced forum theme function to show list of types that can be posted in forum.
 */
function malmostad_advanced_forum_node_type_create_list(&$variables) {
  $forum_id = $variables['forum_id'];

  // Get the list of node types to display links for.
  $type_list = advanced_forum_node_type_create_list($forum_id);

  $output = '';
  if (is_array($type_list)) {
    foreach ($type_list as $type => $item) {
      $output .= '<button class="btn">';
      $output .= theme('advanced_forum_l', array(
        'text' => t('New @node_type', array('@node_type' => $item['name'])),
        'path' => $item['href'],
        'options' => NULL
        ));
      $output .= '</button>';
    }
  }
  else {
    // User did not have access to create any node types in this fourm so
    // we just return the denial text / login prompt.
    $output = $type_list;
  }

  return $output;
}