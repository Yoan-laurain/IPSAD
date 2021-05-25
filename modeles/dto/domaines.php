<?php
class Domaines
{
	private $Domaines= array();

	public function __construct($array)
	{
		if (is_array($array)) 
		{
			$this->Domaines = $array;
		}
	}

	public function getDomaines()
	{
		return $this->Domaines;
	}

}