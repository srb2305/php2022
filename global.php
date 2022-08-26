<h1>Global Variable</h1>

<?php 
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>

<br>---------------------<br>
Implode Explode <br>
<?php 
$string = "My name is Khan";
echo $string;
echo "<br>";
//implode("", $string);

// string to array convertion
$array = explode(" ", $string);
print_r($array);

echo "<br>";
// array to string convertion
$myarray = ['hello','how ','are','you'];
print_r($myarray);
echo "<br>";
$newstrng = implode(' ', $myarray);
echo $newstrng;
?>


<h4>Get current page</h4>
<?php  
$fullurl = $_SERVER['PHP_SELF'];
$arrayUrl = explode("/",$fullurl);
$currentPage = ($arrayUrl[2]);
?>