<?php
class Partenaires
{
	private $Partenaires= array();

	public function __construct($array)
	{
		if (is_array($array)) 
		{
			$this->Partenaires = $array;
		}
	}

	public function getPartenaires()
	{
		return $this->Partenaires;
	}

}