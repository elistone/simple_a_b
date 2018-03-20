<?php
/**
 * @file
 * Provides Drupal\simple_a_b\SimpleABTypeInterface
 */

namespace Drupal\simple_a_b;

use Drupal\Component\Plugin\PluginInspectionInterface;

/**
 * Defines an interface for simple a/b test plugins.
 */
interface SimpleABTypeInterface extends PluginInspectionInterface {

  /**
   * Return the name of the ice cream flavor.
   *
   * @return string
   */
  public function getId();

  /**
   * Return the name of the ice cream flavor.
   *
   * @return string
   */
  public function getName();


  /**
   * Loads the correct select options
   *
   * @return mixed
   */
  public function loadSelectOptions();
}
