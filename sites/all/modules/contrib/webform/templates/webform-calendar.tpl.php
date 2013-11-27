<?php

/**
 * @file
 * Theme the button for the date component date popup.
<input type="image" src="<?php print base_path() . drupal_get_path('module', 'webform') . '/images/calendar.png'; ?>" class="<?php print implode(' ', $calendar_classes); ?>" alt="<?php print t('Open popup calendar'); ?>" title="<?php print t('Open popup calendar'); ?>" />

 */
?>
<?php
  $idKey = str_replace('_', '-', $component[form_key]); 
?>
<input type="text" id="edit-submitted-<?php print $idKey ?>" class="form-text <?php print implode(' ', $calendar_classes); ?>" alt="<?php print t('Open popup calendar'); ?>" title="<?php print t('Open popup calendar'); ?>" />
