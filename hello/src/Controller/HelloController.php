<?php
/**
 * @file
 * Contains \Drupal\hello\Controller\HelloController.
 */
 
namespace Drupal\hello\Controller;
 
/**
 * DemoController.
 */
class HelloController {
  /**
   * Generates an example page.
   */
  public function demo() {
    return array(
      '#markup' => t('Hello World!'),
    );
  }      
}