<?php

namespace Drupal\twitter_profile_widget\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for Twitter widget entities.
 */
class TwitterWidgetViewsData extends EntityViewsData implements EntityViewsDataInterface {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['twitter_widget']['table']['base'] = [
      'field' => 'id',
      'title' => $this->t('Twitter widget'),
      'help' => $this->t('The Twitter widget ID.'),
    ];

    return $data;
  }

}
