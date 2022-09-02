<h2>Inheritance</h2>
<?php 
class a{
	public function x(){
		$a = 5;
		$b =10;
	}
	public function y(){
		$c= 120;
		$d = 150;
	}
}

class b extends a{
	echo $a; //5
}


interface xyz{
	function f(){
		var $a;
	}
	function g(){
		var $b;
	}
}


class c implements xyz{
	//a class implents interfaces,
}

interface xyz222 extends xyz{
	// An interface can extend other interfaces 
}

?>

<H3>Abstract Class</H3>
<?php
 abstract class time{
 	public abstract animalSound();
 	public abstract animalVoice();
 	
 }

 class paint extends time{
 	public function animalSound(){
 		echo "this is abs";
 	}
 	public abstract animalVoice();
 }
?>
