<?php

namespace Drupal\culturefeed_organizers\Plugin\DataType;

use CultuurNet\SearchV3\ValueObjects\Organizer;
use Drupal\Core\TypedData\DataDefinitionInterface;
use Drupal\Core\TypedData\PrimitiveInterface;
use Drupal\Core\TypedData\TypedData;
use Drupal\Core\TypedData\TypedDataInterface;

/**
 * The "culturefeed_organizer" data type.
 *
 * @DataType(
 *   id = "culturefeed_organizer",
 *   label = @Translation("Culturefeed Organizer")
 * )
 */
class CulturefeedOrganizer extends TypedData implements PrimitiveInterface {

  /**
   * The data value.
   *
   * @var \CultuurNet\SearchV3\ValueObjects\Organizer
   */
  protected $value;

  /**
   * {@inheritdoc}
   */
  public function getValue() {
    return $this->value;
  }

  /**
   * Gets the primitive data value casted to the correct PHP type.
   *
   * @return mixed
   *   The page item.
   */
  public function getCastedValue() {
    return $this->value instanceof Organizer ? $this->value : NULL;
  }

}
