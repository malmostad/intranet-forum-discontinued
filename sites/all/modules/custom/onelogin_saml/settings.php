<?php
  
  function get_user_settings() {
    require_once 'config.php';

    $settings                           = new Settings();
    
    $conf_env = $config["environment"];

    // Create settings based on config and chosen environment
    $settings->idp_sso_target_url =                   variable_get('onelogin_saml_login_url', '');
    $settings->x509certificate =                      variable_get('onelogin_saml_cert', '');

    $settings->const_assertion_consumer_service_url = $config[ $conf_env . ".const_assertion_consumer_service_url"];
    $settings->const_issuer =                         $config[ $conf_env . ".const_issuer"];
    $settings->const_name_identifier_format =         $config[ $conf_env . ".const_name_identifier_format"];

    // Is the request http or https?
    $req_string = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http';

    // Create base path variable without the ending "/"
    $bp = preg_replace('/\/$/', '', base_path());

    // Create consumer url if NULL in config
    if( $settings->const_assertion_consumer_service_url == NULL ) {
      $settings->const_assertion_consumer_service_url = $req_string . "://" . $_SERVER['HTTP_HOST'] . $bp . "/saml/consumer";
    }

    // create issuer name/entity id if null in config
    if( $settings->const_issuer == NULL ) {
      $settings->const_issuer = $req_string . "://" . $_SERVER['HTTP_HOST'] . $bp;
    }

    return $settings;
  }


