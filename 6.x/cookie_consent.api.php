<?php

/**
 * @file
 * Describe hooks provided by the Cookie Consent module.
 */

/**
 * This hook lets you provide your own categories for Cookie Consent.
 */
function hook_cookie_consent_categories() {
  $categories = array();

  // Make sure that the key does not contain spaces.
  $categories['mycategory'] = array(
    'title' => t('My Category Title'),
    'description' => t('My Category Description.')
  );

  return $categories;
}

/**
 * This hook lets you alter the existing categories for Cookie Consent
 */
function hook_cookie_consent_categories_alter(&$categories) {
  $categories['mycategory']['title'] = t('My Title');
}