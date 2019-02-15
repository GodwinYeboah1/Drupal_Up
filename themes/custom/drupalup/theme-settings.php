<?php 
/**
 * @file
 * Theme settings in this file.
 */
/**
 * Implements hook_form_system_theme_settings_alter()
 */
function drupalup_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface $form_state, $form_id = NULL){
    // make sure the form id is not null (empyt)
    // isset() to check if a variable is set to null
    if(isset($form_id)){ return;}
    $form['dog_name'] = [
        '#type' => 'textfield',
        '#title' => t('doggie name'),
        '#default_value' => theme_get_setting(' '),
        '#description' => t('Our cute doggie name here'),
    ];
}