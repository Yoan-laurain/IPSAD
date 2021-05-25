<?php
class lesAvis
{
	private $lesAvis= array();

	public function __construct($array)
	{
		if (is_array($array)) 
		{
			$this->lesAvis = $array;
		}
	}

	public function getlesAvis()
	{
		return $this->lesAvis;
	}

}