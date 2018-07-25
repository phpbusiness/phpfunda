<?php

include 'Vehicle.php';

class Car extends Vehicle{	
 	public function __construct(){
 		parent::__construct('BMW');
 		echo  $this->getName();	

 	}	
 } 

 $car1 = new Car();



