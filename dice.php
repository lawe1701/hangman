<?php
// ========================================================
// dice.php
// Description: Random dice value generator and mean value calculation
// Author: Lars Weingartner
// --------------------------------------------------------

echo "Slagserien �r: ";

// Generate random numbers
for ($i=0; $i<6; $i++) {
	$vek[$i] = rand(1,6);
	echo $vek[$i] . ", ";
}

$meanValue = 0;
// Calculate mean value
for ($i=0; $i<6; $i++){
	$meanValue += $vek[$i];
}

echo "<br />Medelv�rdet av slagserien �r: " . round($meanValue/6,1);
?>
