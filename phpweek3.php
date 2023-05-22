<?php
//Deel1
$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];

$myArray[]='tram';

// Loop through colors array 
foreach($myArray as $value){
    echo $value . "<br>";
}

//Deel2
$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
$optellen = count ($myArray);
echo "Het array heeft $optellen elementen.";
$myArray[]='tram';
$optellen = count ($myArray);
echo "Het array heeft $optellen elementen.";

//Deel3
//regel2= "bar"
//regel5= 4
//regel8= "Toyota"
//regel9= 3
//regel12= 5
//regel10= 4

//Deel4 a
$cijfersPHP = [4.4, 4.6, 5.6, 6.1, 7.6, 7.2];

$gemiddelde = round(array_sum($cijfersPHP) / count($cijfersPHP), 2); 
echo "<br>"; 
echo $gemiddelde;

//Deel4 b
// Ik denk dat het beter is om de regels samen te voegen, omdat 

?>