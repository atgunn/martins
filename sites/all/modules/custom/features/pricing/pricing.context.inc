<?php
/**
 * @file
 * pricing.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function pricing_context_default_contexts() {
  $export = array();

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'beverages';
  $context->description = '';
  $context->tag = 'pages';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'beverages' => 'beverages',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'system-main' => array(
          'module' => 'system',
          'delta' => 'main',
          'region' => 'content',
          'weight' => '-10',
        ),
        'quicktabs-beverages' => array(
          'module' => 'quicktabs',
          'delta' => 'beverages',
          'region' => 'content',
          'weight' => '-9',
        ),
        'martins_planner-fm_event_beverage' => array(
          'module' => 'martins_planner',
          'delta' => 'fm_event_beverage',
          'region' => 'content',
          'weight' => '-7',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('pages');
  $export['beverages'] = $context;

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'cakes';
  $context->description = '';
  $context->tag = 'pages';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'cakes' => 'cakes',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'system-main' => array(
          'module' => 'system',
          'delta' => 'main',
          'region' => 'content',
          'weight' => '-10',
        ),
        'quicktabs-cakes' => array(
          'module' => 'quicktabs',
          'delta' => 'cakes',
          'region' => 'content',
          'weight' => '-9',
        ),
        'martins_planner-fm_event_cake' => array(
          'module' => 'martins_planner',
          'delta' => 'fm_event_cake',
          'region' => 'content',
          'weight' => '-8',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('pages');
  $export['cakes'] = $context;

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'discounts';
  $context->description = '';
  $context->tag = 'pages';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'discounts' => 'discounts',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'system-main' => array(
          'module' => 'system',
          'delta' => 'main',
          'region' => 'content',
          'weight' => '-10',
        ),
        'views-discounts-block' => array(
          'module' => 'views',
          'delta' => 'discounts-block',
          'region' => 'content',
          'weight' => '-9',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('pages');
  $export['discounts'] = $context;

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'displays';
  $context->description = '';
  $context->tag = 'pages';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'displays' => 'displays',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'system-main' => array(
          'module' => 'system',
          'delta' => 'main',
          'region' => 'content',
          'weight' => '-10',
        ),
        'quicktabs-displays' => array(
          'module' => 'quicktabs',
          'delta' => 'displays',
          'region' => 'content',
          'weight' => '-9',
        ),
        'martins_planner-fm_event_display' => array(
          'module' => 'martins_planner',
          'delta' => 'fm_event_display',
          'region' => 'content',
          'weight' => '-8',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('pages');
  $export['displays'] = $context;

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'entree';
  $context->description = '';
  $context->tag = 'pages';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'entrees' => 'entrees',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'system-main' => array(
          'module' => 'system',
          'delta' => 'main',
          'region' => 'content',
          'weight' => '-10',
        ),
        'quicktabs-entrees' => array(
          'module' => 'quicktabs',
          'delta' => 'entrees',
          'region' => 'content',
          'weight' => '-7',
        ),
        'martins_planner-entree_buttons' => array(
          'module' => 'martins_planner',
          'delta' => 'entree_buttons',
          'region' => 'content',
          'weight' => '-6',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('pages');
  $export['entree'] = $context;

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'entree_premium';
  $context->description = '';
  $context->tag = 'pages';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'entrees-premium' => 'entrees-premium',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'system-main' => array(
          'module' => 'system',
          'delta' => 'main',
          'region' => 'content',
          'weight' => '-10',
        ),
        'quicktabs-premium_entrees' => array(
          'module' => 'quicktabs',
          'delta' => 'premium_entrees',
          'region' => 'content',
          'weight' => '-9',
        ),
        'martins_planner-fm_event_entree' => array(
          'module' => 'martins_planner',
          'delta' => 'fm_event_entree',
          'region' => 'content',
          'weight' => '-8',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('pages');
  $export['entree_premium'] = $context;

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'event_view';
  $context->description = '';
  $context->tag = 'pages';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'node/40' => 'node/40',
        '<front>' => '<front>',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'system-main' => array(
          'module' => 'system',
          'delta' => 'main',
          'region' => 'content',
          'weight' => '-10',
        ),
        'martins_planner-fm_event_type' => array(
          'module' => 'martins_planner',
          'delta' => 'fm_event_type',
          'region' => 'content',
          'weight' => '-9',
        ),
        'block-1' => array(
          'module' => 'block',
          'delta' => '1',
          'region' => 'content',
          'weight' => '-8',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('pages');
  $export['event_view'] = $context;

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'hors-doeuvres';
  $context->description = '';
  $context->tag = 'pages';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'hors-doeuvres' => 'hors-doeuvres',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'system-main' => array(
          'module' => 'system',
          'delta' => 'main',
          'region' => 'content',
          'weight' => '-10',
        ),
        'quicktabs-hors_d_oeuvres' => array(
          'module' => 'quicktabs',
          'delta' => 'hors_d_oeuvres',
          'region' => 'content',
          'weight' => '-9',
        ),
        'martins_planner-fm_event_hdo' => array(
          'module' => 'martins_planner',
          'delta' => 'fm_event_hdo',
          'region' => 'content',
          'weight' => '-8',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('pages');
  $export['hors-doeuvres'] = $context;

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'location';
  $context->description = '';
  $context->tag = 'pages';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'locations' => 'locations',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'system-main' => array(
          'module' => 'system',
          'delta' => 'main',
          'region' => 'content',
          'weight' => '-10',
        ),
        'martins_planner-fm_locations' => array(
          'module' => 'martins_planner',
          'delta' => 'fm_locations',
          'region' => 'content',
          'weight' => '-9',
        ),
        'block-1' => array(
          'module' => 'block',
          'delta' => '1',
          'region' => 'content',
          'weight' => '-8',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('pages');
  $export['location'] = $context;

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'music';
  $context->description = '';
  $context->tag = 'pages';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'music' => 'music',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'system-main' => array(
          'module' => 'system',
          'delta' => 'main',
          'region' => 'content',
          'weight' => '-10',
        ),
        'views-offering_blocks-block_6' => array(
          'module' => 'views',
          'delta' => 'offering_blocks-block_6',
          'region' => 'content',
          'weight' => '-9',
        ),
        'martins_planner-fm_event_music' => array(
          'module' => 'martins_planner',
          'delta' => 'fm_event_music',
          'region' => 'content',
          'weight' => '-8',
        ),
      ),
    ),
  );
  $context->condition_mode = 1;

  // Translatables
  // Included for use with string extractors like potx.
  t('pages');
  $export['music'] = $context;

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'other_options';
  $context->description = '';
  $context->tag = 'pages';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'options' => 'options',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'system-main' => array(
          'module' => 'system',
          'delta' => 'main',
          'region' => 'content',
          'weight' => '-25',
        ),
        'martins_planner-fm_event_options' => array(
          'module' => 'martins_planner',
          'delta' => 'fm_event_options',
          'region' => 'content',
          'weight' => '-23',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('pages');
  $export['other_options'] = $context;

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'pricing_lists';
  $context->description = '';
  $context->tag = '';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'content/pricing' => 'content/pricing',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'views-pricing_lists-block' => array(
          'module' => 'views',
          'delta' => 'pricing_lists-block',
          'region' => 'content',
          'weight' => '-10',
        ),
        'views-pricing_lists-block_1' => array(
          'module' => 'views',
          'delta' => 'pricing_lists-block_1',
          'region' => 'content',
          'weight' => '-9',
        ),
        'views-pricing_lists-block_2' => array(
          'module' => 'views',
          'delta' => 'pricing_lists-block_2',
          'region' => 'content',
          'weight' => '-8',
        ),
        'views-pricing_lists-block_3' => array(
          'module' => 'views',
          'delta' => 'pricing_lists-block_3',
          'region' => 'content',
          'weight' => '-7',
        ),
        'views-pricing_lists-block_4' => array(
          'module' => 'views',
          'delta' => 'pricing_lists-block_4',
          'region' => 'content',
          'weight' => '-6',
        ),
        'views-pricing_lists-block_5' => array(
          'module' => 'views',
          'delta' => 'pricing_lists-block_5',
          'region' => 'content',
          'weight' => '-5',
        ),
        'views-pricing_lists-block_6' => array(
          'module' => 'views',
          'delta' => 'pricing_lists-block_6',
          'region' => 'content',
          'weight' => '-4',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;
  $export['pricing_lists'] = $context;

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'welcome';
  $context->description = '';
  $context->tag = 'pages';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'welcome' => 'welcome',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'system-main' => array(
          'module' => 'system',
          'delta' => 'main',
          'region' => 'content',
          'weight' => '-10',
        ),
        'webform-client-block-42' => array(
          'module' => 'webform',
          'delta' => 'client-block-42',
          'region' => 'content',
          'weight' => '-9',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('pages');
  $export['welcome'] = $context;

  return $export;
}
