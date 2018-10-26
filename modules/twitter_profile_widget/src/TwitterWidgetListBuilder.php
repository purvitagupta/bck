<?php

namespace Drupal\twitter_profile_widget;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Routing\LinkGeneratorTrait;
use Drupal\Core\Url;

/**
 * Defines a class to build a listing of Twitter widget entities.
 *
 * @ingroup twitter_profile_widget
 */
class TwitterWidgetListBuilder extends EntityListBuilder {

  use LinkGeneratorTrait;

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['name'] = $this->t('Widget label');
    $header['type'] = $this->t('Type');
    $header['account'] = $this->t('Twitter account');
    $header['timeline'] = $this->t('Timeline list');
    $header['search'] = $this->t('Search query');
    $header['count'] = $this->t('Display count');
    $header['replies'] = $this->t('Replies');
    $header['retweets'] = $this->t('Retweets');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\twitter_profile_widget\Entity\TwitterWidget */
    $row['name'] = $this->l(
      $entity->label(),
      new Url(
        'entity.twitter_widget.canonical', [
          'twitter_widget' => $entity->id(),
        ]
      )
    );
    $row['type'] = $entity->get('type')->value;
    $row['account'] = $entity->get('account')->value;
    $row['timeline'] = $entity->get('timeline')->value;
    $row['search'] = $entity->get('search')->value;
    $row['count'] = $entity->get('count')->value;
    $row['replies'] = $entity->get('replies')->value;
    $row['retweets'] = $entity->get('retweets')->value;
    return $row + parent::buildRow($entity);
  }

}
