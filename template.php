<?php

function wire5_css_alter(&$css) {
  // Remove system.menus.css file.
  unset($css[drupal_get_path('module', 'system') . '/system.menus.css']);
  unset($css[drupal_get_path('module', 'system') . '/system.theme.css']);
}

/**
 * Implementation of preprocess_page().
 */
function wire5_preprocess_page(&$vars) {
  // Split primary and secondary local tasks
  $vars['primary_local_tasks'] = menu_primary_local_tasks();
  $vars['secondary_local_tasks'] = menu_secondary_local_tasks();

  // Link site name to frontpage
  $vars['site_name'] = l($vars['site_name'], '<front>', array('attributes' => array('title' => t('Home'), 'rel' => 'home')));
}

/**
 * Provide a valid, unique HTML ID.
 */
function wire5_preprocess_region(&$variables) {
  $variables['region'] = drupal_html_id($variables['region']);
}