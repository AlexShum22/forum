<?php

class First
{
	public $hello = "cho";
	public $name;
	public $sn;
	public function __construct ($name, $sn)
	{
		$this->name=$name;
		$this->sn=$sn;
	}
	public function escape ()
	{
		echo $this->name . ' ' . $this->hello . ' ' . $this->sn;
	}
}

$obj = new First('My', 'PC');
echo $obj->hello;
var_dump($obj);
$obj->escape();
?>
