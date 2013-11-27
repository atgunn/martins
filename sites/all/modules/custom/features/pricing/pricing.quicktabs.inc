<?php
/**
 * @file
 * pricing.quicktabs.inc
 */

/**
 * Implements hook_quicktabs_default_quicktabs().
 */
function pricing_quicktabs_default_quicktabs() {
  $export = array();

  $quicktabs = new stdClass();
  $quicktabs->disabled = FALSE; /* Edit this to true to make a default quicktabs disabled initially */
  $quicktabs->api_version = 1;
  $quicktabs->machine_name = 'cakes';
  $quicktabs->ajax = 0;
  $quicktabs->hide_empty_tabs = FALSE;
  $quicktabs->default_tab = 0;
  $quicktabs->title = 'Cakes';
  $quicktabs->tabs = array(
    0 => array(
      'path' => 'flickr/set/72157627401328240',
      'title' => 'Cakes',
      'weight' => '-100',
      'type' => 'callback',
    ),
  );
  $quicktabs->renderer = 'quicktabs';
  $quicktabs->style = 'nostyle';
  $quicktabs->options = array();

  // Translatables
  // Included for use with string extractors like potx.
  t('Cakes');

  $export['cakes'] = $quicktabs;

  $quicktabs = new stdClass();
  $quicktabs->disabled = FALSE; /* Edit this to true to make a default quicktabs disabled initially */
  $quicktabs->api_version = 1;
  $quicktabs->machine_name = 'displays';
  $quicktabs->ajax = 0;
  $quicktabs->hide_empty_tabs = FALSE;
  $quicktabs->default_tab = 0;
  $quicktabs->title = 'Displays';
  $quicktabs->tabs = array(
    0 => array(
      'path' => 'flickr/set/72157627396183808',
      'title' => 'displays',
      'weight' => '-100',
      'type' => 'callback',
    ),
  );
  $quicktabs->renderer = 'quicktabs';
  $quicktabs->style = 'nostyle';
  $quicktabs->options = array();

  // Translatables
  // Included for use with string extractors like potx.
  t('Displays');
  t('displays');

  $export['displays'] = $quicktabs;

  $quicktabs = new stdClass();
  $quicktabs->disabled = FALSE; /* Edit this to true to make a default quicktabs disabled initially */
  $quicktabs->api_version = 1;
  $quicktabs->machine_name = 'entrees';
  $quicktabs->ajax = 0;
  $quicktabs->hide_empty_tabs = TRUE;
  $quicktabs->default_tab = 0;
  $quicktabs->title = 'Entrees and Apps';
  $quicktabs->tabs = array(
    0 => array(
      'path' => 'flickr/set/72157627271388215',
      'title' => 'Base Entrees',
      'weight' => '-100',
      'type' => 'callback',
    ),
    1 => array(
      'path' => 'flickr/set/72157627395866206',
      'title' => 'Appetizers',
      'weight' => '-99',
      'type' => 'callback',
    ),
    2 => array(
      'path' => 'flickr/set/72157627402068054',
      'title' => 'Beverages',
      'weight' => '-98',
      'type' => 'callback',
    ),
  );
  $quicktabs->renderer = 'quicktabs';
  $quicktabs->style = 'Sky';
  $quicktabs->options = array();

  // Translatables
  // Included for use with string extractors like potx.
  t('Appetizers');
  t('Base Entrees');
  t('Beverages');
  t('Entrees and Apps');

  $export['entrees'] = $quicktabs;

  $quicktabs = new stdClass();
  $quicktabs->disabled = FALSE; /* Edit this to true to make a default quicktabs disabled initially */
  $quicktabs->api_version = 1;
  $quicktabs->machine_name = 'hors_d_oeuvres';
  $quicktabs->ajax = 0;
  $quicktabs->hide_empty_tabs = FALSE;
  $quicktabs->default_tab = 0;
  $quicktabs->title = 'Hors D\'oeuvres';
  $quicktabs->tabs = array(
    0 => array(
      'path' => 'flickr/set/72157627271766871',
      'title' => 'HdO',
      'weight' => '-100',
      'type' => 'callback',
    ),
  );
  $quicktabs->renderer = 'quicktabs';
  $quicktabs->style = 'nostyle';
  $quicktabs->options = array();

  // Translatables
  // Included for use with string extractors like potx.
  t('HdO');
  t('Hors D\'oeuvres');

  $export['hors_d_oeuvres'] = $quicktabs;

  $quicktabs = new stdClass();
  $quicktabs->disabled = FALSE; /* Edit this to true to make a default quicktabs disabled initially */
  $quicktabs->api_version = 1;
  $quicktabs->machine_name = 'premium_entrees';
  $quicktabs->ajax = 0;
  $quicktabs->hide_empty_tabs = FALSE;
  $quicktabs->default_tab = 0;
  $quicktabs->title = 'Premium Entrees';
  $quicktabs->tabs = array(
    0 => array(
      'path' => 'flickr/set/72157636843891085',
      'title' => '$2.00',
      'weight' => '-100',
      'type' => 'callback',
    ),
    1 => array(
      'path' => 'flickr/set/72157636844132876',
      'title' => '$4.50',
      'weight' => '-99',
      'type' => 'callback',
    ),
    2 => array(
      'path' => 'flickr/set/72157636844003055',
      'title' => '$5.50',
      'weight' => '-98',
      'type' => 'callback',
    ),
  );
  $quicktabs->renderer = 'quicktabs';
  $quicktabs->style = 'Sky';
  $quicktabs->options = array();

  // Translatables
  // Included for use with string extractors like potx.
  t('$2.00');
  t('$4.50');
  t('$5.50');
  t('Premium Entrees');

  $export['premium_entrees'] = $quicktabs;

  return $export;
}
