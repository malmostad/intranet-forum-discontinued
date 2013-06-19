<?php
/**
 * @file
 * forum_admin.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function forum_admin_user_default_permissions() {
  $permissions = array();

  // Exported permission: administer advanced forum.
  $permissions['administer advanced forum'] = array(
    'name' => 'administer advanced forum',
    'roles' => array(
      'administrator' => 'administrator',
      'forum admin' => 'forum admin',
    ),
    'module' => 'advanced_forum',
  );

  // Exported permission: administer forums.
  $permissions['administer forums'] = array(
    'name' => 'administer forums',
    'roles' => array(
      'administrator' => 'administrator',
      'forum admin' => 'forum admin',
    ),
    'module' => 'forum',
  );

  return $permissions;
}
