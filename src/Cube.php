<?php namespace Shapes;

include_once('ShapeInterface.php');
include_once('ThreeDimensionalShapeInterface.php');

class Cube implements ShapeInterface, ThreeDimensionalShapeInterface {

  protected $side;

  /**
  * Cube constructor
  *
  * @param int $side
  */
  public function __construct($side)
  {
      $this->side = $side;
  }

  /**
  * Get cube area
  *
  * @return int
  */
  public function area()
  {
    return sqrt($this->side) * 6;
  }

  /**
  * Get cube perimeter
  *
  * @return int
  */
  public function perimeter()
  {
    return (4 * $this->side) * 12;
  }

  /**
  * Get cube volume
  *
  * @return int
  */
  public function volume()
  {
    return pow($this->area(), 3);
  }
}
