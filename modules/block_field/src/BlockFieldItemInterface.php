<?php

/**
 * @file
 * Contains \Drupal\block_field\BlockFieldItemInterface.
 */

namespace Drupal\block_field;

use Drupal\Core\Field\FieldItemInterface;

/**
 * Defines an interface for the block field item.
 */
interface BlockFieldItemInterface extends FieldItemInterface {

  /**
   * Get block instance.
   *
   * @return null|\Drupal\Core\Block\BlockPluginInterface
   *   Return the block instance or NULL if the block does not exist.
   */
  public function getBlock();

}
