<h1>form input</h1>
<form action="#"methord="GET">
<input type="number" name="number1"
placeholder ="enter first number ">

<input type="number" name="number2"
 placeholder="enter second number">

 <input type="submit" name="submitbtn">
</form>
<?php
  
  error_reporting(0);
  $input1=$_GET['number1'];
  $input2=$_GET['number2'];

  echo '<br>sum='.sum($input1,$input2);
  echo '<br>minus='.minus($input1,$input2);
  
  echo '<br>divid='.divide($input1,$input2);

  function sum($a,$b){
  	return $a+$b;
  }
    function minus($a,$b){
    	return $a-$b;

    }
      function divide ($a,$b){
      	return $a/$b;
      }
      ?>

