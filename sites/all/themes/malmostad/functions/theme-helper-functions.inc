<?php

/**
 * Are we in a local environment?
 */
function malmostad_localenv() {
  return ($_SERVER['HTTP_HOST'] == theme_get_setting('domainname_local') ) ? true : false;
}

