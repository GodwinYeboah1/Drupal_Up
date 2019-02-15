<?php
/**
 * Before the page is loaded 
 * Implements hook_prepocess_page().
 */
function drupalup_preprocess_page(&$variables){
     $variables['dog_name'] = theme_get_setting('dog_name');
}
