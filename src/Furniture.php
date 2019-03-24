<?php

class Furniture
{
	var $tableHeight = 0;

	var $tableWidth  = 0;

	var $tableLength = 0;

	var $legHeight   = 0;

	var $legWidth    = 0;

	var $legLength   = 0;

	public function __construct(
		$tableHeight,
		$tableWidth,
		$tableLength,
		$legHeight,
		$legWidth,
		$legLength
	) {
		$this->tableHeight = $tableHeight;
		$this->tableWidth  = $tableWidth;
		$this->tableLength = $tableLength;
		$this->legHeight   = $legHeight;
		$this->legWidth    = $legWidth;
		$this->legLength   = $legLength;
	}

	private function getVolumen($height, $width, $length)
	{
		return $height * $width * $length;
	}

	private function getSurface($height, $width, $length)
	{
		return (2 * $length * $width) +  (2 * $length * $height) + (2 * $width * $height);
	}

	public function getTotalSurface()
	{
		return 4 * $this->getLegSurface() + $this->getTableSurface();
	}

	public function getTotalVolumen()
	{
		return 4 * $this->getLegVolumen() + $this->getTableVolumen();
	}

	public function getTableSurface()
	{
		return $this->getSurface($this->tableHeight, $this->tableWidth, $this->tableLength);
	}

	public function getTableVolumen()
	{
		return $this->getVolumen($this->tableHeight, $this->tableWidth, $this->tableLength);
	}

	public function getLegSurface()
	{
		return $this->getSurface($this->legHeight, $this->legWidth, $this->legLength);
	}

	public function getLegVolumen()
	{
		return $this->getVolumen($this->legHeight, $this->legWidth, $this->legLength);
	}
}

$tableHeight = 5;
$tableWidth  = 5;
$tableLength = 5;
$legHeight   = 3;
$legWidth    = 3;
$legLength   = 3;

$furniture = new Furniture($tableHeight, $tableWidth, $tableLength, $legHeight, $legWidth, $legLength);

echo PHP_EOL . 'Total furniture volumen is ' . $furniture->getTotalVolumen() . ' and total furniture surface is ' . $furniture->getTotalSurface() . PHP_EOL;
