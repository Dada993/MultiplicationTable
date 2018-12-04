<?php

class calculator{
	
	//varijable
    	private $red;
	private $kol;
	
	//konstruktor
	function __construct($red1, $kol1){
	$this->red = $red1;
        $this->kol = $kol1;
    }
 
	//metod za računanje i vraćanje vrijednosti
    	function multy(){
		return $this->red * $this->kol; 
	}
}

?>
