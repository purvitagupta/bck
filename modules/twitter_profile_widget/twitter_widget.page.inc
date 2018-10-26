<?php

/**
 * @file
 * Contains twitter_widget.page.inc.
 *
 * Page callback for Twitter widget entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Twitter widget templates.
 *
 * Default template: twitter_widget.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_twitter_widget(array &$variables) {
  // Fetch TwitterWidget Entity Object.
  $twitter_widget = $variables['elements']['#twitter_widget'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
