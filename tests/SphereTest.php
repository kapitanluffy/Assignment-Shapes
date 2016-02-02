<?php

include_once('src/Sphere.php');
include_once('src/ThreeDimensionalShapeInterface.php');

class SphereTest extends \PHPUnit_Framework_TestCase {

	public function testConstruct()
	{
    $sphere = new Shapes\Sphere(12);
    $this->assertTrue($sphere instanceof Shapes\ThreeDimensionalShapeInterface);
    return $sphere;
	}

  /**
   * @depends testConstruct
   */
  public function testArea(Shapes\Sphere $sphere)
  {
    $this->assertTrue(is_numeric($sphere->area()));
  }

  /**
   * @depends testConstruct
   */
  public function testPerimeter(Shapes\Sphere $sphere)
  {
    $this->assertTrue(is_numeric($sphere->perimeter()));
  }

  /**
   * @depends testConstruct
   */
  public function testVolume(Shapes\Sphere $sphere)
  {
    $this->assertTrue(is_numeric($sphere->volume()));
  }

}
