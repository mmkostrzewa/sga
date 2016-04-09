<?php

/**
 * @file
 * Contains \Drupal\Tests\action\Unit\Menu\ActionLocalTasksTest.
 */

namespace Drupal\Tests\action\Unit\Menu;

use Drupal\Tests\Core\Menu\LocalTaskIntegrationTestBase;

/**
 * Tests action local tasks.
 *
 * @group action
 */
class ActionLocalTasksTest extends LocalTaskIntegrationTestBase {

  protected function setUp() {
    $this->directoryList = array('action' => 'core/modules/action');
    parent::setUp();
  }

  /**
   * Tests local task existence.
   */
  public function testActionLocalTasks() {
    $this->assertLocalTasks('entity.action.collection', array(array('action.admin')));
  }

}
