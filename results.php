<?php
  // get the input from text field
  $age = ($_POST['age']);
  define("MIN_R", 18);
  define("MIN_PG", 13);
?>

<?php
	// calculate the volume
  if ($age >= MIN_R) {
    echo "You can go see an R rated movie!";
  } 
  else if ($age >= MIN_PG) {
    echo "You can go see a PG-13!";
  } 
  else {
    echo "You can go see a G rated movie!";
  }  
?>
