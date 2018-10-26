<?php

namespace Drupal\twitter_profile_widget;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Twitter widget entities.
 *
 * @ingroup twitter_profile_widget
 */
interface TwitterWidgetInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  /**
   * Gets the Twitter widget name.
   *
   * @return string
   *   Name of the Twitter widget.
   */
  public function getName();

  /**
   * Sets the Twitter widget name.
   *
   * @param string $name
   *   The Twitter widget name.
   *
   * @return \Drupal\twitter_profile_widget\TwitterWidgetInterface
   *   The called Twitter widget entity.
   */
  public function setName($name);

  /**
   * Gets the Twitter widget creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Twitter widget.
   */
  public function getCreatedTime();

  /**
   * Sets the Twitter widget creation timestamp.
   *
   * @param int $timestamp
   *   The Twitter widget creation timestamp.
   *
   * @return \Drupal\twitter_profile_widget\TwitterWidgetInterface
   *   The called Twitter widget entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Twitter widget published status indicator.
   *
   * Unpublished Twitter widget are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Twitter widget is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Twitter widget.
   *
   * @param bool $published
   *   TRUE to set this Twitter widget to published, FALSE to set it to
   *   unpublished.
   *
   * @return \Drupal\twitter_profile_widget\TwitterWidgetInterface
   *   The called Twitter widget entity.
   */
  public function setPublished($published);

}
