<?php

namespace Drupal\twitter_profile_widget\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Cache\Cache;

/**
 * Form controller for Twitter widget edit forms.
 *
 * @ingroup twitter_profile_widget
 */
class TwitterWidgetForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    /* @var $entity \Drupal\twitter_profile_widget\Entity\TwitterWidget */

    $form = parent::buildForm($form, $form_state);
    $entity = $this->entity;
    $config = \Drupal::config('twitter_profile_widget.settings');

    if ($config->get('twitter_widget_token') !== 'Credentials Valid') {
      drupal_set_message(t('Credentials for the Twitter API have not been configured or are invalid. Review the <a href=":widget">Twitter widget</a> settings.', [':widget' => '/admin/config/media/twitter_profile_widget']), 'warning');
    }

    // Conditionally display supplementary fields based on "type" selection.
    $form['search']['#states'] = [
      'visible' => [
        '.field--name-type.field--widget-options-select select:first' => [
          ['value' => 'search'],
        ],
      ],
    ];
    $form['account']['#states'] = [
      'invisible' => [
        '.field--name-type.field--widget-options-select select:first' => [
          ['value' => 'search'],
        ],
      ],
    ];
    $form['timeline']['#states'] = [
      'visible' => [
        '.field--name-type.field--widget-options-select select:first' => [
          ['value' => 'timeline'],
        ],
      ],
    ];
    $form['replies']['#states'] = [
      'visible' => [
        '.field--name-type.field--widget-options-select select:first' => [
          ['value' => 'status'],
          ['value' => 'timeline'],
        ],
      ],
    ];
    $form['retweets']['#states'] = [
      'visible' => [
        '.field--name-type.field--widget-options-select select:first' => [
          ['value' => 'status'],
          ['value' => 'timeline'],
        ],
      ],
    ];
    // Place API call types into fieldset for better UX.
    $form['search_parameters'] = [
      '#type' => 'fieldset',
    ];

    $form['search_parameters']['type'] = $form['type'];
    $form['search_parameters']['account'] = $form['account'];
    $form['search_parameters']['timeline'] = $form['timeline'];
    $form['search_parameters']['search'] = $form['search'];
    $form['search_parameters']['replies'] = $form['replies'];
    $form['search_parameters']['retweets'] = $form['retweets'];

    unset($form['search']);
    unset($form['type']);
    unset($form['account']);
    unset($form['timeline']);
    unset($form['replies']);
    unset($form['retweets']);

    return $form;
  }

  /**
   * {@inheritdoc}
   *
   * Button-level validation handlers are highly discouraged for entity forms,
   * as they will prevent entity validation from running. If the entity is going
   * to be saved during the form submission, this method should be manually
   * invoked from the button-level validation handler, otherwise an exception
   * will be thrown.
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);

    $entity = $this->buildEntity($form, $form_state);
    $account = $entity->get('account')->value;
    $type = $entity->get('type')->value;
    $search = $entity->get('search')->value;
    $timeline = $entity->get('timeline')->value;
    $count = $entity->get('count')->value;
    $replies = $entity->get('replies')->value;
    $retweets = $entity->get('retweets')->value;
    if ($type == 'search' && $search == '') {
      $form_state->setErrorByName('search', $this->t('The "Search term" type requires entering a search parameter.'));
    }
    if ($type !== 'search' && $account == '') {
      $form_state->setErrorByName('account', $this->t('This Twitter widget type requires that you enter an account handle.'));
    }
    if ($type == 'timeline' && $timeline == '') {
      $form_state->setErrorByName('timeline', $this->t('The "User timeline" type requires entering a timeline list.'));
    }
    return $entity;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $entity = $this->entity;
    $id = $entity->get('id')->value;
    $status = parent::save($form, $form_state);

    // Invalidate cached Twitter data for this widget upon save.
    Cache::invalidateTags(['twitter_widget:' . $id, 'twitter_widget_view']);

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Twitter widget.', [
          '%label' => $entity->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Twitter widget.', [
          '%label' => $entity->label(),
        ]));
    }
    $form_state->setRedirect('entity.twitter_widget.canonical', ['twitter_widget' => $entity->id()]);
  }

}
