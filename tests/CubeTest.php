<?php

include_once('src/Cube.php');
include_once('src/ThreeDimensionalShapeInterface.php');

class CubeTest extends \PHPUnit_Framework_TestCase {

	public function testConstruct()
	{
    $cube = new Shapes\Cube(12);
    $this->assertTrue($cube instanceof Shapes\ThreeDimensionalShapeInterface);
    return $cube;
	}

  /**
   * @depends testConstruct
   */
  public function testArea(Shapes\Cube $cube)
  {
    $this->assertTrue(is_numeric($cube->area()));
  }

  /**
   * @depends testConstruct
   */
  public function testPerimeter($cube)
  {
    $this->assertTrue(is_numeric($cube->perimeter()));
  }

  /**
   * @depends testConstruct
   */
  public function testVolume($cube)
  {
    $this->assertTrue(is_numeric($cube->volume()));
  }

}
