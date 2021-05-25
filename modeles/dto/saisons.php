<?php
class Saisons
{
	private $Saisons= array();

	public function __construct($array)
	{
		if (is_array($array)) 
		{
			$this->Saisons = $array;
		}
	}

	public function getSaisons()
	{
		return $this->Saisons;
	}


}