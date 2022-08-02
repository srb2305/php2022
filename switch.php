<h1>Switch Case</h1>
<?php 
	$gender = 'Male';
	switch ($gender) {
		case 'Male':
			echo "Male entered...";
			break;

		case 'FeMale':
			echo "FeMale entered...";
			break;

		default:
			echo "None of above...";
			break;
	}
?>