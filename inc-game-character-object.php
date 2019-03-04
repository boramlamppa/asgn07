<?php
class Tiger
{
	private $playName;
	private $score;

	public function getplayName()
	{
		return $this->playName;
	}
	
	public function setscore($score)	
	{
		$this->score = $score;
	}
	
	public function getscore()
	{
		return $this->score;
	}
	
	public function setplayName($playName)
	{
		$this->playName = $playName;
	}
	
} // end of class definition
?>