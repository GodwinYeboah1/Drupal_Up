<?php 

//Need to make sure to doc what file this is example bellow in comments

/**
 * @File
 * Writing theme function\
 * Implementing template_preprocess_views_view_fields().
 * execpt variable but need to be passed by refreence &$varibale_name
 */

function drupal_up_preprocess_views_view_fields(&$variables){
  kint($variables);
}