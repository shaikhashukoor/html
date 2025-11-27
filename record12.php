<?php
$students = array("Sinu"=>"21", "Anu"=>"23", "Manu"=>"20", "Sahva"=>"22", "Neira"=>"19");
echo "<h3>Original Array:</h3>";
print_r($students);
asort($students);
echo "<h3> Ascending Order:</h3>";
print_r($students);
echo "<br><br>";
arsort($students);
echo "<h3>Descending Order:</h3>";
print_r($students);
?>


