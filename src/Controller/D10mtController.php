<?php
/**
 * @file D10mtController.php
 * 
 */

// set namespace to Drupal\<module name>\Controller
// Note: no "src" and capital C in Controller

namespace Drupal\d10mt\Controller;
use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for the d10mt "Hi" message.
 * Class name matches this file name, which itself matches the first part
 * of this bit from the routing.yml file:
 * D10mtController::helloWorld
 */
class D10mtController extends ControllerBase {
  /**
   * Hi World.
   *
   * @return array
   *   Our message.
   */

   // The name of this method matches the SECOND part of this line in the routing file:
   // D10mtController::hiWorld
  public function hiWorld() {
    return [
      '#markup' => $this->t('Hi from the d10mt module'),
    ];
  }
}