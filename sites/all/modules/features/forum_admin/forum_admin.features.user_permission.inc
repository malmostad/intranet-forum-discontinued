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

  // Exported permission: create forum content.
  $permissions['create forum content'] = array(
    'name' => 'create forum content',
    'roles' => array(
      'administrator' => 'administrator',
      'forum admin' => 'forum admin',
      'user' => 'user',
    ),
    'module' => 'node',
  );

  // Exported permission: delete any forum content.
  $permissions['delete any forum content'] = array(
    'name' => 'delete any forum content',
    'roles' => array(
      'administrator' => 'administrator',
      'forum admin' => 'forum admin',
    ),
    'module' => 'node',
  );

  // Exported permission: delete own forum content.
  $permissions['delete own forum content'] = array(
    'name' => 'delete own forum content',
    'roles' => array(
      'administrator' => 'administrator',
      'forum admin' => 'forum admin',
      'user' => 'user',
    ),
    'module' => 'node',
  );

  // Exported permission: edit any forum content.
  $permissions['edit any forum content'] = array(
    'name' => 'edit any forum content',
    'roles' => array(
      'administrator' => 'administrator',
      'forum admin' => 'forum admin',
    ),
    'module' => 'node',
  );

  // Exported permission: edit own forum content.
  $permissions['edit own forum content'] = array(
    'name' => 'edit own forum content',
    'roles' => array(
      'administrator' => 'administrator',
      'forum admin' => 'forum admin',
      'user' => 'user',
    ),
    'module' => 'node',
  );

  return $permissions;
}
