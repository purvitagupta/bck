<?php

namespace Drupal\Tests\twitter_profile_widget\Unit\Menu;

use Drupal\Tests\Core\Menu\LocalTaskIntegrationTestBase;

/**
 * Tests whether Twitter Profile Widget local tasks work correctly.
 *
 * @group twitter_profile_widget
 */
class LocalTasksTest extends LocalTaskIntegrationTestBase {

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();

    // Set the path of the module dynamically.
    $module_path = str_replace(\Drupal::root(), '', __DIR__);
    $module_path = str_replace('tests/src/Unit/Menu', '', $module_path);
    $module_path = trim($module_path, '/');

    $this->directoryList = ['twitter_profile_widget' => $module_path];
  }

  /**
   * Tests whether the server's local tasks are present at the given route.
   *
   * @param string $route
   *   The route to test.
   *
   * @dataProvider getPageRoutesEntity
   */
  public function testLocalTasksEntity($route) {
    $tasks = [
      0 => [
        'entity.twitter_widget.canonical',
        'entity.twitter_widget.edit_form',
        'entity.twitter_widget.delete_form',
      ],
    ];
    $this->assertLocalTasks($route, $tasks);
  }

  /**
   * Provides a list of routes to test.
   *
   * @return array[]
   *   An array containing arrays with the arguments for a
   *   testLocalTasksEntity() call.
   */
  public function getPageRoutesEntity() {
    return [
      ['entity.twitter_widget.canonical'],
      ['entity.twitter_widget.edit_form'],
      ['entity.twitter_widget.delete_form'],
    ];
  }

}
