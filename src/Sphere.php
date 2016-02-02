<?php namespace Shapes;

include_once('ShapeInterface.php');
include_once('ThreeDimensionalShapeInterface.php');

class Sphere implements ShapeInterface, ThreeDimensionalShapeInterface {

  protected $radius;

  /**
  * Sphere constructor
  *
  * @param int $radius
  */
  public function __construct($radius)
  {
      $this->radius = $radius;
  }

  /**
  * Get sphere area
  *
  * @return int
  */
  public function area()
  {
    return (pi() * sqrt($this->radius)) * 4;
  }

  /**
  * Get sphere perimeter
  *
  * @return int
  */
  public function perimeter()
  {
    return (pi() * $this->radius) * 2;
  }

  /**
  * Get sphere volume
  *
  * @return int
  */
  public function volume()
  {
    return (pow($this->radius, 3) * pi()) * (4 / 3);
  }
}
