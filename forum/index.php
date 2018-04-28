<?php

class First
{
	public $hello = "cho";
	public $name;
	public $sn;
	private $exte = 300;
	public function __construct ($name, $sn)
	{
		$this->name=$name;
		$this->sn=$sn;
	}
	public function escape ()
	{
		echo $this->name . ' ' . $this->hello . ' ' . $this->sn . $this->exte;
	}
}

$obj = new First('My', 'PC');
$obj->escape();

class Second extends First
{
	public $en = First::$exte;
	public function ect()
	{
		echo '<br> 123 ' . $this->name .  ' ' . $this->sn . $this->en;
	}

}
$obj2 = new Second ('new', 'class');
$obj2->ect();
?>
