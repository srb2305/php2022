<h1>OOPS</h1>
 <p>1) Class</p>
<p>2) Object </p>
<p>3) Inheritance</p>
<p>4) Interface</p>
<p>5) Abstract</p>
<p>6) Constructor</p>
<p>7) Destructor </p>
<p>8) Method/Function Overloading</p>
<p>9) Method/Function Overriding</p>
<p>10) Polimorfizm</p>
<p>11) Modifiers/Access Specifire</p>
<p>12) Encapsulation</p>
<br>
 <h2>1) Class & object</h2>

<?php 
class mathmaetcs{
	
	function __construct(){
		echo "This is constructer";
	}
	function __destruct(){
		echo "This is __destruct";
	}

	public function add($a,$b){
		return $a + $b;
	}
	
	function sub($a,$b){
		return $a-$b;
	}

	function multiplication($a,$b){
		return $a*$b;
	}

	function insert($fields,$value,$tablename, $image = null){

		if($image){
			// insert image code
		}
		$qry = "insert into $tablename ($fields) values ($value)";

		return true;
	}
}

$object = new mathmaetcs();
echo '<br>ADd=>'.$object->add(15,10);
echo '<br>Sub=>'.$object->sub(15,10);
echo '<br>Multi=>'.$object->multiplication(15,10);


?>

