<?php

/**
 * Are we in a local environment?
 */
function malmostad_localenv( $assets_config ) {
  return ($_SERVER['HTTP_HOST'] == $assets_config['domainname_local'] ) ? true : false;
}

