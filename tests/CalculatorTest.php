<?php

include_once('src/Square.php');
include_once('src/Circle.php');
include_once('src/Calculator.php');
include_once('src/ThreeDimensionalShapeInterface.php');

class CalculatorTest extends \PHPUnit_Framework_TestCase {

	public function testEmptyShapes()
	{
    $calculator = new Shapes\Calculator;
    $this->assertEquals($calculator->surfaceArea(array()), 0);
    $this->assertEquals($calculator->totalVolume(array()), 0);
	}

	public function test2dShapesTotalVolume()
	{
    $calculator = new Shapes\Calculator;
    $square = new Shapes\Square(25);
    $circle = new Shapes\Circle(90);
    $this->assertEquals($calculator->totalVolume([$square, $circle]), 0);
	}
}
