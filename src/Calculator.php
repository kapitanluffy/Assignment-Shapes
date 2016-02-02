<?php

namespace Shapes;

include_once('src/ShapeInterface.php');
include_once('src/ThreeDimensionalShapeInterface.php');

class Calculator {

	/**
	 * Get the total surface area of all shapes
	 *
	 * @param array $shape
	 * @return int
	 */
	public function surfaceArea(array $shapes)
	{
		$totalSurfaceArea = 0;
		foreach($shapes as $shape) {
			if(!($shape instanceof ShapeInterface)) continue;
			$totalSurfaceArea += $shape->area();
		}
		return $totalSurfaceArea;
	}

	/**
	 * Get the total volume of all shapes
	 * NOTE: Ignore any 2 dimensional shapes because 2D shapes don't have volume.
	 *
	 * @param array $shapes
	 */
	public function totalVolume(array $shapes)
	{
		$totalVolume = 0;
		foreach($shapes as $shape) {
			if(!($shape instanceof ThreeDimensionalShapeInterface)) continue;
			$totalVolume += $shape->volume();
		}
		return $totalVolume;
	}

}
