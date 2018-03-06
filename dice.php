<?php
// ========================================================
// dice.php
// Description: Random dice value generator and mean value calculation
// Author: Lars Weingartner
// --------------------------------------------------------

echo "Slagserien är: ";

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

echo "<br />Medelvärdet av slagserien är: " . round($meanValue/6,1);
?>
