<?php

namespace Drupal\twitter_profile_widget\Entity;

use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityChangedTrait;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\twitter_profile_widget\TwitterWidgetInterface;
use Drupal\user\UserInterface;

/**
 * Defines the Twitter widget entity.
 *
 * @ingroup twitter_profile_widget
 *
 * @ContentEntityType(
 *   id = "twitter_widget",
 *   label = @Translation("Twitter widget"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\twitter_profile_widget\TwitterWidgetListBuilder",
 *     "views_data" = "Drupal\twitter_profile_widget\Entity\TwitterWidgetViewsData",
 *
 *     "form" = {
 *       "default" = "Drupal\twitter_profile_widget\Form\TwitterWidgetForm",
 *       "add" = "Drupal\twitter_profile_widget\Form\TwitterWidgetForm",
 *       "edit" = "Drupal\twitter_profile_widget\Form\TwitterWidgetForm",
 *       "delete" = "Drupal\twitter_profile_widget\Form\TwitterWidgetDeleteForm",
 *     },
 *     "access" = "Drupal\twitter_profile_widget\TwitterWidgetAccessControlHandler",
 *     "route_provider" = {
 *       "html" = "Drupal\twitter_profile_widget\TwitterWidgetHtmlRouteProvider",
 *     },
 *   },
 *   base_table = "twitter_widget",
 *   admin_permission = "administer twitter widget entities",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "name",
 *     "uuid" = "uuid",
 *     "uid" = "user_id",
 *     "langcode" = "langcode",
 *     "status" = "status",
 *   },
 *   links = {
 *     "canonical" = "/admin/content/twitter_widget/{twitter_widget}",
 *     "add-form" = "/admin/content/twitter_widget/add",
 *     "edit-form" = "/admin/content/twitter_widget/{twitter_widget}/edit",
 *     "delete-form" = "/admin/content/twitter_widget/{twitter_widget}/delete",
 *     "collection" = "/admin/content/twitter_widget",
 *   },
 *   field_ui_base_route = "twitter_profile_widget.admin_settings"
 * )
 */
class TwitterWidget extends ContentEntityBase implements TwitterWidgetInterface {

  use EntityChangedTrait;

