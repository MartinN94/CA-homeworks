<?php 
namespace Includes\Calc;

class Calc {
	//create properties for calculator
	public $num1;
	public $num2;
	public $calc;
 
	// create constructor method
	public function __construct($num1, $num2, $calc){
		$this->num1 = $num1;
		$this->num2 = $num2;
		$this->calc = $calc;	
	}

	// create calcMethod() that will make calculations
	public function calcMethod(){
		if ($this->calc == 'add') {
			return $this->num1 + $this->num2;
		} elseif ($this->calc == 'sub') {
			return $this->num1 - $this->num2;		
		} elseif ($this->calc == 'mul') {
			return $this->num1 * $this->num2;	
		}
	}
 
}


