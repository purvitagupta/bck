<?php

namespace Drupal\twitter_profile_widget;

use Drupal\twitter_profile_widget\Resources\j7mbo\twitter_api_php\TwitterAPIExchange;
use Drupal\twitter_profile_widget\Entity\TwitterWidget;

/**
 * Class TwitterProfile.
 *
 * @package Drupal\twitter_profile_widget
 */
class TwitterProfile implements TwitterProfileInterface {

  /**
   * Pull tweets from the Twitter API.
   *
   * @param TwitterWidget $entity
   *   A fully-built Twitter entity object.
   *
   * @return str[]
   *    An array of Twitter objects.
   */
  public function pull(TwitterWidget $entity) {

    $account = $entity->get('account')->value;
    $type = $entity->get('type')->value;
    $search = $entity->get('search')->value;
    $timeline = $entity->get('timeline')->value;
    $count = $entity->get('count')->value;
    $replies = $entity->get('replies')->value;
    $retweets = $entity->get('retweets')->value;

    if (!$connection = $this->getConnection()) {
      \Drupal::logger('twitter_profile_widget')->error('No credentials were found for the Twitter API. Check /admin/config/media/twitter_profile_widget.');
      return FALSE;
    }
    $twitter = new TwitterAPIExchange($connection);
    $query = $this->buildQuery($account, $type, $timeline, $search, $replies, $retweets);

    // Don't go double encoding.
    $getfield = urldecode($query['getfield']);
    $data = $twitter->setGetfield($getfield)
      ->buildOauth($query['url'], 'GET')
      ->performRequest();
    $tweets = json_decode($data);
    if (empty($tweets)) {
      return FALSE;
    }
    elseif (isset($tweets->errors)) {
      \Drupal::logger('twitter_profile_widget')->error($tweets->errors[0]->message);
      return FALSE;
    }
    elseif (isset($tweets->statuses)) {
      // The "Search" API returns statuses within the "statuses" element.
      // See https://dev.twitter.com/rest/reference/get/search/tweets .
      return $tweets->statuses;
    }
    return $tweets;
  }

  /**
   * Internal method for retrieving & building the settings configuration.
   *
   * @param string $key
   *    Twitter API key.
   * @param string $secret
   *    Twitter API secret.
   *
   * @return str[]
   *    An array of settings compatible with TwitterAPIExchange class.
   */
  protected function getConnection($key = '', $secret = '') {
    if (empty($key) || empty($secret)) {
      $config = \Drupal::config('twitter_profile_widget.settings');
      $key = $config->get('twitter_widget_key');
      $secret = $config->get('twitter_widget_secret');
      if (empty($key) || empty($secret)) {
        return FALSE;
      }
    }
    // Currently, we don't use OAuth.
    return [
      'oauth_access_token' => '',
      'oauth_access_token_secret' => '',
      'consumer_key' => $key,
      'consumer_secret' => $secret,
    ];
  }

  /**
   * Build the full REST URL, depending on user-selected type.
   *
   * @return string
   *    A URL, e.g., https://api.twitter.com/1.1/favorites/list.json?count=2&screen_name=episod
   */
  protected function buildQuery($account, $type = '', $timeline = '', $search = '', $replies = 1, $retweets = 1) {
    switch ($type) {

      case 'timeline':
        $url = 'https://api.twitter.com/1.1/lists/statuses.json';
        $params = [
          'count' => 10,
          'slug' => $timeline,
          'owner_screen_name' => $account,
          'include_rts' => $retweets,
        ];

        if ($replies == 0) {
          $params['exclude_replies'] = 1;
        }
        break;

      case 'favorites':
        $url = 'https://api.twitter.com/1.1/favorites/list.json';
        $params = [
          'count' => 10,
          'screen_name' => $account,
        ];

        break;

      case 'search':
        $url = 'https://api.twitter.com/1.1/search/tweets.json';
        $params = [
          'q' => $search,
          'count' => 10,
        ];
        break;

      default:
        // Default to getting Tweets from a user.
        $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
        $params = [
          'count' => 10,
          'screen_name' => $account,
          'include_rts' => $retweets,
        ];

        if ($replies == 0) {
          $params['exclude_replies'] = 1;
        }
        break;

    }

    $getfield = '?' . http_build_query($params);
    return [
      'url' => $url,
      'getfield' => $getfield,
    ];
  }

  /**
   * Helper query to check whether the credentials are valid.
   *
   * @param string $key
   *    Twitter API key.
   * @param string $secret
   *    Twitter API secret.
   *
   * @return bool|string
   *    Whether or not the connection is valid. If error message, return that.
   */
  public function checkConnection($key = '', $secret = '') {
    if ($key == '' || $secret == '') {
      return FALSE;
    }
    $url = 'https://api.twitter.com/1.1/help/tos.json';
    $getfield = '';
    $requestMethod = 'GET';
    $twitter = new TwitterAPIExchange($this->getConnection($key, $secret));
    $data = $twitter->setGetfield($getfield)
      ->buildOauth($url, $requestMethod)
      ->performRequest();
    $result = json_decode($data);
    if (empty($result)) {
      return FALSE;
    }
    elseif (isset($result->errors)) {
      return $result->errors[0]->message;
    }
    return TRUE;
  }

}