  /**
   * {@inheritdoc}
   */
  public static function preCreate(EntityStorageInterface $storage_controller, array &$values) {
    parent::preCreate($storage_controller, $values);
    $values += [
      'user_id' => \Drupal::currentUser()->id(),
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return $this->get('name')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setName($name) {
    $this->set('name', $name);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getCreatedTime() {
    return $this->get('created')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setCreatedTime($timestamp) {
    $this->set('created', $timestamp);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getOwner() {
    return $this->get('user_id')->entity;
  }

  /**
   * {@inheritdoc}
   */
  public function getOwnerId() {
    return $this->get('user_id')->target_id;
  }

  /**
   * {@inheritdoc}
   */
  public function setOwnerId($uid) {
    $this->set('user_id', $uid);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function setOwner(UserInterface $account) {
    $this->set('user_id', $account->id());
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function isPublished() {
    return (bool) $this->getEntityKey('status');
  }

  /**
   * {@inheritdoc}
   */
  public function setPublished($published) {
    $this->set('status', $published ? NODE_PUBLISHED : NODE_NOT_PUBLISHED);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    $fields['id'] = BaseFieldDefinition::create('integer')
      ->setLabel(t('ID'))
      ->setDescription(t('The ID of the Twitter widget entity.'))
      ->setReadOnly(TRUE);
    $fields['uuid'] = BaseFieldDefinition::create('uuid')
      ->setLabel(t('UUID'))
      ->setDescription(t('The UUID of the Twitter widget entity.'))
      ->setReadOnly(TRUE);
    $fields['status'] = BaseFieldDefinition::create('boolean')
      ->setLabel(t('Publishing status'))
      ->setDescription(t('A boolean indicating whether the Twitter widget is published.'))
      ->setDefaultValue(TRUE);
    $fields['user_id'] = BaseFieldDefinition::create('entity_reference')
      ->setLabel(t('Authored by'))
      ->setDescription(t('The user ID of author of the Twitter widget entity.'))
      ->setRevisionable(TRUE)
      ->setSetting('target_type', 'user')
      ->setSetting('handler', 'default')
      ->setDefaultValueCallback('Drupal\node\Entity\Node::getCurrentUserId')
      ->setTranslatable(TRUE)
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'author',
        'weight' => 0,
      ])
      ->setReadOnly(TRUE)
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE);

    $fields['name'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Widget Label'))
      ->setDescription(t('Identifies this widget within the site. It should be descriptive and unique.'))
      ->setSettings([
        'max_length' => 50,
        'text_processing' => 0,
      ])
      ->setDefaultValue('')
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'string',
        'weight' => -4,
      ])
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => -4,
      ])
      ->setRequired(TRUE)
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', FALSE);

    $fields['headline'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Headline'))
      ->setDescription(t('Optional header that appears above the tweets.'))
      ->setSettings([
        'default_value' => 'Latest Tweets',
        'max_length' => 255,
        'text_processing' => 0,
      ])
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'string',
        'weight' => -1,
      ])
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => -1,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', FALSE);

    $fields['type'] = BaseFieldDefinition::create('list_string')
      ->setLabel(t('Type'))
      ->setDescription(t('Criteria used to return tweets.'))
      ->setSettings([
        'allowed_values' => [
          'status' => 'User tweets',
          'timeline' => 'User timeline',
          'favorites' => 'Favorited by user',
          'search' => 'Search term (Twitter-wide)',
        ],
      ])
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'string',
        'weight' => 0,
      ])
      ->setDisplayOptions('form', [
        'type' => 'options_select',
        'weight' => 0,
      ])
      ->setRequired(TRUE)
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', FALSE);

    $fields['account'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Twitter Account'))
      ->setDescription(t('The username (handle) from which to pull tweets.'))
      ->setSettings([
        'default_value' => '',
        'max_length' => 255,
        'text_processing' => 0,
      ])
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'string',
        'weight' => 0,
      ])
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => 1,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', FALSE);

    $fields['search'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Search query'))
      ->setDescription(t('A search term, which may include Twitter <a href=":examples" target="blank">query operators</a>. Results are sorted based on Twitter ranking algorithm.', [':examples' => 'https://dev.twitter.com/rest/public/search#query-operators']))
      ->setSettings([
        'default_value' => '',
        'max_length' => 255,
        'text_processing' => 0,
      ])
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'string',
        'weight' => 0,
      ])
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => 2,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', FALSE);

    $fields['timeline'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Timeline List'))
      ->setDescription(t('Must already exist in Twitter to return any results. Lists are found at https://twitter.com/[username]/lists'))
      ->setSettings([
        'default_value' => '',
        'max_length' => 255,
        'text_processing' => 0,
      ])
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'string',
        'weight' => 0,
      ])
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => 2,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', FALSE);

    $fields['count'] = BaseFieldDefinition::create('integer')
      ->setLabel(t('Number of tweets'))
      ->setDescription(t('How many Tweets should be displayed?'))
      ->setDefaultValue(5)
      ->setSetting('min', 1)
      ->setSetting('max', 10)
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'hidden',
        'weight' => 0,
      ])
      ->setDisplayOptions('form', [
        'type' => 'integer',
        'weight' => 3,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', FALSE);

    $fields['retweets'] = BaseFieldDefinition::create('boolean')
      ->setLabel(t('Display Retweets'))
      ->setDefaultValue(TRUE)
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'boolean',
        'weight' => 0,
      ])
      ->setDisplayOptions('form', [
        'settings' => ['display_label' => TRUE],
        'weight' => 4,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', FALSE);

    $fields['replies'] = BaseFieldDefinition::create('boolean')
      ->setLabel(t('Display Replies'))
      ->setDefaultValue(TRUE)
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'boolean',
        'weight' => 0,
      ])
      ->setDisplayOptions('form', [
        'settings' => ['display_label' => TRUE],
        'weight' => 5,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', FALSE);

    $fields['view_all'] = BaseFieldDefinition::create('string')
      ->setLabel(t('"View all..." text'))
      ->setDescription(t('Optional text displayed at the bottom of the widget, linking to Twitter.'))
      ->setSettings([
        'default_value' => 'View on Twitter',
        'max_length' => 255,
        'text_processing' => 0,
      ])
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'string',
        'weight' => 0,
      ])
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => 2,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', FALSE);

    $fields['langcode'] = BaseFieldDefinition::create('language')
      ->setLabel(t('Language code'))
      ->setDescription(t('The language code for the Twitter widget entity.'))
      ->setDisplayOptions('form', [
        'type' => 'language_select',
        'weight' => 10,
      ])
      ->setDisplayConfigurable('form', TRUE);

    $fields['created'] = BaseFieldDefinition::create('created')
      ->setLabel(t('Created'))
      ->setDescription(t('The time that the entity was created.'));

    $fields['changed'] = BaseFieldDefinition::create('changed')
      ->setLabel(t('Changed'))
      ->setDescription(t('The time that the entity was last edited.'));

    return $fields;
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheMaxAge() {
    return \Drupal::config('twitter_profile_widget.settings')
      ->get('twitter_widget_cache_time');
  }

}
