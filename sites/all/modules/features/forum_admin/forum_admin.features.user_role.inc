<?php
/**
 * @file
 * forum_admin.features.user_role.inc
 */

/**
 * Implements hook_user_default_roles().
 */
function forum_admin_user_default_roles() {
  $roles = array();

  // Exported role: forum admin.
  $roles['forum admin'] = array(
    'name' => 'forum admin',
    'weight' => 4,
  );

  return $roles;
}
