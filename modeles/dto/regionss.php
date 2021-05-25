<?php
class Regionss
{
	private $Regions= array();

	public function __construct($array)
	{
		if (is_array($array)) 
		{
			$this->Regions = $array;
		}
	}

	public function getRegions()
	{
		return $this->Regions;
	}

}