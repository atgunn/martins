<?php
/**
 * @file
 * pricing.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function pricing_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "context" && $api == "context") {
    return array("version" => "3");
  }
  if ($module == "quicktabs" && $api == "quicktabs") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function pricing_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function pricing_node_info() {
  $items = array(
    'beverage_price' => array(
      'name' => t('Beverage Price'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
    'cake_price' => array(
      'name' => t('Cake Price'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
    'discount' => array(
      'name' => t('Discount'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
    'display_price' => array(
      'name' => t('Display Price'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
    'entree_price' => array(
      'name' => t('Entree Price'),
      'base' => 'node_content',
      'description' => t('Pricing for an entree'),
      'has_title' => '1',
      'title_label' => t('Entree'),
      'help' => '',
    ),
    'event' => array(
      'name' => t('Event'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
    'hdo_price' => array(
      'name' => t('HDO Price'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
    'music_price' => array(
      'name' => t('Music Price'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
    'offering' => array(
      'name' => t('Offering'),
      'base' => 'node_content',
      'description' => t('Generic structure for catering offerings like entrees and beverages.'),
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
    'option_price' => array(
      'name' => t('Optional Offerings'),
      'base' => 'node_content',
      'description' => t('Single content type to hold both configurable options and their pricing'),
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
    'webform' => array(
      'name' => t('Webform'),
      'base' => 'node_content',
      'description' => t('Create a new form or questionnaire accessible to users. Submission results and statistics are recorded and accessible to privileged users.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
