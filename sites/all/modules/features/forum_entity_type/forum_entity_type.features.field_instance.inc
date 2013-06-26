<?php
/**
 * @file
 * forum_entity_type.features.field_instance.inc
 */

/**
 * Implements hook_field_default_field_instances().
 */
function forum_entity_type_field_default_field_instances() {
  $field_instances = array();

  // Exported field_instance: 'node-forum-field_usertags'
  $field_instances['node-forum-field_usertags'] = array(
    'bundle' => 'forum',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => 'Ange valfritt antal etiketter, med kommatecken emellan.',
    'display' => array(
      'default' => array(
        'label' => 'above',
        'module' => 'taxonomy',
        'settings' => array(),
        'type' => 'taxonomy_term_reference_link',
        'weight' => 12,
      ),
      'teaser' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 0,
      ),
    ),
    'entity_type' => 'node',
    'field_name' => 'field_usertags',
    'label' => 'Tags',
    'required' => 0,
    'settings' => array(
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 0,
      'module' => 'taxonomy',
      'settings' => array(
        'autocomplete_path' => 'taxonomy/autocomplete',
        'size' => 60,
      ),
      'type' => 'taxonomy_autocomplete',
      'weight' => 31,
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Ange valfritt antal etiketter, med kommatecken emellan.');
  t('Tags');

  return $field_instances;
}
